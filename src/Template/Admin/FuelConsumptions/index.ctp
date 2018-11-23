<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuelConsumption[]|\Cake\Collection\CollectionInterface $fuelConsumptions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fuel Consumption'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fuelConsumptions index large-9 medium-8 columns content">
    <h3><?= __('Fuel Consumptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('consumption_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consumption_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fuelConsumptions as $fuelConsumption): ?>
            <tr>
                <td><?= $this->Number->format($fuelConsumption->consumption_id) ?></td>
                <td><?= h($fuelConsumption->consumption_date) ?></td>
                <td><?= $this->Number->format($fuelConsumption->quantity) ?></td>
                <td><?= $fuelConsumption->has('equipment') ? $this->Html->link($fuelConsumption->equipment->equipment_id, ['controller' => 'Equipments', 'action' => 'view', $fuelConsumption->equipment->equipment_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fuelConsumption->consumption_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fuelConsumption->consumption_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fuelConsumption->consumption_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelConsumption->consumption_id)]) ?>
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
