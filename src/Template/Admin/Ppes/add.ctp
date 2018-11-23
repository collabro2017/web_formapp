<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ppe $ppe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ppes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ppes form large-9 medium-8 columns content">
    <?= $this->Form->create($ppe) ?>
    <fieldset>
        <legend><?= __('Add Ppe') ?></legend>
        <?php
            echo $this->Form->control('face_mask');
            echo $this->Form->control('rain_boots');
            echo $this->Form->control('safety_shoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
