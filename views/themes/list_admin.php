<?php $v->layout("themes/_theme_admin"); ?>


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

       <?php foreach ($users as $user):?>
        <tr>
            <td> <b> <?= $user->first_name ?> </b></td>
            <td><?= $user->email?></td>
            <td><?= $user->cpf ?></td>
            
            <td> <button class="btn-small yellow darken-3 waves-effect waves-light" name="update"><span>Editar</span></button> <button class="btn-small  red waves-effect waves-light" name="delete"><span>Excluir</span></button> </td>
          </tr>

          <?php endforeach; ?>
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
    $(function (){
        alert("a");
    });

    </script>
<?php $v->end(); ?>