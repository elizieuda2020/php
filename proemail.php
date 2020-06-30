<?php
    require_once('conec.php');
    if(isset($_POST['btn-login'])){
        $UName = $_POST['SeuNome'];
        $Pass = $_POST['password'];

        if(empty($UName) || empty($Pass))
        {
            echo 'Por favor preencha todos os espaços';
        }else{
            $query = "select * from UName where nome,senha";
            $result = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($result)){
                $db_password = $row['password'];
                if(md5($Pass) == $db_password){
                    header("location:admin.php")
                }
            }
            else{
                echo 'Senha incorreta'
            }
        }
    }
?>