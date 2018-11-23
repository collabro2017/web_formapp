<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersSite $usersSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersSite->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersSite->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Sites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersSites form large-9 medium-8 columns content">
    <?= $this->Form->create($usersSite) ?>
    <fieldset>
        <legend><?= __('Edit Users Site') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
