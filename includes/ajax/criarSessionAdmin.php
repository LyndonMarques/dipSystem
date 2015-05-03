<?php

session_start();

if(isset($_SESSION['idAdmin'])){
    unset($_SESSION['idAdmin']);
    $_SESSION['idAdmin'] = $_POST['idAdmin'];
}else{
    $_SESSION['idAdmin'] = $_POST['idAdmin'];
}


echo $_SESSION['idAdmin'];

