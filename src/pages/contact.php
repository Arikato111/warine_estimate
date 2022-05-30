<?php
function ContactPage(){
    function fromInput(){
        return title("Contact | Input") 
        . <<<HTML
        <div class="box">
            <form action="/contact">
                <input class="form-control" type="text" name="user">
                <button class="btn btn-primary" type="submit">submit</button>
            </form>
        </div>
        HTML;
    }

    function processInput(){
        $value = $_GET['user'];
        return title("Contact | Display") 
            . '<div>'.$value.'</div>';
    }

    if(isset($_GET['user'])){
        return processInput();
    } else {
        return fromInput();
    }
}

