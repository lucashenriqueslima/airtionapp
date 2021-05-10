<?php $v->layout("themes/_theme_admin"); ?>

    <div class="main_content_box">
    <div class="login">
      <form class="form" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
        <div class="row">
    <form class="col s12">
    <div class="row">
    <form class="col s12">
      <div class="row">
      <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="first_name">
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name">
          <label for="last_name">Sobrenome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cpf" type="text" name="cpf">
          <label for="cpf">CPF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="passwd">
          <label for="password">Senha</label>
        </div>
      </div>

      <div class="row center">
      <div class="input-field col s12">
      <button class="waves-effect waves-light btn"><i class="material-icons right">person_add</i>CADASTRAR</a>
      </div>
      </div>
    
    </form>
  </div>
      

     


<?php $v->start("scripts"); ?>


<?php $v->end(); ?>
