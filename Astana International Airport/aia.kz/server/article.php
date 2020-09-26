<?php
    //Tato funkce vybira post podle id v db
    function get_new_by_id($id) {
        $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
        
        $sql = "SELECT * FROM news WHERE id = '$id'";
        
        $result = mysqli_query($db, $sql);
        
        $row = mysqli_fetch_assoc($result);
        
        return $row;
    }
?>