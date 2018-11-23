<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hauling[]|\Cake\Collection\CollectionInterface $haulings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hauling'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="haulings index large-9 medium-8 columns content">
    <h3><?= __('Haulings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('hauling_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hauling_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('landscape_debris') ?></th>
                <th scope="col"><?= $this->Paginator->sort('residual_waste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tree_pruning_debris') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hazardois_waste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($haulings as $hauling): ?>
            <tr>
                <td><?= $this->Number->format($hauling->hauling_id) ?></td>
                <td><?= h($hauling->hauling_date) ?></td>
                <td><?= $this->Number->format($hauling->landscape_debris) ?></td>
                <td><?= $this->Number->format($hauling->residual_waste) ?></td>
                <td><?= $this->Number->format($hauling->tree_pruning_debris) ?></td>
                <td><?= $this->Number->format($hauling->hazardois_waste) ?></td>
                <td><?= $hauling->has('site') ? $this->Html->link($hauling->site->site_id, ['controller' => 'Sites', 'action' => 'view', $hauling->site->site_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hauling->hauling_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hauling->hauling_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hauling->hauling_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hauling->hauling_id)]) ?>
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
