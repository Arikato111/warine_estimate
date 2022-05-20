<?php

// func for check path to use switch case
function CheckPath(){
    $link = "$_SERVER[REQUEST_URI]";
    $real_string ="";
    for($i=0;$i < strlen($link);$i++){
        if($link[$i] == '?'){
         break;
        } else {
            $real_string = $real_string . $link[$i];
        }
    }    
    return $real_string;
}

function title($title){
    return '<script>document.title = "'.$title.'"</script>';
}