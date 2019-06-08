<section>
<div id="faq" class="section">
  <div class="container container-faq w-container">
    <h2>PERGUNTAS FREQUENTES</h2>
    <div>Tem alguma dúvida? Veja mais informações abaixo.</div>
    <?php if(have_rows('perguntas_frequentes')): while(have_rows('perguntas_frequentes')) : the_row();?>


    <h3 class="h3-faq"><strong><?php the_sub_field('titulo_da_pergunta');?></strong></h3>

    <?php if(have_rows('pergunta_e_respostas')): while(have_rows('pergunta_e_respostas')) : the_row();?>
    <div class="box-item-faq">
      <div data-delay="0" class="dropdown-item-faq w-dropdown">



        <div class="drop-toggle-item-faq w-dropdown-toggle">

          <div class="box-pergunta-faq">

            <div class="pergunta-faq"><strong> <?php the_sub_field('texto_pergunta');?></strong></div>
          </div>
        </div>
        <nav class="drop-item-faq w-dropdown-list">
          <p><?php the_sub_field('texto_resposta');?></p>
        </nav>
      </div>
      <?php endwhile; else: endif; ?>
      <?php endwhile; else: endif; ?>
    </div>
  </div>

</div>
</section>