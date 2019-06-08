<?php
//Template Name:Endereço
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

$endereco = new Endereco();

?>

<?php $endereco = $endereco->getEndereco();

foreach($endereco as $item):

?>

      <div class="tabs-content editar-dados">
        <h2 class="h2-conta">MEU Endereço</h2>
        <div class="form-edit-dados w-form">
          <form method="post" action="/valida-endereco" id="wf-form-Form_Login" name="wf-form-Form_Login" data-name="Form_Login">
            <div class="txt-obrigatorios">*Campos obrigatórios.</div>


              <input type="hidden" value="<?php echo $item['id'];?>" name="id">
              <label for="name">cep</label>
              <input type="text" class="input peq w-input" value="<?php echo $item['cep'];?>" "maxlength="256" name="cep" data-name="Name 3" placeholder="00000-000" id="name-3">
              <label for="name">rua</label>
              <input type="text" class="input w-input" value="<?php echo $item['rua'];?>" maxlength="256" name="rua" data-name="Name 3" placeholder="Rua/Avenida/Alameda" id="name-3">
              <label for="name">número</label>
              <input type="text" class="input peq w-input" value="<?php echo $item['numero'];?>" maxlength="256" name="numero" data-name="Name 3" placeholder="0000" id="name-3">
              <label for="name">complemento</label>
              <input type="text" class="input w-input" maxlength="256" value="<?php echo $item['complemento'];?>" name="complemento" data-name="Name 3" placeholder="DD 0000-0000" id="name-3">
              <label for="name">referência</label>

              <input type="text" class="input w-input" value="<?php echo $item['referencia'];?>" maxlength="256" name="referencia" data-name="Name 3" placeholder="Digite seu e-mail" id="name-3">
            <div class="w-row">
                  <div class="w-col w-col-4">
                      <label for="name-4">estado</label>
                  <select id="estado1" value="Selecione o Estado" name="estado" class="select w-select">

                  </select>
              </div>
                        <?php endforeach;?>

                <div class="w-col w-col-8">
                    <label for="name-4">cidade</label>
                    <select id="cidade1" class="input w-input" maxlength="256" name="cidade" value="Selecione a Cidade" id="name-3"></select>
                    <script language="JavaScript" type="text/javascript" charset="utf-8">
                        new dgCidadesEstados({
                            cidade: document.getElementById('cidade1'),
                            estado: document.getElementById('estado1')
                        })
                    </script>
                </div>
            </div>
              <input type="submit" value="ATUALIZAR endereço" class="btn cadastro w-button">
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