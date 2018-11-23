<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment[]|\Cake\Collection\CollectionInterface $equipments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipments index large-9 medium-8 columns content">
    <h3><?= __('Equipments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serial_plate_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipments as $equipment): ?>
            <tr>
                <td><?= $this->Number->format($equipment->equipment_id) ?></td>
                <td><?= h($equipment->serial_plate_number) ?></td>
                <td><?= h($equipment->fuel_type) ?></td>
                <td><?= h($equipment->category) ?></td>
                <td><?= h($equipment->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipment->equipment_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipment->equipment_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipment->equipment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->equipment_id)]) ?>
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
