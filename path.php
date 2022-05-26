<?php
require('./lib/functional.php');
require("./package.php");

function RootContent(){
    return SwitchPath([
        Route('/contact', fn()=> ContactPage()),
        Route('/about', fn()=> AboutPage()),
        Route('/', fn()=> HomePage()),
        Route('*', fn()=> '<div style="padding: 20px;font-size: 30px;">Not Found page click <a href="/"> here </a> to come back to website</div>'),
    ]);
}
