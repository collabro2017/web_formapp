<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add Employee', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('second_name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('hire_date') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                        <th scope="col"><?= __('Sites') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->getParam('paging')['Employees']['start']) ? $this->request->getParam('paging')['Employees']['start'] : 1; ?>
                    <?php foreach ($employees as $employee): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($employee->first_name) ?></td>
                        <td><?= h($employee->last_name) ?></td>
                        <td><?= h($employee->second_name) ?></td>
                        <td><?= h($employee->hire_date) ?></td>
                        <td><?= $employee->active ? __('Yes') : __('No') ?></td>
                        <td><?= h($employee->phone_number) ?></td>
                        <td><?php 
                            $sites = '';
                            foreach ($employee->sites as $key => $site) {
                                $sites .= $site->site_name . ', ';
                            }
                            echo rtrim($sites, ', ');
                        ?></td>
                        <td><?= h($employee->created) ?></td>
                        <td><?= h($employee->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->employee_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->first_name)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
