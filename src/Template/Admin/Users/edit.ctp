<div class="card">
    <?= $this->Form->create($user, ['class' => 'form-horizontal']) ?>

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
            <div class="col col-md-3"><label for="username" class="form-control-label"><?= __('Username'); ?></label></div>
            <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter username')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="password" class="form-control-label"><?= __('Password'); ?></label></div>
            <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter password'), 'value' => '', 'required' => false]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="email" class="form-control-label"><?= __('Email'); ?></label></div>
            <?= $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Enter email')]); ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('Role') ?></label></div>
            <?= $this->Form->control('role', ['options' => $roles, 'label' => false, 'div' => false, 'data-placeholder' => 'Choose role', 'class' => 'standardSelect', 'tabindex' => '1', 'empty' => true]) ?>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="role" class=" form-control-label"><?= __('User Sites') ?></label></div>
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