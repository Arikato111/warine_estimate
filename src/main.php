<?php

function RootContent()
{
    if (!isset($_SESSION['user'])) return LoginPage();  // check login 

    function logoutSub()
    {
        session_unset();
        header("Location: /");
    }

    return
        '<div class="wrapper">'
        . headSub()
        . slideBar()
        . '<div class="content-wrapper" style="min-height: 1329.62px;">'
        . SwitchPath([
            Route('/logout', fn () => logoutSub()),
            Route('/contact', fn () => ContactPage()),
            Route('/about', fn () => AboutPage()),
            Route('/', fn () => HomePage()),
            Route('*', fn () => '<div style="padding: 20px;font-size: 30px;">Not Found page click <a href="/"> here </a> to come back to website</div>'),
        ]);
    '</div>
    </div>';
}
