<?php
/*  * Copyright (c) 2022 ณวสันต์ วิศิษฏ์ศิงขร
    *
    * This source code is licensed under the MIT license found in the
    * LICENSE file in the root directory of this source tree.
*/

function getPath(){
    $link = "$_SERVER[REQUEST_URI]";
    $real_path = "/";
    for ($i = 1; $i < strlen($link); $i++) {
        if ($link[$i] == '?') {
            break;
        } else {
            $real_path = $real_path . $link[$i];
        }
    }
    return $real_path;
}

function Route($path, $callbakFunc){
    if($path == '*') return $callbakFunc();

    $getPath = explode('/', getPath());
    $Route_path = explode('/', $path);
    
    if(sizeof($getPath) != sizeof($Route_path)) return;
    for($i=0;$i< sizeof($Route_path); $i++){
        if($getPath[$i] != $Route_path[$i] && $Route_path[$i] != ':') return;
    }
    return $callbakFunc();
}

function SwitchPath($Route){
    foreach ($Route as $value) {
        if ($value) {
            return $value;
        }
    }
}

function getParams($position = -1)
{
    $params = explode('/',substr(getPath(), 1));
    if (!empty($params)) {
        if($position > -1){
        return str_replace("%20", " ", $params[$position]);
        }
        return str_replace("%20", " ", $params[sizeof($params) - 1]);
    }
}

function import($dir)
{
    $getDir = glob($dir);
    if (!empty($getDir)) {
        foreach ($getDir as $file) {
            if (str_contains(substr($file, 1), '.')) {
                require_once("$file");
            } else {
                import("$file/*");
            }
        }
    }
}

function title($title){
    return '<script>document.title = "' . $title . '"</script>';
}