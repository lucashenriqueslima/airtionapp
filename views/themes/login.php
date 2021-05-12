<?php $v->layout("themes/_theme_login"); ?>


    <form class="login-form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">
        <div class="row">
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix" title="Utilizar apenas números para CPF">account_circle</i>
            <input class="validate" id="account" name="email" type="text" value="<?php if (isset($_COOKIE["rememberUser"])){echo $_COOKIE["rememberUser"]; }?>">
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
        <input type="checkbox" name="remember" <?php if (isset($_COOKIE["rememberUser"])):?> checked <?php endif; ?>/>
        <span>Lembrar meu usuário</span>
        </label>
        </p>
    
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12" style="height: 30px; margin: 5px 0 5px 0;">
            <div class="central">
            <button class="btn-small waves-effect waves-light col s12" style="vertical-align:middle"> <span>ENTRAR</span>

            </form>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6" style="height: 15px; padding: 0px 15px 0px 15px; margin: 0px;">
            <p class="margin medium-small"><a href="<?= $router->route("web.register"); ?>">Solicitar uma conta</a></p>
          </div>
          <div class="input-field col s6 m6 l6" style="height: 15px; padding: 0px 15px 0px 15px; margin: 0px;">
              <p class="margin right-align medium-small"><a href="<?= $router->route("web.forget"); ?>">Esqueceu sua senha?</a></p>
          </div>          
        </div>


    </div>
  </div>