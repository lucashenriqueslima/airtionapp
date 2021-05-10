<?php $v->layout("themes/_theme_login"); ?>


    <form class="login-form" action="<?= $router->route("auth.login_admin"); ?>" method="post" autocomplete="off">
        
        
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix" title="Utilizar apenas números para CPF">account_circle</i>
            <input class="validate" id="account" name="email" type="text">
            <label for="account">Login</label>
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
          <div class="input-field col s12" style="height: 30px; margin: 5px 0 5px 0;">
            <div class="central">
            <button class="btn-small waves-effect waves-light col s12" name="action" style="vertical-align:middle"> <span>ENTRAR </span>
          </div>
        </div>
        </div>


      </form>
    </div>
  </div>