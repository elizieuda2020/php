<?php
$nome = $_POST['elyed'];
$email = $_POST['ely'];
$senha = $_POST['ed'];
        include('conec.php');
        $we = "INSERT INTO conta(nome, email, senha) VALUES('$nome','$email','$senha')";
        $tu = mysqli_query($con, $we);
        header('Location:login.html');
?>