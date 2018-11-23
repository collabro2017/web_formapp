<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EquipmentsSite $equipmentsSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipmentsSite->site_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentsSite->site_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipments Sites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['controller' => 'Equipments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipmentsSites form large-9 medium-8 columns content">
    <?= $this->Form->create($equipmentsSite) ?>
    <fieldset>
        <legend><?= __('Edit Equipments Site') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
