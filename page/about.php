<?php
function AboutPage(){
    if(!isset($_SESSION["usr"])){
       header("Location: /login");
        exit;
    }
    $title = "About";
    return title("About")
    . '<div class="box">about page</div>'
    ;
 }