<?php
function ContactPage(){
    function fromInput(){
        return title("Contact | Input") 
        . '<form action="/contact">
            <input type="text" name="user">
            <button type="submit">submit</button>
        </form>';
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

