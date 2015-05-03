<?php

session_start();

unset($_SESSION['logado']);
unset($_SESSION['tipo_user']);
unset($_SESSION['nome']);
unset($_SESSION['id_user']);
unset($_SESSION['id_admin']);
unset($_SESSION['idAdmin']);
header("Location: ../../../login.php");