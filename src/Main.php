<?php
require('./src/user/pages/LoginPage.php');

function Main() {
    if (!isset($_SESSION['user'])) return LoginPage();  // check login 

    if(getParams(0) == 'logout') {
        session_unset();
        header("Location: /");
        die();
    }
    return
        SwitchPath([
            
            Route('/admin/:/:/:', 'src/admin/AdminCenter'),
            Route('/admin/:/:', 'src/admin/AdminCenter'),
            Route('/admin/:', 'src/admin/AdminCenter'),
            Route('/admin/', 'src/admin/AdminCenter'),

            Route('/:/:/:', 'src/user/UserCenter'),
            Route('/:/:', 'src/user/UserCenter'),
            Route('/:', 'src/user/UserCenter'),
            Route('/', 'src/user/UserCenter'),
            
            Route('*', 'src/subject/NotFoundPage'),
        ]);
}
