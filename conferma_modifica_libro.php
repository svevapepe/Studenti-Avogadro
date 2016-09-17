<?php
   include('session.php');
   include("config.php");
$id_libro = $_POST['id'];
$ISBN = $_POST['ISBN'];
$password = $_POST['password'];
$titolo = $_POST['titolo'];
$condizioni = $_POST['condizioni'];
$prezzo = $_POST['prezzo'];
echo "Fin qui tutto ok... <br>";
$sql="SELECT * FROM libri WHERE nome='$login_session' AND id='$id_libro';";
$res= mysqli_query($db,$sql);
$count = mysqli_num_rows($res);
$secsql = "UPDATE libri SET ISBN='$ISBN', titolo='$titolo', condizioni='$condizioni', prezzo=$prezzo WHERE id='$id_libro';";
if ($count == 1){
    echo "Pure qui...";
    if ($password == $password_session){
        if (mysqli_query($db,$secsql)){
            echo "Modifica avvenuta con successo!";
            header("location: area_personale.php");
        }
        else{
            echo "Qualcosa è andato storto...";
        }
    }
    else{
        echo "password errata";
    }
}
else {
    echo "count!=1";
}
    ?>