<?php  
session_start();

function loggedIn(){
    
    if(!empty($_SESSION['email'])){
    
        return true;
    }
    return false;
}