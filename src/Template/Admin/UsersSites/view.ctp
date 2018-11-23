<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersSite $usersSite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Site'), ['action' => 'edit', $usersSite->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Site'), ['action' => 'delete', $usersSite->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersSite->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Sites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Site'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersSites view large-9 medium-8 columns content">
    <h3><?= h($usersSite->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersSite->has('user') ? $this->Html->link($usersSite->user->user_id, ['controller' => 'Users', 'action' => 'view', $usersSite->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $usersSite->has('site') ? $this->Html->link($usersSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $usersSite->site->site_id]) : '' ?></td>
        </tr>
    </table>
</div>
