<?php
//Template Name:Meus Dados
?>

<?php
session_start();

if(empty($_SESSION['kiss-rai'])){
    header("Location: /home");
}

$id = $_SESSION['kiss-rai'];
?>


<?php include(TEMPLATEPATH . '/includes/header2.php');?>

      <div class="tabs-content w-clearfix">
        <div class="box-info-conta cupons">
          <h2 class="h2-conta">MEUS CUPONS</h2>
          <div class="box-dados-conta cupons">
            <div>Confira abaixo os cupons que você cadastrou até o momento.</div>
          </div>
          <ul class="ul-cupons w-list-unstyled">
            <li class="li-cupons">
              <div class="row-cupons w-row">
                <div class="col-cupons w-col w-col-5 w-col-small-small-stack">
                  <h6>Cupom Fiscal</h6>
                  <div class="num-cupom-tab">000035482<br></div>
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