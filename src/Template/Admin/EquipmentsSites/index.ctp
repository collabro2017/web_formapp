<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentsSite[]|\Cake\Collection\CollectionInterface $equipmentsSites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipments Site'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipmentsSites index large-9 medium-8 columns content">
    <h3><?= __('Equipments Sites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipmentsSites as $equipmentsSite): ?>
            <tr>
                <td><?= $equipmentsSite->has('site') ? $this->Html->link($equipmentsSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $equipmentsSite->site->site_id]) : '' ?></td>
                <td><?= $equipmentsSite->has('equipment') ? $this->Html->link($equipmentsSite->equipment->equipment_id, ['controller' => 'Equipments', 'action' => 'view', $equipmentsSite->equipment->equipment_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipmentsSite->site_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipmentsSite->site_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipmentsSite->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentsSite->site_id)]) ?>
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
