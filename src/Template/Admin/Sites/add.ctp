<div class="card">
    <?= $this->Form->create($site, ['class' => 'form-horizontal']) ?>

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
            <div class="col col-md-3"><label for="site_name" class="form-control-label"><?= __('Site Name'); ?></label></div>
            <?= $this->Form->control('site_name', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter site name')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="address" class="form-control-label"><?= __('Address'); ?></label></div>
            <?= $this->Form->control('address', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter address')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="city" class="form-control-label"><?= __('City'); ?></label></div>
            <?= $this->Form->control('city', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter city')]); ?>
        </div>


        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('Site Employees') ?></label></div>
            <?= $this->Form->control('employees._ids', ['options' => $employees, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose employees...', 'multiple' => true, 'class' => 'standardSelect', 'tabindex' => '1']) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('Site Equipments') ?></label></div>
            <?= $this->Form->control('equipments._ids', ['options' => $equipments, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose equipments...', 'multiple' => true, 'class' => 'standardSelect', 'tabindex' => '1']) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('Site Users') ?></label></div>
            <?= $this->Form->control('users._ids', ['options' => $users, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose users...', 'multiple' => true, 'class' => 'standardSelect', 'tabindex' => '1']) ?>
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