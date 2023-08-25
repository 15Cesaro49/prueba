<?php 
    session_start();
    include("db.php");

    if(!isset($_POST['correo'])){
        header('location:../HTML/form-registro.php');
    }

    $correo = $_POST['correo'];
    $contra = $_POST ['contra'];

    $sql = "SELECT * FROM registro WHERE correo='$correo' and contra='$contra'";
    $resultado = mysqli_query($conex, $sql);
    $existe = mysqli_num_rows($resultado);
    if ($existe > 0 ) {
        while ($row = mysqli_fetch_array($resultado)) {
            if ($correo == $row['correo']&& $contra== $row['contra']) {
                $_SESSION['correo']=$row['correo'];
                $_SESSION['contra']=$row['contra'];
                $_SESSION['id']=$row['id'];
                echo '<script language="javascript">window.location.href="../HTML/index.php";alert("Bienvenido!!!!");</script>';
            }
        }
    }else{
        header('location:../HTML/registro.php');
        echo '<script language="javascript">alert("Usuario o contraseñas incorrectos");window.location.href="../HTML/registro.php"</script>';
    }


?>