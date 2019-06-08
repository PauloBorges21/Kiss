<?php
//Template Name:Teste
get_header();
?>

<div class="section section-mainbanner">
  <div class="container container-mainbanner w-container">
    <a href="#" class="btn main-banner w-button">QUERO PARTICIPAR AGORA</a>
  </div>
</div>
<div class="section section-mainbanner img">
  <a href="cadastro.html" class="link-main-banner w-inline-block"></a>
</div>
<div id="participar" class="section">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php include(TEMPLATEPATH . '/includes/como-participar.php');?>

  <?php include(TEMPLATEPATH . '/includes/sessao-premio.php'); ?>

  <?php include(TEMPLATEPATH . '/includes/perguntas-frequentes.php');?>

  <?php include(TEMPLATEPATH . '/includes/regulamento.php'); ?>

  <div id="ganhadores" class="section section-ganhadores">
    <div class="container container-ganhadores w-container">
      <h2 class="h2-branco">GANHADORES</h2>
      <div>Confira quem já ganhou!</div>
      <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-ganhadores w-slider">
        <div class="mask-ganhadores w-slider-mask">
          <div class="slide-ganhadores w-slide">
            <ul class="ul-ganhadores w-clearfix w-list-unstyled">
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="slide-ganhadores w-slide">
            <ul class="ul-ganhadores w-clearfix w-list-unstyled">
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="slide-ganhadores w-slide">
            <ul class="ul-ganhadores w-clearfix w-list-unstyled">
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="slide-ganhadores w-slide">
            <ul class="ul-ganhadores w-clearfix w-list-unstyled">
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
              <li class="li-ganhadores">
                <div class="box-ganhador">
                  <h4>MALETA DE<br>MAQUIAGEM</h4>
                  <div class="titu-ganhador">Ganhador</div>
                  <div class="nome-ganhador">Luiza dos Santos</div>
                  <div class="titu-ganhador">Sorteado em</div>
                  <div class="data-ganhador">00/00/0000</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="arrow home w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="arrow home w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="nav-slide-ganhadores w-slider-nav w-round"></div>
      </div><a href="#" class="btn ver-todos w-button">VER TODOS</a></div>
  </div>
  <?php endwhile; else: endif; ?>
  <?php get_footer();?>