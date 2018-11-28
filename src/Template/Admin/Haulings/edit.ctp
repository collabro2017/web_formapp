<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="card">
    <?= $this->Form->create($hauling, ['class' => 'form-horizontal']) ?>

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
            <div class="col col-md-3"><label for="hauling_date" class="form-control-label"><?= __('Hauling Date'); ?></label></div>
            <?= $this->Form->control('hauling_date', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter hauling date'), 'type' => 'text', 'value' => $hauling->hauling_date ? date('m/d/Y', strtotime($hauling->hauling_date)) : '']); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="landscape_debris" class="form-control-label"><?= __('Landscape Debris'); ?></label></div>
            <?= $this->Form->control('landscape_debris', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter landscape Debris'), 'required' => true]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="residual_waste" class="form-control-label"><?= __('Residual Waste'); ?></label></div>
            <?= $this->Form->control('residual_waste', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter residual waste'), 'required' => true]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="tree_pruning_debris" class="form-control-label"><?= __('Tree Pruning Debris'); ?></label></div>
            <?= $this->Form->control('tree_pruning_debris', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter tree pruning debris')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="hazardois_waste" class="form-control-label"><?= __('Hazardois Waste'); ?></label></div>
            <?= $this->Form->control('hazardois_waste', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter hazardois waste')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="site_id" class=" form-control-label"><?= __('Hauling Site') ?></label></div>
            <?= $this->Form->control('site_id', ['options' => $sites, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose site', 'class' => 'standardSelect', 'tabindex' => '1', 'empty' => true]) ?>
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

        jQuery('#hauling-date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    
    });
</script>