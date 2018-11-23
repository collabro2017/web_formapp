<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment $equipment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->equipment_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->equipment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->equipment_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipments view large-9 medium-8 columns content">
    <h3><?= h($equipment->equipment_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial Plate Number') ?></th>
            <td><?= h($equipment->serial_plate_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel Type') ?></th>
            <td><?= h($equipment->fuel_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($equipment->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($equipment->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipment Id') ?></th>
            <td><?= $this->Number->format($equipment->equipment_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sites') ?></h4>
        <?php if (!empty($equipment->sites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Site Id') ?></th>
                <th scope="col"><?= __('Site Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipment->sites as $sites): ?>
            <tr>
                <td><?= h($sites->site_id) ?></td>
                <td><?= h($sites->site_name) ?></td>
                <td><?= h($sites->address) ?></td>
                <td><?= h($sites->city) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sites', 'action' => 'view', $sites->site_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sites', 'action' => 'edit', $sites->site_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sites', 'action' => 'delete', $sites->site_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sites->site_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
