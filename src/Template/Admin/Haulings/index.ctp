<div class="card">
    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
        <?= $this->Html->link('<i class="fa fa-plus-square-o"></i> Add Hauling', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-success', 'style' => 'float: right']); ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Sl #') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('hauling_date') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('landscape_debris') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('residual_waste') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tree_pruning_debris') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('hazardois_waste') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('site_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = !empty($this->request->getParam('paging')['Haulings']['start']) ? $this->request->getParam('paging')['Haulings']['start'] : 1; ?>
                    <?php foreach ($haulings as $hauling): ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= h($hauling->hauling_date) ?></td>
                        <td><?= $this->Number->format($hauling->landscape_debris) ?></td>
                        <td><?= $this->Number->format($hauling->residual_waste) ?></td>
                        <td><?= $this->Number->format($hauling->tree_pruning_debris) ?></td>
                        <td><?= $this->Number->format($hauling->hazardois_waste) ?></td>
                        <td><?= $hauling->has('site') ? $hauling->site->site_name : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hauling->hauling_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hauling->hauling_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hauling->hauling_id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->element('pagination') ?>
        </div>
    </div>
</div>
