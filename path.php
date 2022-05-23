<?php
require("./package.php");

function RootContent(){
    // set page //
    switch(CheckPath()){ // check path
        case "/contact":
            return ContactPage();
        case "/about": 
            return AboutPage();
        case '/':
            return HomePage();
        default: 
            return '<div style="padding: 20px;font-size: 30px;">Not Found page click <a href="/"> here </a> to come back to website</div>';
    }
}
