<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="card">
    <?= $this->Form->create($attendance, ['class' => 'form-horizontal']) ?>

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
            <div class="col col-md-3"><label for="site_id" class="form-control-label"><?= __('Site') ?></label></div>
            <?= $this->Form->control('site_id', ['options' => $sites, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose site', 'class' => 'standardSelect', 'tabindex' => '1', 'required' => false, 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="employee_id" class="form-control-label"><?= __('Employee') ?></label></div>
            <?= $this->Form->control('employee_id', ['label' => false, 'div' => false, 'data-placeholder' => 'Choose employee', 'class' => 'standardSelect', 'tabindex' => '1', 'required' => false, 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="work_date" class="form-control-label"><?= __('Work Date'); ?></label></div>
            <?= $this->Form->control('work_date', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter work date'), 'type' => 'text']); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="type" class="form-control-label"><?= __('Employee') ?></label></div>
            <?= $this->Form->control('type', ['options' => $types, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose type', 'class' => 'standardSelect', 'tabindex' => '1', 'required' => true, 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="time_in" class="form-control-label"><?= __('Time In'); ?></label></div>
            <?= $this->Form->control('time_in', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter time in'), 'type' => 'text']); ?>
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

        jQuery('#work-date').datepicker({
            uiLibrary: 'bootstrap4'
        });

        jQuery('#time-in').timepicker({
            uiLibrary: 'bootstrap4'
        });

        jQuery(document).on('change', '#site-id', function(){
            if (jQuery(this).val() != '') {
                jQuery.get(projectBaseUrl + 'admin/employees/ajaxGetEmployees/' + jQuery(this).val(), function(data, status) {
                    var json = jQuery.parseJSON(data);
                    jQuery('#employee-id').html('').append('<option value=""></option>');
                    jQuery.map(json, function( name, id ) {
                        jQuery('#employee-id').append('<option value="'+ id +'">'+ name +'</option>');
                    });
                    jQuery("#employee-id").trigger("chosen:updated");
                });
            }
        })
    
    });
</script>