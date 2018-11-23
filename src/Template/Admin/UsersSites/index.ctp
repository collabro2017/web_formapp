<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersSite[]|\Cake\Collection\CollectionInterface $usersSites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Site'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersSites index large-9 medium-8 columns content">
    <h3><?= __('Users Sites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersSites as $usersSite): ?>
            <tr>
                <td><?= $usersSite->has('user') ? $this->Html->link($usersSite->user->user_id, ['controller' => 'Users', 'action' => 'view', $usersSite->user->user_id]) : '' ?></td>
                <td><?= $usersSite->has('site') ? $this->Html->link($usersSite->site->site_id, ['controller' => 'Sites', 'action' => 'view', $usersSite->site->site_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersSite->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersSite->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersSite->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersSite->user_id)]) ?>
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
