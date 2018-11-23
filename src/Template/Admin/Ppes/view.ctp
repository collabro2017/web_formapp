<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ppe $ppe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ppe'), ['action' => 'edit', $ppe->employee_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ppe'), ['action' => 'delete', $ppe->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ppe->employee_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ppes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ppe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ppes view large-9 medium-8 columns content">
    <h3><?= h($ppe->employee_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $ppe->has('site') ? $this->Html->link($ppe->site->site_id, ['controller' => 'Sites', 'action' => 'view', $ppe->site->site_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $ppe->has('employee') ? $this->Html->link($ppe->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $ppe->employee->employee_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Face Mask') ?></th>
            <td><?= h($ppe->face_mask) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rain Boots') ?></th>
            <td><?= h($ppe->rain_boots) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Safety Shoes') ?></th>
            <td><?= h($ppe->safety_shoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppes Date') ?></th>
            <td><?= h($ppe->ppes_date) ?></td>
        </tr>
    </table>
</div>
