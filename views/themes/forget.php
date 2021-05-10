<?php $v->layout("themes/_theme_login"); ?>




    <form class="login-form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">
        <div class="row">
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix" title="Utilizar e-mail válido">mail_outline</i>
            <input class="validate" id="account" name="email" type="text">
            <label for="account">Email</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field col s12" style="height: 30px; margin: 5px 0 5px 0;">
            <div class="central">
            <button class="btn-small blue waves-effect waves-light col s12" name="action" style="vertical-align:middle"> <span> RECUPERAR SENHA </span>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6" style="height: 15px; padding: 0px 15px 0px 15px; margin: 0px;">
            <p class="margin medium-small"><a href="<?= $router->route("web.login"); ?>"> Voltar </a></p>
          </div>
            
        </div>

      </form>


<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
