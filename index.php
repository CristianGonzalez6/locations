<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $code = (string)$_POST['classroom_code'];
    $code = trim($code);
    if((bool)preg_match('/^[a-zA-Z0-9-_\s]{10}/', $code)){ // only for numeric codes/nomenclatures with 10 digits

        require('dataAccess/ConnectionToSql.php');
        require('dataAccess/locations.php');

        $info = new locations();

        $info = $info->Read($code);

        if(isset($info)){
            // modify the attributes inside the info variable, with those of your table in your database
            if($info['classroom_active'] === 'Y'){
                $success[0] = 'classroom: '.$info['classroom'];
                $success[1] = 'Campus: '.$info['campus'];
                $success[2] = 'Floor: '.$info['floor'];

                $map = $info['MAP'];
            }
            else{
                $errors = 'Sorry, this classroom is not enabled';
            }
        }
        else{
            $errors = 'No information was found in the system, please check the code sent';
        }
    }
    else{
        $errors = 'The code sent is incorrect';
    }
}

require 'presentation/locations.php';