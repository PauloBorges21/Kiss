<?php
//Template Name:UPDATE Usuário


session_start();

if (empty($_SESSION['kiss-rai'])) {
    header("Location: /home");
}

$id = $_SESSION['kiss-rai'];


?>
<?php  get_template_directory_uri().'/functions.php';
$usuario = new Usuario();


//
//if(isset($_FILES['arquivo'])){
//
//    if(count($_FILES['arquivo']['tmp_name']) >0) {
//
//        for($x=0;$x<count($_FILES['arquivo'] ['tmp_name']); $x++) {
//
//            $nomedoarquivo = md5($_FILES['arquivo'] ['name'] [$x].time().rand(0,999)).'.jpg';
//            //$nomedoarquivo = ($_FILES['arquivo'] ['name'] [$x]).'.jpg';
//
//            move_uploaded_file($_FILES['arquivo'] ['tmp_name'][$x],'C:/wamp64/www/intranet/assets/images/users/'.$nomedoarquivo);
//
//            echo 'Arquivo enviado com sucesso!';
//        }
//    }
//}


if(!empty($_POST['nome'])&&(!empty($_POST['senha'])) ) {
    $id = $_SESSION['kiss-rai'];
    $nome = addslashes(utf8_decode($_POST['nome']));
    $cpf = addslashes($_POST['cpf']);
    $datanascimento = addslashes($_POST['datanascimento']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes(md5($_POST['senha']));


    $usuario->editarUsuario($id, $nome, $cpf, $datanascimento, $telefone, $email, $senha);

       header("Location: /cadastro-sucesso");
}else{
     header("Location:/editar-dados");
}
