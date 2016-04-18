<?php
function registration_user(){
    return null;
}
function get_user(){
    return null;
}

function render(){
    $errors=[];
    $current_user= get_user();
    include "main.php";
    
}

render();