<?php
require ('./src/subject/head.php');
require('./src/subject/slidebar.php');
require('./src/pages/LoginPage.php');

function Main() {
    if (!isset($_SESSION['user'])) return LoginPage();  // check login 

    if(getParams(0) == 'logout') {
        session_unset();
        header("Location: /");
        die();
    }

    return
        '<div class="wrapper">'
        . headSub()
        . slideBar()
        . '<div class="content-wrapper" style="min-height: 1329.62px;">'
        . SwitchPath([
            Route('/techer-no', 'src/docs/TecherHasNo'),
            Route('/techer-help',  'src/docs/TecherHelpPage'),
            Route('/contact', 'src/pages/ContactPage'),
            Route('/about',  'src/pages/AboutPage'),
            Route('/',  'src/pages/HomePage'),
            Route('*', 'src/subject/NotFoundPage'),
        ]);
    '</div>
    </div>';
}
