<?php
function ContactPage(){
    function fromInput(){
        return title("Contact | Input") 
        .'<div class="box">'
        . '<form action="/contact">
        <input type="text" name="user">
        <button type="submit">submit</button>
        </form>
        </div>'
        ;
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

