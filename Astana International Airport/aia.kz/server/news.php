<?php
    $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
    $output="";
    $res = mysqli_query($db, "SELECT * FROM news GROUP BY id DESC");
    if(mysqli_num_rows($res) > 0) {
        while($row=mysqli_fetch_array($res)) {
            $output .= '
                <div class="new">
                    <a href = "/~utemiadi/aia.kz/pages/article.php?id='.$row["id"].'">
                        <img src = "public/images/'.$row["id"].'.jpg" alt = "Item '.$row["id"].'" title = "Item '.$row["id"].'">
                        <div class="a-new">
                            <h3>'.$row["title"].'</h3>
                            <p>'.$row["short text"].'</p>
                        </div>
                    </a>
                </div>
            ';
        }
    }
    echo $output;
?>