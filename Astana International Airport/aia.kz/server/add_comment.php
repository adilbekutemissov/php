 <?php
    //Tato cast funkce pridava komentar k urcite novine podle id noviny
    $connect = new PDO('mysql:host=wa.toad.cz;dbname=utemiadi', 'utemiadi', 'webove aplikace');
    
    $error = '';
    $comment_name = '';
    $comment_content = '';
    

    if(empty($_POST["comment_name"]))
    {
        $error .= '
            <div id="result">
                <p>Name is required</p>
            </div>
        ';
    }
    else
    {
        $comment_name = htmlspecialchars($_POST["comment_name"]);
    }

    if(empty($_POST["comment_content"]))
    {
        $error .= '
        <div id="result">
            <p>Comment is required</p>
        </div>
    ';
    }
    else
    {
        $comment_content = htmlspecialchars($_POST["comment_content"]);
    }

    if(empty($_POST["post_id"]))
    {
        $error .= '
        <div id="result">
            <p>Post id is required</p>
        </div>
    ';
    }
    else
    {
        $post_id = $_POST["post_id"];
    }

    if($error == '')
    {
        $query = "INSERT INTO comments (post_id, comment, comment_sender_name)  VALUES (:post_id, :comment, :comment_sender_name)";
        $statement = $connect->prepare($query);
        $statement->execute(array(':post_id' => $post_id, ':comment' => $comment_content, ':comment_sender_name' => $comment_name));
        $error = '<label class="text-success">Comment Added</label>';
    }

    $data = array('error'  => $error);

    echo json_encode($data);
    
?>
