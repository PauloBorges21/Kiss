<?php
//Template Name: Page Editar Dados
?>

<?php
session_start();

if(empty($_SESSION['kiss-rai'])){
    header("Location: /home");
}

$id = $_SESSION['kiss-rai'];
?>

<?php include(TEMPLATEPATH . '/includes/header2.php');?>


<?php  get_template_directory_uri().'/functions.php';
$usuario = new Usuario();

?>
<?php $usuario = $usuario->getUsuario();

foreach($usuario as $item):

    ?>

      <div class="tabs-content editar-dados">
        <h2 class="h2-conta">MEUS DADOS</h2>
        <div class="form-edit-dados w-form">
          <form method="POST" action="/valida-editar-usuario" id="wf-form-Form_Login" name="wf-form-Form_Login" data-name="Form_Login">
            <div class="txt-obrigatorios">*Campos obrigatórios.</div>
              <label for="name">NOME COMPLETO*</label>
              <input type="text" class="input w-input" maxlength="256" name="nome" data-name="Name 3" placeholder="Seu nome" id="nome" value="<?php echo $item['nome'];?>">

              <label for="name">CPF*</label>
              <input type="text" class="input w-input" maxlength="256" name="cpf" data-name="Name 3" placeholder="000 000 000 - 00" id="cpf" value="<?php echo $item['cpf'];?>">

              <label for="name">DATA DE NASCIMENTO*</label>
    <?php $minha_data = $item['datanascimento'];?>
              <input type="date" class="input w-input" maxlength="256" name="datanascimento" data-name="Name 3" placeholder="DD / MM / AAAA" id="datanascimento" value="<?php echo date('d/m/Y',strtotime($minha_data));?>" required>

              <label for="name">TELEFONE*</label>
              <input type="text" class="input w-input" maxlength="256" name="telefone" data-name="Name 3" placeholder="DD 0000-0000" id="telefone" value="<?php echo $item['telefone'];?>">

              <label for="name">E-MAIL*</label>
              <input type="email" class="input w-input" maxlength="256" name="email" data-name="Name 3" placeholder="Digite seu e-mail" id="email" value="<?php echo $item['email'];?>">
              <label for="name">SENHA*</label>
              <input type="password" class="input w-input" maxlength="256" name="senha" data-name="Name 3" placeholder="Digite sua senha" id="senha" required>
              <label for="name">CONFIRME SUA SENHA*</label>
              <input type="password" class="input w-input" maxlength="256" name="senha2" data-name="Name 3" placeholder="Digite novamente sua senha" id="senha2" required>
              <input type="button" onclick="Verifica()" value="cadastrar e continuar" class="btn cadastro w-button">
              <input type="submit" style="display: none;" id="btn-enviar">

    <?php
    $idEditar = filter_input(INPUT_GET, 'idusuario');
    $idEditar = "idtarefas=".$item['id'];
    ?>
              <?php endforeach;?>

          </form>
          <div class="success-message w-form-done">
            <div>Formulário enviado com sucesso</div>
          </div>
          <div class="error-message w-form-fail">
            <div>Dados invalidos</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer();?>