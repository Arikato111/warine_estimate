<?php
require ('./src/user/subject/head.php');
require('./src/user/subject/slidebar.php');

function UserCenter() {
    $base_docs = './src/user/docs/';
    return
        '<div class="wrapper">'
        . headSub()
        . slideBar()
        . '<div class="content-wrapper" style="min-height: 1329.62px;">'
        . SwitchPath([

            Route('/report-techer-special', $base_docs . 'reports/ReportTecherSpecial'),

            Route('/manager-pro-special', $base_docs . 'ManagerProSpecial'),
            Route('/manager-pro', $base_docs . 'ManagerPro'),
            Route('/techer-pro-special', $base_docs . 'TecherProSpecial'),
            Route('/techer-pro', $base_docs . 'TecherPro'),
            Route('/techer-no', $base_docs . 'TecherHasNo'),
            Route('/techer-help',  $base_docs . 'TecherHelpPage'),
            Route('/contact', 'src/user/pages/ContactPage'),
            Route('/about',  'src/user/pages/AboutPage'),
            
            Route('/',  'src/user/pages/HomePage'),
            Route('*', 'src/user/subject/NotFoundPage'),
        ]);
    '</div>
    </div>';
}
