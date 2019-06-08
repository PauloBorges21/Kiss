<?php
//Template Name:Valida Endereço

?>
<?php
    session_start();

    if (empty($_SESSION['kiss-rai'])) {
    header("Location: /home");
    }

    $id = $_SESSION['kiss-rai'];


    ?>

<?php  get_template_directory_uri().'/functions.php';
$endereco = new Endereco();


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


if(!empty($_POST['cep'])) {
    $id = addslashes($_POST['id']);
    $id_usuario = $_SESSION['kiss-rai'];
     $rua = addslashes(utf8_decode($_POST['rua']));
    $cep = addslashes($_POST['cep']);
    $numero = addslashes($_POST['numero']);
    $complemento = addslashes(utf8_decode($_POST['complemento']));
    $referencia = addslashes(utf8_decode($_POST['referencia']));
    $cidade = addslashes(utf8_decode($_POST['cidade']));
    $estado = addslashes(utf8_decode($_POST['estado']));;

    if(empty($_POST['id'])) {
        $endereco->adicionarEndereco($id_usuario, $rua, $cep,  $numero, $complemento, $referencia,$cidade,$estado);
        header("Location: /minha-conta");
    }else{
        $endereco->updateEndereco($id,$id_usuario, $rua, $cep,  $numero, $complemento, $referencia,$cidade,$estado);
        header("Location: /home");
    }
}




