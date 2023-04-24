<?php

//require_once "../db_connect.php";
//
//
//if(isset($_POST)){
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
//    if(!isset($_POST['agreement'])){
//        echo "Cannot do anything until yuo agree";
//    }else{
//        $tbl_user_dets = "clients";
//        $qy = "INSERT INTO " . $tbl_user_dets . "(";
//        $qy .= "fname, lname, dob, username, email, phone, created_at, updated_at";
//        $qy .= " ) VALUES ( ";
//        $qy .= "";
//        $qy .= ")";
//    }
//
//
//}

require_once "../_autoload.php";
require_once "../_functions.php";
require_once "../_sessions.php";

echo "<pre>";
print_r($_POST);

if(isset($_POST)){
    if(isset($_POST['agreement'])){
        // Agreement is on

        // Models for the 'clients' and 'users table
        $user_details = new Model("clients");
        $user = new Model("users");

        // buffering the inputs for the 'clients' table
        $user_details->fname = $_POST['fname'];
        $user_details->lname = $_POST['lname'];
        $user_details->DOB = $_POST['dob'];
        $user_details->username = $_POST['username'];
        $user_details->email = $_POST['email'];
        $user_details->phone = $_POST['phone'];

        // Storing data to database

        // buffering the inputs for the 'users' table
        $user->username = $_POST['username'];
        $user->password = password_hash(strtolower($_POST['username']), CRYPT_MD5);
        $user->created_at = "NOW()";
        $user->updated_at = "NOW()";

        // Storing data to the database

        if($user_details->save()){
            if($user->save()){
                $_SESSION['msg'] = [
                    'type' => 'success',
                    'title' => 'Registration Complete',
                    'message' => 'Registration is complete. You can now log in ' . $_POST['fname'] . " " . $_POST['lname']
                ];
            }

            redirect("../../files/login.php");
        }else{

            $_SESSION['msg'] = [
                'type' => 'danger',
                'title' => 'Something went wrong.',
                'message' => 'We couldn\'t register you well.'
            ];

            redirect("../../files/register.php");
        }
    }else{
        $_SESSION['msg'] = [
            'type' => 'danger',
            'title' => 'Agreement not made',
            'message' => 'You need to agree with the terms'
        ];
        redirect("../../files/register.php");
    }
}