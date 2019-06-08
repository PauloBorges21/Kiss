<style>
.section.section-premios {
  background-image: url('<?php the_field('banner_premio');?>');
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
}

    
</style>


<div id="premios" class="section section-premios">
    <div class="container container-premios w-container">
      <h2 class="h2-branco"><?php the_field('titulo_da_sessao_premio');?></h2>
      <div><?php the_field('descricao_sessao_premio');?></div>
      <div class="row-premios w-row">
        <div class="col-premios w-col w-col-4">
          <div class="box-bg-circle-branco"><img src="<?php the_field('primeira_imagem_premio',6);?>" alt=""></div>
          <div><strong><?php the_field('primeira_descricao');?></strong></div>
        </div>
        <div class="col-premios w-col w-col-4">
          <div class="box-bg-circle-branco"><img src="<?php the_field('segunda_imagem',6);?>" alt=""></div>
          <div><strong><?php the_field('segunda_descricao');?></strong></div>
        </div>
        <div class="col-premios w-col w-col-4">
          <div class="box-bg-circle-branco"><img src="<?php the_field('terceira_imagem',6);?>" alt="" class="img-pac"></div>
          <div><strong><?php the_field('terceira_descricao');?></strong></div>
        </div>
      </div>
    </div>
  </div>