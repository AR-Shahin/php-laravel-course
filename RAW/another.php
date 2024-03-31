<?php

// echo "Another File";

session_start();

if(isset( $_SESSION["name"])){

    echo $_SESSION["name"];
}