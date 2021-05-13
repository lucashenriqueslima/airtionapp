          <tr>
            <td> <b> <?= $user->first_name ?> </b></td>
            <td><?= $user->email?></td>
            <td><?= $user->cpf ?></td>
            
            <td> <button class="btn-small yellow darken-3 waves-effect waves-light" name="update"><span>Editar</span></button> <button class="btn-small  red waves-effect waves-light" name="delete" data-action="<?=$router->route("auth.delete_admin"); ?>" data-id="<?= $user->id; ?>"><span>Excluir</span></button> </td>
          </tr>