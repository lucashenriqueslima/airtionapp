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
            <td> <b> 1 </b></td>
            <td>Jardins</td>
            <td>74333-020</td>
            <td> <button class="btn-small waves-effect waves-light" onclick="window.location.href = 'login.php'" type="submit" name="action" onclick="window.location.href = 'http://pt.stackoverflow.com'" style="vertical-align:middle"><span>Entrar</span>
          </tr>

          <?php endforeach; ?>
</tbody>          
<?php else: ?>

    <p class="flow-text">I am Flow Text</p> 

    <?php endif; ?>




    

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>