<?php
//Template Name:Minha Conta
?>
<?php error_reporting(E_ERROR | E_PARSE);
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
$mascara = new Mascara();
$endereco = new Endereco();
?>

<?php $usuario = $usuario->getUsuario();


foreach($usuario as $item):

    ?>

      <div class="tabs-content w-clearfix">
        <div class="box-info-conta dados">
          <h2 class="h2-conta">MEUS DADOS</h2>
          <div class="box-dados-conta">
            <div><strong><?php echo $item['nome']?></strong>

            <?php $cpf = $item['cpf'];?>
            <?php $mask ='###.###.###-##';?>


                <?php $xai = $mascara->getmask($cpf,$mask);?>

                <br><?php echo $xai;?>
                <br>
                <?php $minha_data = $item['datanascimento'];?>
                <span id="Data" maxlength="10" value="<%=Dt_Prevista%>" onkeyup="formatar(this,'##/##/####',event)">

                    <?php echo date('d/m/Y',strtotime($minha_data));?></span>

                <?php $masktel = $item['telefone'];
                $masktel="(".substr($masktel,0,2).") ".substr($masktel,2,-4)." - ".substr($masktel,-4);
                ?>
                <br>
                <?php echo $masktel;?>

                <br><?php echo $item['email']?></div>
          </div>
            <?php endforeach;?>
            <a href="#" class="btn cinza peq w-button">EDITAR</a>
        </div>
<?php $endereco = $endereco->getEndereco();

foreach ($endereco as $item):

?>

        <div class="box-info-conta end">
          <h2 class="h2-conta">ENDEREÇO</h2>
          <div class="box-dados-conta">
            <div><strong><?php echo utf8_encode($item['rua'])?>,<?php echo $item['numero']?></strong>
                <?php $resultcom  = utf8_encode($item['complemento']);
                if(!empty($resultcom)){
                    echo ' <br>'.$resultcom;
                }else{
                    echo'';
                }
                ?>

                <?php $resultref = utf8_encode($item['referencia']);
                if(!empty($resultref)){
                    echo ' <br>'.$resultref;
                }else{
                    echo'';
                }
?>

                <?php $cep = $item['cep'];?>
                <?php $mask2 ='#####-###';?>

                <?php $varenzo = $mascara->getmask($cep,$mask2);?>

                <br><?php echo $varenzo;?>

                <br><?php echo utf8_encode($item['cidade'])?> - <?php echo $item['estado'];?>
            </div>
          </div>
            <?php endforeach;?>
            <a href="#" class="btn cinza peq w-button">EDITAR</a>
        </div>

        <div class="box-info-conta cupons">
          <h2 class="h2-conta">MEUS CUPONS</h2>
          <div class="box-dados-conta cupons">
            <div>Confira abaixo os cupons que você cadastrou até o momento.
            </div>
          </div>

          <ul class="ul-cupons w-list-unstyled">
            <li class="li-cupons">
              <div class="row-cupons w-row">
                <div class="col-cupons w-col w-col-5 w-col-small-small-stack">
                  <h6>Cupom Fiscal</h6>
                  <div class="num-cupom-tab">000035482
                      <br>
                  </div>
                  <div class="data-cupom-tab">Cadastrado em 20/09/2019</div>
                </div>

                <div class="col-cupons w-col w-col-4 w-col-small-small-stack">
                  <h6>Número da Sorte</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
                <div class="col-cupons w-col w-col-3 w-col-small-small-stack">
                  <h6>Chance Extra</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
              </div>
            </li>
            <li class="li-cupons">
              <div class="row-cupons w-row">
                <div class="col-cupons w-col w-col-5">
                  <h6>Cupom Fiscal</h6>
                  <div class="num-cupom-tab">000035482<br></div>
                  <div class="data-cupom-tab">Cadastrado em 20/09/2019</div>
                </div>
                <div class="col-cupons w-col w-col-4">
                  <h6>Número da Sorte</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
                <div class="col-cupons w-col w-col-3">
                  <h6>Chance Extra</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
              </div>
            </li>
            <li class="li-cupons">
              <div class="row-cupons w-row">
                <div class="col-cupons w-col w-col-5">
                  <h6>Cupom Fiscal</h6>
                  <div class="num-cupom-tab">000035482<br></div>
                  <div class="data-cupom-tab">Cadastrado em 20/09/2019</div>
                </div>
                <div class="col-cupons w-col w-col-4">
                  <h6>Número da Sorte</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
                <div class="col-cupons w-col w-col-3">
                  <h6>Chance Extra</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
              </div>
            </li>
            <li class="li-cupons">
              <div class="row-cupons w-row">
                <div class="col-cupons w-col w-col-5">
                  <h6>Cupom Fiscal</h6>
                  <div class="num-cupom-tab">000035482<br></div>
                  <div class="data-cupom-tab">Cadastrado em 20/09/2019</div>
                </div>
                <div class="col-cupons w-col w-col-4">
                  <h6>Número da Sorte</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
                <div class="col-cupons w-col w-col-3">
                  <h6>Chance Extra</h6>
                  <div class="num-sorte-tab">35000</div>
                </div>
              </div>
            </li>
          </ul>
          <div class="btn-sucesso tab"><a href="#" class="btn cinza w-button">VER TODOS</a><a href="#" class="btn w-button">cadastrar</a></div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>