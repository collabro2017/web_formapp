<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="card">
    <?= $this->Form->create($fuelConsumption, ['class' => 'form-horizontal', 'type' => 'post']) ?>

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
            <div class="col col-md-3"><label for="consumption_date" class="form-control-label"><?= __('Consumption Date'); ?></label></div>
            <?= $this->Form->control('consumption_date', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter consumption date'), 'type' => 'text', 'value' => $fuelConsumption->consumption_date ? date('m/d/Y', strtotime($fuelConsumption->consumption_date)) : '']); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="quantity" class="form-control-label"><?= __('Quantity'); ?></label></div>
            <?= $this->Form->control('quantity', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter quantity'), 'required' => true]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="equipment_id" class=" form-control-label"><?= __('Consumption Equipment') ?></label></div>
            <?= $this->Form->control('equipment_id', ['options' => $equipments, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose equipment', 'class' => 'standardSelect', 'tabindex' => '1', 'empty' => true]) ?>
        </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> <?= __('Submit') ?>
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

        jQuery('#consumption-date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    
    });
</script>