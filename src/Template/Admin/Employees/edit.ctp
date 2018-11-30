<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="card">
    <?= $this->Form->create($employee, ['class' => 'form-horizontal']) ?>

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
            <div class="col col-md-3"><label for="first_name" class="form-control-label"><?= __('First name'); ?></label></div>
            <?= $this->Form->control('first_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter first name'), 'required' => true]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="last_name" class="form-control-label"><?= __('Last Name'); ?></label></div>
            <?= $this->Form->control('last_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter last name'), 'required' => true]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="second_name" class="form-control-label"><?= __('Second Name'); ?></label></div>
            <?= $this->Form->control('second_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter second name')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="phone_number" class="form-control-label"><?= __('Phone Number'); ?></label></div>
            <?= $this->Form->control('phone_number', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter phone number')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="hire_date" class="form-control-label"><?= __('Hire Date'); ?></label></div>
            <?= $this->Form->control('hire_date', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter hire date'), 'type' => 'text', 'value' => $employee->hire_date ? date('m/d/Y', strtotime($employee->hire_date)) : '']); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="sites" class=" form-control-label"><?= __('Employee Sites') ?></label></div>
            <?= $this->Form->control('sites._ids', ['options' => $sites, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose sites...', 'multiple' => true, 'class' => 'standardSelect', 'tabindex' => '1', 'required' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label"></label></div>
            <div class="col col-md-9">
                <div class="form-check-inline form-check">
                    <label for="active" class="form-check-label ">
                        <input type="checkbox" id="active" name="active" value="1" class="form-check-input" <?= $employee->active ? ' checked="true"' : '' ?>>Is Active
                    </label>
                </div>
            </div>
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

        jQuery('#hire-date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    
    });
</script>