<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hauling $hauling
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hauling'), ['action' => 'edit', $hauling->hauling_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hauling'), ['action' => 'delete', $hauling->hauling_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hauling->hauling_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Haulings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hauling'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="haulings view large-9 medium-8 columns content">
    <h3><?= h($hauling->hauling_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $hauling->has('site') ? $this->Html->link($hauling->site->site_id, ['controller' => 'Sites', 'action' => 'view', $hauling->site->site_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hauling Id') ?></th>
            <td><?= $this->Number->format($hauling->hauling_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landscape Debris') ?></th>
            <td><?= $this->Number->format($hauling->landscape_debris) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residual Waste') ?></th>
            <td><?= $this->Number->format($hauling->residual_waste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tree Pruning Debris') ?></th>
            <td><?= $this->Number->format($hauling->tree_pruning_debris) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hazardois Waste') ?></th>
            <td><?= $this->Number->format($hauling->hazardois_waste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hauling Date') ?></th>
            <td><?= h($hauling->hauling_date) ?></td>
        </tr>
    </table>
</div>
