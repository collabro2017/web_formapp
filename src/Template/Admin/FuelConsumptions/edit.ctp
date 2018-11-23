<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelConsumption $fuelConsumption
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fuelConsumption->consumption_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fuelConsumption->consumption_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fuel Consumptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fuelConsumptions form large-9 medium-8 columns content">
    <?= $this->Form->create($fuelConsumption) ?>
    <fieldset>
        <legend><?= __('Edit Fuel Consumption') ?></legend>
        <?php
            echo $this->Form->control('consumption_date');
            echo $this->Form->control('quantity');
            echo $this->Form->control('equipment_id', ['options' => $equipments, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
