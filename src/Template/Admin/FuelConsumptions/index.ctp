<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add Fuel Consumption', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('consumption_date') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->getParam('paging')['FuelConsumptions']['start']) ? $this->request->getParam('paging')['FuelConsumptions']['start'] : 1; ?>
                    <?php foreach ($fuelConsumptions as $fuelConsumption): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($fuelConsumption->consumption_date) ?></td>
                        <td><?= $this->Number->format($fuelConsumption->quantity) ?></td>
                        <td><?= $fuelConsumption->has('equipment') ? $fuelConsumption->equipment->serial_plate_number : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fuelConsumption->consumption_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fuelConsumption->consumption_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelConsumption->consumption_id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
