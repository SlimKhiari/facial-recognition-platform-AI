<?php
//Auteur: EL BAROUDI Marouane - IATIC4 - 2021/2022
//on appel ce fichier, après la soumission des données tapés dans la partie (includes/modifierMyInfo.php)
    spl_autoload_register(function ($class_name) {
        include '../Classes/'. $class_name . '.php';
    });

    session_start();

    if(!isset($_SESSION['Id_acc'])) {
        header('Location: /gestion-visiteur/');
        die();
    }

    if($_POST['BtnEdit_Info']) {

        $user = User::findBy($_SESSION['Id_acc']);
        if(User::findBy($_POST['update_email'], 'email') && ($user->getEmail() != $_POST['update_email']) || User::findBy($_POST['update_tele'], 'telephone') && ($user->getTelephone() != $_POST['update_tele'])) {

            //New Email already Used by another account
            header('Location: /gestion-visiteur/home.php?'. sha1('email_used'));
            die();

        }

        if($user->getEmail() != $_POST['update_email']) $user->setEmail($_POST['update_email']);


        if($_POST['password_old'] != $user->getPassword()) {

            //Old password is Wrong
            header('Location: /gestion-visiteur/home.php?'. sha1('password_wrong'));
            die();

        } else {

            if(!empty($_POST['password_new']) || !empty($_POST['password_confirm'])){
              if($_POST['password_new'] != $_POST['password_confirm']) {

                  //New Password and Confirmation Password are not matching
                  header('Location: /gestion-visiteur/home.php?'. sha1('password_confirmation_wrong'));
                  die();

              } else {

                  $user->setPassword($_POST['password_new']);

              }
            }

        }

        if(User::updateUser($user)) {

            //EMAIL (|| ou &&)Password Updated
            header('Location: /gestion-visiteur/home.php?'. sha1('info_edit'));
            die();

        } else {

            //Password Not updated | Server Issues
            header('Location: /gestion-visiteur/home.php/?'. sha1('exc_problem'));
            die();
        }

    } else {

        header('Location: /gestion-visiteur/');
        die();

    }

?>
