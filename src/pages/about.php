<?php
function AboutPage(){
    // if(!isset($_SESSION["usr"])){
    //    header("Location: /login");
    //     exit;
    // }
    return title("About")
    . <<<HTML
    <div class="box">about page</div>
    HTML;
 }