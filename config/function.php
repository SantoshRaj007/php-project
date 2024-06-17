<?php

    include_once "connect.php";
    
    function redirect($page) {
        echo "<script>window.open('$page','_self');</script>";
    }

    function message($msg) {
        echo "<script>alert('$msg');</script>";
    }

    function insertData($table, $data) {
        global $conn;

        $col = implode(",", array_keys($data));
        $value = implode("','", array_values($data));
        $sql = "insert into $table ($col) value ('$value')";
        $run = mysqli_query($conn, $sql);

        return $run;
    }

    function callingData($table) {
        global $conn;

        $sql = "select * from $table";
        $run = mysqli_query($conn, $sql);
        $data = array();
        while($row = mysqli_fetch_assoc($run)) {
            $data[] = $row;
        }

        return $data;
    }

?>