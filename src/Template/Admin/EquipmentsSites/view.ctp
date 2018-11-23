<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentsSite $equipmentsSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipments Site'), ['action' => 'edit', $equipmentsSite->site_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipments Site'), ['action' => 'delete', $equipmentsSite->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentsSite->site_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipments Sites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipments Site'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipmentsSites view large-9 medium-8 columns content">
    <h3><?= h($equipmentsSite->site_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $equipmentsSite->has('site') ? $this->Html->link($equipmentsSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $equipmentsSite->site->site_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipment') ?></th>
            <td><?= $equipmentsSite->has('equipment') ? $this->Html->link($equipmentsSite->equipment->equipment_id, ['controller' => 'Equipments', 'action' => 'view', $equipmentsSite->equipment->equipment_id]) : '' ?></td>
        </tr>
    </table>
</div>
