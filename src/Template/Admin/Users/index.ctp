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
                        <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <th scope="row"><?= $this->Number->format($user->user_id) ?></th>
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
            <!-- <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav> -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </nav>
        </div>
    </div>
</div>
