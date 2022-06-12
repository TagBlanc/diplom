<?php
    class Database{
        public $connect;
        function __construct(){
            $this->connect = mysqli_connect('localhost', 'disabelle', '14526', 'library');
        }
        function first_res($query){
            $result = mysqli_query($this->connect, $query);
            return mysqli_fetch_row($result);
        }
        function all_res($query){
            $result = mysqli_query($this->connect, $query);
            return mysqli_fetch_all($result);
        }
        function in_db($query){
            $result = mysqli_query($this->connect, $query);
            return mysqli_num_rows($result);
        }
        function query($query){
            mysqli_query($this->connect, $query);
            return;
        }
    }
?>
