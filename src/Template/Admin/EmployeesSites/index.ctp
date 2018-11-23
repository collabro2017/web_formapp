<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesSite[]|\Cake\Collection\CollectionInterface $employeesSites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employees Site'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesSites index large-9 medium-8 columns content">
    <h3><?= __('Employees Sites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeesSites as $employeesSite): ?>
            <tr>
                <td><?= $employeesSite->has('employee') ? $this->Html->link($employeesSite->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $employeesSite->employee->employee_id]) : '' ?></td>
                <td><?= $employeesSite->has('site') ? $this->Html->link($employeesSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $employeesSite->site->site_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeesSite->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeesSite->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeesSite->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesSite->employee_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
