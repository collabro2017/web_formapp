<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesSite $employeesSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employeesSite->employee_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employeesSite->employee_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employees Sites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesSites form large-9 medium-8 columns content">
    <?= $this->Form->create($employeesSite) ?>
    <fieldset>
        <legend><?= __('Edit Employees Site') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
