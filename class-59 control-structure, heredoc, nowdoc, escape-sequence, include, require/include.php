<?php
    include_once "files/file1.php";
    // include "files/file2.php";
    // include("file1.php");
    // include_once("file1.php");
    echo "After include<br>";

    require_once "files/file2.php";
    // require "files/file2.php";
    echo "After require<br>";

    echo $name."<br>";
    echo $age."<br>";
?>