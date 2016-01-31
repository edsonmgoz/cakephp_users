<div class="col-md-12 graphs">
    <div class="xs">
        <h3>Usuarios</h3>
        <div class="bs-example4" data-example-id="contextual-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Habilitado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="active">
                            <th scope="row"><?= $this->Number->format($user->id) ?></th>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td>
                                <?php if ($user->active == 1): ?>
                                    <span class="text-success">Habilitado</span>
                                <?php elseif ($user->active == 0): ?>
                                    <span class="text-warning">Deshabilitado</span>
                                <?php endif ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>
</div>