<?php

//Template Name:Login
?>

<?php
session_start();

?>



<?php require 'config.php';

if(!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha AND ativo = 1");
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if ($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $_SESSION['kiss-rai'] = $sql['id'];
//        header("Location: ../dash.php");
        // echo "<script>window.location='/meus-cupons.php';</script>";
        echo "<script>window.location='/meus-cupons';</script>";
        exit;

    } else{
        echo ' <div class="success-message w-form-done">
                  <div class="error-message w-form-fail">
                    <div>Dados invalidos</div>
                  </div>
                </div>';
    }
}

?>
