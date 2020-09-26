<?php
    //
    function get_user() {
        $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');
        $output = '';

        $query = "SELECT `firstname`, `lastname`, `login` FROM `users` WHERE login = '".$_SESSION['login']."'";
        
        $result = mysqli_query($db, $query);
        
        $row = mysqli_fetch_assoc($result);
        
        return $row;
    }
        
    function get_flight_by_id($id) {
        $db = mysqli_connect('wa.toad.cz', 'utemiadi', 'webove aplikace', 'utemiadi');

        $sql = "SELECT * FROM departures WHERE id = '$id'";
        
        $result = mysqli_query($db, $sql);
        
        $row = mysqli_fetch_assoc($result);
        
        return $row;
    }
?>