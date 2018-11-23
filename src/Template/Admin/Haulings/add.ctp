<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hauling $hauling
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Haulings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="haulings form large-9 medium-8 columns content">
    <?= $this->Form->create($hauling) ?>
    <fieldset>
        <legend><?= __('Add Hauling') ?></legend>
        <?php
            echo $this->Form->control('hauling_date');
            echo $this->Form->control('landscape_debris');
            echo $this->Form->control('residual_waste');
            echo $this->Form->control('tree_pruning_debris');
            echo $this->Form->control('hazardois_waste');
            echo $this->Form->control('site_id', ['options' => $sites, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
