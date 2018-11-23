<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendance'), ['action' => 'edit', $attendance->attendance_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendance'), ['action' => 'delete', $attendance->attendance_id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendances view large-9 medium-8 columns content">
    <h3><?= h($attendance->attendance_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $attendance->has('employee') ? $this->Html->link($attendance->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $attendance->employee->employee_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= $attendance->has('site') ? $this->Html->link($attendance->site->site_id, ['controller' => 'Sites', 'action' => 'view', $attendance->site->site_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($attendance->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attendance Id') ?></th>
            <td><?= $this->Number->format($attendance->attendance_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Date') ?></th>
            <td><?= h($attendance->work_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time In') ?></th>
            <td><?= h($attendance->time_in) ?></td>
        </tr>
    </table>
</div>
