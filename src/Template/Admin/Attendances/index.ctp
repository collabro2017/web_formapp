<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance[]|\Cake\Collection\CollectionInterface $attendances
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attendance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendances index large-9 medium-8 columns content">
    <h3><?= __('Attendances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('attendance_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendances as $attendance): ?>
            <tr>
                <td><?= $this->Number->format($attendance->attendance_id) ?></td>
                <td><?= h($attendance->work_date) ?></td>
                <td><?= $attendance->has('employee') ? $this->Html->link($attendance->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $attendance->employee->employee_id]) : '' ?></td>
                <td><?= $attendance->has('site') ? $this->Html->link($attendance->site->site_id, ['controller' => 'Sites', 'action' => 'view', $attendance->site->site_id]) : '' ?></td>
                <td><?= h($attendance->time_in) ?></td>
                <td><?= h($attendance->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendance->attendance_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendance->attendance_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendance->attendance_id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id)]) ?>
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
