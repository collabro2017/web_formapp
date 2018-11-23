<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesSite $employeesSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employees Site'), ['action' => 'edit', $employeesSite->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employees Site'), ['action' => 'delete', $employeesSite->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesSite->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees Sites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Site'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeesSites view large-9 medium-8 columns content">
    <h3><?= h($employeesSite->employee_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $employeesSite->has('employee') ? $this->Html->link($employeesSite->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $employeesSite->employee->employee_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $employeesSite->has('site') ? $this->Html->link($employeesSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $employeesSite->site->site_id]) : '' ?></td>
        </tr>
    </table>
</div>
