<div class="card">
    <?= $this->Form->create($equipment, ['class' => 'form-horizontal']) ?>

    <?php 
        $this->Form->setTemplates([
            'inputContainer' => '<div class="col-12 col-md-9">{{content}}</div>'
        ]);
    ?>

    <div class="card-header">
        <strong class="card-title"><?= $title ?></strong>
    </div>
    <div class="card-body card-block">

        <div class="row form-group">
            <div class="col col-md-3"><label for="serial_plate_number" class="form-control-label"><?= __('Serial Plate Number'); ?></label></div>
            <?= $this->Form->control('serial_plate_number', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter serial plate number')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="fuel_type" class=" form-control-label"><?= __('Fuel Type') ?></label></div>
            <?= $this->Form->control('fuel_type', ['options' => $fuelTypes, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose fuel type', 'class' => 'standardSelect', 'tabindex' => '1', 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="category" class="form-control-label"><?= __('Category'); ?></label></div>
            <?= $this->Form->control('category', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter category')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="status" class=" form-control-label"><?= __('Status') ?></label></div>
            <?= $this->Form->control('status', ['options' => $statuses, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose status', 'class' => 'standardSelect', 'tabindex' => '1', 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('Equipment Sites') ?></label></div>
            <?= $this->Form->control('sites._ids', ['options' => $sites, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose sites...', 'multiple' => true, 'class' => 'standardSelect', 'tabindex' => '1']) ?>
        </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-danger btn-sm']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 5,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>