<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $head; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?= asset("/css/style.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/load.css"); ?>"/>   
    <link rel="icon" type="image/png" href="<?= asset("/images/favicon.png"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>  
</div>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?= $router->route("appadmin.register"); ?>" class="black-text">Criar</a></li>
  <li class="divider"></li>
  <li><a href="<?= $router->route("appadmin.list"); ?>" class="black-text">Listar</a></li>

</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!" class="black-text">Formas de Contato</a></li>
  <li class="divider"></li>
  <li><a href="#!" class="black-text">Enviar Email</a></li>

</ul>

<nav class="grey darken-3">
    <div class="nav-wrapper container">

   
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
    <a href="#!" class="brand-logo center-on-med-and-down">Logo</a>
  
      <ul class="right">
      <li><a class="dropdown-trigger hide-on-med-and-down " href="#!" data-target="dropdown1">Usuários<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger hide-on-med-and-down " href="#!" data-target="dropdown2">Contato<i class="material-icons right">arrow_drop_down</i></a></li>
      
      <li><a href="<?= $router->route("appadmin.logoff"); ?>"><i class="material-icons right">exit_to_app</i>Sair</a></li>
      </ul>
    </div>
  </nav>

  <div class="container section">
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view"> 
      <div class="background">
        <img src="<?=asset("images/background.jpg")?>">
      </div>
     
      <a href="#name"><span class="white-text name"><?= $_SESSION["nameAdmin"] ?></span></a>
      <a href="#email"><span class="white-text email"><?= $_SESSION["emailAdmin"] ?></span></a>
    </div></li>
    <li><a  class="waves-effect" href="#!"><i class="material-icons">person_add</i>Criar Usuário</a></li>
    <li><a  class="waves-effect" href="#!"><i class="material-icons">people</i>Listar Usuário</a></li>
    
    
    <li><div class="divider"></div></li>

    <li><a  class="waves-effect" href="#!"><i class="material-icons">contacts</i>Formas de Contato</a></li>
    <li><a  class="waves-effect" href="#!"><i class="material-icons">contact_mail</i>Enviar Email</a></li>
  </ul>
  </div>

<main class="container pddcontainer">
    <?= $v->section("content"); ?>
</main>



</body>


<script src="<?= asset("/js/jquery.js"); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= asset("/js/form.js"); ?>"></script>
<script src="<?= asset("/js/slide.js"); ?>"></script>

<?= $v->section("scripts"); ?>

<?= flash() ?>
</body>
</html>
