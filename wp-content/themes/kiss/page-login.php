<?php
//Template Name:Page-Login
?>
<?php
session_start();

if(empty($_SESSION['kiss-rai'])){
   $menu = '<a href="/cadastro" class="nav-link participe w-nav-link">PARTICIPE</a>';
} else{
    $menu= '<a href="/minha-conta" class="nav-link participe w-nav-link">Minha conta</a>';
}

$id = $_SESSION['kiss-rai'];
?>
<!DOCTYPE html>
<!--  Last Published: Thu May 30 2019 18:10:46 GMT+0000 (UTC)  -->
<html data-wf-page="5ce6d86945510823367505b1" data-wf-site="5ce6d86945510881647505b0">

<head>
  <meta charset="utf-8">
  <title>Kiss NYC</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="<?php echo get_stylesheet_directory_uri();?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri();?>/css/components.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri();?>/css/kiss-nyc.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: [
          "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        ]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function (o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
        t + "touch")
    }(window, document);
  </script>
  <link href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo get_stylesheet_directory_uri();?>/images/webclip.jpg" rel="apple-touch-icon">
  <style type="text/css">
    @media screen and (min-width: 1024px) {
      .w-container {
        max-width: 1200px;
      }

      /*.btn.main-banner.w-button {
   		 left: -70px;
   }
   .section.section-mainbanner {
         height: 755px;
         background-position: 85% 27%, 0px 0px;
         background-size: 800px, cover;
   }*/
      .section.section-mainbanner.img {
        background-image: url(https://assets.website-files.com/5ce6d86945510881647505b0/5ceee8e67be2178a62828b59_bg-main-banner-full2.jpg);
      }

      .nav-link.participe {
        padding: 15px 30px;
      }

      .nav-link {
        padding: 20px 15px;
        color: #951a2c;
        font-size: 14px;
      }

      .nav-esq {
        padding: 0 0 0 50px;
      }
    }

    select {
      -webkit-appearance: none !important;
      /*Removes default chrome and safari style*/
      -moz-appearance: none !important;
      /*Removes default style Firefox*/
      -ms-appearance: none;
      -o-appearance: none !important;
      appearance: none !important;
      overflow: hidden;
      width: 120%;
    }

    select::-ms-expand {
      display: none !important;
    }

    .select-cadastro::-ms-expand {
      display: none !important;
    }
  </style>
</head>

<body>


  <div class="section section-nav">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="nav-bar w-nav">
      <div class="container container-navbar w-container">
        <a href="/home" class="logo-nav w-nav-brand w--current">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt="" class="img-logo-nav">
        </a>

        <nav role="navigation" class="nav-menu w-clearfix w-nav-menu">
          <div class="nav-esq"><a href="/home/#participar" class="nav-link w-nav-link">COMO
              PARTICIPAR</a>
            <a href="/home/#premios" class="nav-link w-nav-link">PRÊMIOS</a>
            <a href="/home/#faq" class="nav-link w-nav-link">DÚVIDAS</a>
            <a href="/home/#regulamento" class="nav-link w-nav-link">REGULAMENTO</a>
            <a href="/home/#ganhadores" class="nav-link w-nav-link">GANHADORES</a>
          </div>

          <div class="nav-dir"><a href="/page-login" class="nav-link login w-nav-link">Login</a>
            <a href="/cadastro" class="nav-link w-nav-link">CADASTRO</a>
           <?php echo $menu;?>
          </div>
        </nav>

        <div class="menu-btn w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-banner-interna">
    <div class="container container-banner-interna w-container">
      <img src="<?php echo get_stylesheet_directory_uri();?>/images/Banner/cta-banner.png" alt="" class="img-banner-interna1">
      <img src="<?php echo get_stylesheet_directory_uri();?>/images/Banner/mari-ny.jpg" alt="" class="img-banner-interna2">
      <img src="<?php echo get_stylesheet_directory_uri();?>/images/Banner/pack-banner.png" alt="" class="img-banner-interna3">
    </div>
  </div>
  <div class="section">
    <div class="container container-login w-container">
      <div class="row-login w-row">
        <div class="col-login-esq w-col w-col-6">
          <h3 class="h3-interna">já tenho uma cONTA</h3>
          <div>Faça o seu login:</div>
          <div class="form-login w-form">

            <form method="POST" action="/login"id="wf-form-Form_Login" name="wf-form-Form_Login" data-name="Form_Login"
              class="w-clearfix">
              <label for="name">CPF OU E-MAIL</label>
              <input type="text" class="input w-input" maxlength="256" name="email" data-name="Name"
                placeholder="email@email.com" id="email">

              <label for="senha">SENHA</label>
              <input type="password" class="input w-input" maxlength="256" name="senha" data-name="Email"
                placeholder="Insira sua senha" id="senha" required="">

              <input type="submit" value="ENTRAR" class="btn login w-button">
              <a href="#" class="link-esq-senha">esqueci a senha</a>
            </form>

            <div class="success-message w-form-done">
              <div>Formulário enviado com sucesso</div>
            </div>
            <div class="error-message w-form-fail">
              <div>Dados invalidos</div>
            </div> 
          </div>
          <div>Ou se preferir, conecte-se com</div><a href="#" class="btn login w-button">FACEBOOK</a>
        </div>
        <div class="col-login-dir w-col w-col-6">
          <h3 class="h3-interna">Ainda não TENHO UMA CONTA</h3>
          <div>Para participar da promoção Thankiss, crie sua conta agora mesmo e concorra a prêmios incríveis.</div>
          <a href="#" class="btn login w-button">cadastra-se</a>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer();?>