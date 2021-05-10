<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link rel="stylesheet" href="<?= asset("css/login.css"); ?>"/>



    <link rel="stylesheet" href="<?= asset("/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/load.css"); ?>"/>        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    <title><?= $head ?></title>
</head>

<body ng-app="mainModule" ng-controller="mainController">



<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>


                
        

<div id="login-page">
    <div class="col s12 z-depth-6 card-panel">
    <?= $v->section("content"); ?>
    </div>
</div>
    

 

<script src="<?= asset("/js/jquery.js"); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?= flash(); ?>
</body>
</html>

