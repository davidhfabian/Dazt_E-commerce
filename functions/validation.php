<?php

// VALIDACION DE REGISTRO

function validationRegister($user, $file)
{
    $error = [];

    $name = $user['name'];
    $username = $user['username'];
    $email = $user['email'];
    $password = $user['password'];
    // $avatar = $file['avatar'];



    //VALIDACION NAME

    if (strlen($name) === 0) {

        $error['name'] = 'Nombre vacio';
    } else if (preg_match_all('/[0-9]+/', $name)) {
        $error['name'] = 'Nombre no puede contener numeros';
    }


    //VALIDACION EMAIL

    if (strlen($email) === 0) {

        $error['email'] = 'Llena este campo con tu email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error['email'] = 'El formato de email es incorrecto';
    }

    //VALIDACION USERNAME

    if (strlen($username) < 8) {

        $error['username'] = 'Tu nombre de usuario tiene que tener mas de 8 caracteres';
    } else if (strpos($username, ' ')) {

        $error['username'] = 'Tu nombre de usuario no debe tener espacios';
    }

    //VALIDACION PASSWORD

    if (strlen($password) < 8) {

        $error['password'] = 'La clave debe tener mas de 8 caracteres';
    } else if (strlen($password) > 16) {

        $error['password'] = 'La clave debe tener menos de 16 caracteres';
    } else if (!preg_match('`[a-z]`', $password)) {

        $error['password'] = "La clave debe tener al menos una letra minúscula";
    } else if (!preg_match('`[A-Z]`', $password)) {

        $error['password'] = "La clave debe tener al menos una letra mayuscula";
    } else if (!preg_match('`[0-9]`', $password)) {

        $error['password'] = "La clave debe tener al menos un caracter numerico";
    }

    //VALIDACION DE ARCHIVO
    if (!empty($file['avatar']['name'])){
        if ($file['avatar']['error'] === 0){
            $ext = pathinfo($file['avatar']['name'], PATHINFO_EXTENSION);
    
            if($ext != 'jpg' and $ext != 'jpeg' and $ext != 'png'){
                $error['file'] = 'Tipo de imagen invalido';
            } else if ($file['avatar']['size'] > 1e+6){
                $error['file'] = 'Imagen demasiado pesada (max-1mb)';
            }
            
        } else {
            $error['file'] = 'Archivo no subido al directorio temporal ';
        }

    } else {

    $error['file'] = 'No cargo ningun archivo';

    }


    //RETURN
    return $error;
}


// VALIDACION LOGIN

function validationLogin($user)
{

    $error = [];


    $email = $user['email'];
    $password = $user['password'];



    // VALIDACION DE EMAIL

    if (strlen($email) === 0) {

        $error['email'] = "Llena este campo con tu email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error['email'] = "El formato de emial invalido";
    }


    // VALIDACION PASSWORD

    if (strlen($password) === 0) {
        $error['password'] = "Agrega la contraseña";
    }

    return $error;
}