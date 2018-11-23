<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ppe[]|\Cake\Collection\CollectionInterface $ppes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ppe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ppes index large-9 medium-8 columns content">
    <h3><?= __('Ppes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ppes_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('face_mask') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rain_boots') ?></th>
                <th scope="col"><?= $this->Paginator->sort('safety_shoes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ppes as $ppe): ?>
            <tr>
                <td><?= h($ppe->ppes_date) ?></td>
                <td><?= $ppe->has('site') ? $this->Html->link($ppe->site->site_id, ['controller' => 'Sites', 'action' => 'view', $ppe->site->site_id]) : '' ?></td>
                <td><?= $ppe->has('employee') ? $this->Html->link($ppe->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $ppe->employee->employee_id]) : '' ?></td>
                <td><?= h($ppe->face_mask) ?></td>
                <td><?= h($ppe->rain_boots) ?></td>
                <td><?= h($ppe->safety_shoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ppe->employee_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ppe->employee_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ppe->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ppe->employee_id)]) ?>
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
