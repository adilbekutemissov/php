<?php
    //Tato cast funkce zobrazuje urcity komentar podle id na strance urcite noviny podle id
    $connect = new PDO('mysql:host=wa.toad.cz;dbname=utemiadi', 'utemiadi', 'webove aplikace');


    $query = "SELECT * FROM comments WHERE post_id = :post_id ORDER BY comment_id";

    $statement = $connect->prepare($query);

    $statement->execute([ ':post_id' => $_GET['id'] ]);

    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row)
    {
        $output .= '
            <div class="panel panel-default">
                <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
                <div class="panel-body">'.$row["comment"].'</div>
                <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
            </div>
        ';
        $output .= get_reply_comment($connect, $row["comment_id"]);
    }

    echo $output;

    function get_reply_comment($connect, $post_id, $marginleft = 0)
    {
        $query = "SELECT * FROM news WHERE post_id = '".$post_id."'";
        $output = '';
        $statement = $connect->prepare($query);
        $result = $statement->fetchAll();
        $count = $statement->rowCount();
        if($post_id)
        {
            $marginleft = 0;
        }
        else
        {
            $marginleft = $marginleft + 96;
        }
        if($count > 0)
        {
            foreach($result as $row)
            {
                $output .= '
                <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
                    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
                    <div class="panel-body">'.$row["comment"].'</div>
                    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
                </div>
                ';
                $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
            }
        }
        return $output;
    }
?>