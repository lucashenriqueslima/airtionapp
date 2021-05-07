<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= asset("css/login.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/style.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/form.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/button.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/load.css"); ?>"/>        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    <title>Document</title>
</head>

<body ng-app="mainModule" ng-controller="mainController">



<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>


                
        
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
    <form class="login-form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">
        <div class="row">
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix" title="Utilizar apenas números para CPF">account_circle</i>
            <input class="validate" id="account" name="email" type="text">
            <label for="account">Email ou CPF</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" name="passwd" type="password">
            <label for="password">Senha</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field login-text" style="padding: 0 18px 0 18px">
          <p>
        <label>
        <input type="checkbox" />
        <span>Lembrar-me</span>
        </label>
        </p>
    
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12" style="height: 30px; margin: 5px 0 5px 0;">
            <div class="central">
            <button class="btn-small waves-effect waves-light col s12" name="action" style="vertical-align:middle"> <span>ENTRAR </span>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6" style="height: 30px; padding: 0px 15px 0px 15px; margin: 0px;">
            <p class="margin medium-small"><a href="#">Solicitar nova conta</a></p>
          </div>
          <div class="input-field col s6 m6 l6" style="height: 30px; padding: 0px 15px 0px 15px; margin: 0px;">
              <p class="margin right-align medium-small"><a href="#">Esqueceu sua senha?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div> 
  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= asset("/js/jquery.js"); ?>"></script>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?= flash(); ?>
</body>
</html>

