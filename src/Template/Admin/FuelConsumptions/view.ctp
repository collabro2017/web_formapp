<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelConsumption $fuelConsumption
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fuel Consumption'), ['action' => 'edit', $fuelConsumption->consumption_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fuel Consumption'), ['action' => 'delete', $fuelConsumption->consumption_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelConsumption->consumption_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fuel Consumptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel Consumption'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fuelConsumptions view large-9 medium-8 columns content">
    <h3><?= h($fuelConsumption->consumption_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Equipment') ?></th>
            <td><?= $fuelConsumption->has('equipment') ? $this->Html->link($fuelConsumption->equipment->equipment_id, ['controller' => 'Equipments', 'action' => 'view', $fuelConsumption->equipment->equipment_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consumption Id') ?></th>
            <td><?= $this->Number->format($fuelConsumption->consumption_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($fuelConsumption->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consumption Date') ?></th>
            <td><?= h($fuelConsumption->consumption_date) ?></td>
        </tr>
    </table>
</div>
