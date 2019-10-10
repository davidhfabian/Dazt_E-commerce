<?php  

function subirAvatar($archivo, $nombre) {

if (!file_exists('avatars')) {
    mkdir('avatars');
}

$ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);

$nombreArchivo = $nombre . '.' . $ext;

move_uploaded_file($archivo['tmp_name'], 'avatars/' . $nombreArchivo);

return $nombreArchivo;
}

function logged($user) {
    $email = trim($user['email']);
    $password = trim($user['password']);

    $datos = [
        'team' => 'grupo10',
        'commission' => 'tarde',
        'search' => $email
    ];

    $data = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'GET', $datos);

    if (!empty($data['data'])) {
        $usersJSON = $data['data'][0]['json_data'];

        $usersArray = json_decode($usersJSON, true);
        if (password_verify($password, $usersArray['password'])) {
            $_SESSION['name'] = $usersArray['name'];
            $_SESSION['email'] = $usersArray['email'];
            $_SESSION['avatar'] = $usersArray['avatar'];
            

            // GUARDO COOKIE
            if(isset($user['recuerdame'])){
                setcookie('email', $email, time() + (60*60*24*7));
            }


            header('location: profile.php');
        } else {
            return "Email o contraseña incorrecto";
        }
    } else { 
        return "Email o contraseña incorrecto";
    }
}