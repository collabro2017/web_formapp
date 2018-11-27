<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add Equipment', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('serial_plate_number') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fuel_type') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->getParam('paging')['Equipments']['start']) ? $this->request->getParam('paging')['Equipments']['start'] : 1; ?>
                    <?php foreach ($equipments as $equipment): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($equipment->serial_plate_number) ?></td>
                        <td><?= h($equipment->fuel_type) ?></td>
                        <td><?= h($equipment->category) ?></td>
                        <td><?= h($equipment->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipment->equipment_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipment->equipment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->serial_plate_number)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
