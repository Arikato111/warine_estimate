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
    $base_docs = './src/docs/';
    return
        '<div class="wrapper">'
        . headSub()
        . slideBar()
        . '<div class="content-wrapper" style="min-height: 1329.62px;">'
        . SwitchPath([
            Route('/techer-pro-special', $base_docs . 'TecherProSpecial'),
            Route('/techer-pro', $base_docs . 'TecherPro'),
            Route('/techer-no', $base_docs . 'TecherHasNo'),
            Route('/techer-help',  $base_docs . 'TecherHelpPage'),
            Route('/contact', 'src/pages/ContactPage'),
            Route('/about',  'src/pages/AboutPage'),
            Route('/',  'src/pages/HomePage'),
            Route('*', 'src/subject/NotFoundPage'),
        ]);
    '</div>
    </div>';
}
