<?php

function LoginPage(){
    $error = "";
    if(isset($_POST['email'])){
        if(!empty($_POST["email"])){
            $_SESSION["user"] = "logined";
            header("Location: /");
        } else {
            $error = "Invalid username or password";
        }
    }

    function getError($error) {
        if($error) return '<div style="color: red;">'. $error. '</div>';
    }

    return  title("Login") .
    <<<HTML
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="/images/icon.png" alt="Logo">
            </div>
            <div class="colm-form">
                <h3>การอาชีพวิทยาลัยวารินชำราบ <br> การประเมินบุคลากร</h3>
                <div class="form-container">
                    <form action="/login"  method="post">
                        $error
                        <input type="text" name="email" placeholder="Email address or phone number">
                        <input type="password" name="password" placeholder="Password">
                        <button class="btn-login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    HTML;
}