<?php
include('db.php');


if  (isset($_POST['Ingresar'])) {
    $Usuario = $_POST['Usuario'];
    $Clave = $_POST['password'];
    echo $Usuario;
    echo $Clave;
    $query = "SELECT * FROM Medicos WHERE Usuario='$Usuario' AND Clave = '$Clave'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        header('Location: pagina.html');
    }else{
        $_SESSION['message'] = "Error: Usuario y/o contraseña incorrecta";
        header('Location: index.php');
    }
  }

  
  
?>