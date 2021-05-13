<?php

use CoffeeCode\Router\Router;

$v->layout("themes/_theme_admin"); ?>


<?php if(!empty($users)):?>
<table class="centered highlight">
<thead>
          <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>CPF</th>
              <th>Ações</th>
          </tr>
</thead>
<tbody>

       <?php foreach ($users as $user):
        
        $v->insert("themes/fragment", ["user" => $user]);

     endforeach; ?>
</tbody>          
<?php else: ?>
    <div class="row center">
        <div>
          <div class="card grey lighten-3">
            <div class="card-content white-text">
              <span class="card-title grey-text text-darken-4">Nenhum Usuário Cadastrado</span>
              <p class="grey-text text-darken-2">Para cadastrar um novo usuário clique no botão abaixo.</p>
            </div>
            <div class="card-action">
              <a href="<?= $router->route("appadmin.register"); ?>" class="light-green-text text-lighten-1">CADASTRAR USUÁRIO</a>

            </div>
          </div>
        </div>
      </div>


    <?php endif; ?>


    
            

    

<?php $v->start("scripts"); ?>
    <script>

$(window).on("load", function(){

  $("body").on("click", "[data-action]", function(e) {
    e.preventDefault();

  var r = confirm("Tem certeza que deseja excluir o usuário?");
  if (r == true) {
    var data = $(this).data();
    var div = $(this).parent().parent();

    $.post(data.action, data, function(){
      div.fadeOut();
      setTimeout(function(){  
      M.toast({
                            html: 'Usuário deletado com sucesso!',
                            displayLength: 3500,
                            classes:' green '
                        }) 
                    
                      },200)

    },"json").fail(function (){
        alert ("Erro ao processar requisição!");
    });

  }


  });

});
    </script>
<?php $v->end(); ?>