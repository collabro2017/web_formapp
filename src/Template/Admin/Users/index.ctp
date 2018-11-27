<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add User', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->paging['Users']['start']) ? $this->request->paging['Users']['start'] : 1; ?>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->role) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?> -->
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
