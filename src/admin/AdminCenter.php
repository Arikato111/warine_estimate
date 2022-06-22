<?php
require('./src/admin/subject/head.php');
require('./src/admin/subject/slidebar.php');
require('./src/admin/subject/NotFoundPage.php');
function AdminCenter(){

    $baseUrl = 'src/admin/pages/';
    return 
    '<div class="wrapper">'
    . headSub()
    . slideBar()
    . '<div class="content-wrapper" style="min-height: 1329.62px;">'
    . SwitchPath([
        Route('/admin/member', $baseUrl . 'MemberAdmin'),
        Route('/admin/', $baseUrl . 'HomeAdmin'),
        Route('*', 'src/admin/subject/NotFoundPage'),
    ])
    . '</div>
    </div>'
    ;
}