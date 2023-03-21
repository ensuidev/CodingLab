<?php
    if (isset($_POST['submit']))
    {
        if (isset($_POST['usr']))
        {
            include_once('ClassPoo.php');
            $user = $_POST['usr'];
            $pass = $_POST['pass'];
            $login = new Login();
            $login -> entrarDatos($user, $pass);
            $login -> loguear();

            $response = $login -> loguear();

            if ($response === "true")
            {
                header ("Location: ../index.php");
            } else
            {
                echo "<script language='javascript'>
                alert('Error en datos, Por favor verifique e intentelo nuevamente');
                </script>";
            }
        }
    }
?>