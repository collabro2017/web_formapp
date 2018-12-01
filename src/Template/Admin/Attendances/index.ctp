<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add Attendance', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('work_date') ?></th>
                        <th scope="col"><?= __('Site') ?></th>
                        <th scope="col"><?= __('Employee') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('time_in') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->getParam('paging')['Attendances']['start']) ? $this->request->getParam('paging')['Attendances']['start'] : 1; ?>
                    <?php foreach ($attendances as $attendance): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($attendance->work_date) ?></td>
                        <td><?= $attendance->has('site') ? h($attendance->site->site_name) : '' ?></td>
                        <td><?= $attendance->has('employee') ? h($attendance->employee->first_name . ' ' . $attendance->employee->last_name) : '' ?></td>
                        <td><?= $attendance->time_in ? date('H:i', strtotime($attendance->time_in)) : '' ?></td>
                        <td><?= h($attendance->type) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendance->attendance_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendance->attendance_id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
