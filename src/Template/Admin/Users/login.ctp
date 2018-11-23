<div class="container-fluid no-pdd-horizon bg" style="padding-top: 150px">
    <div class="row">
        <div class="col-md-10 mr-auto ml-auto">
            <div class="row">
                <div class="mr-auto ml-auto full-height height-100">
                    <div class="vertical-align full-height">
                        <div class="table-cell">
                            <div class="card">
                                <div class="card-body">
                                    <div class="pdd-horizon-30 pdd-vertical-30">
                                        <div class="mrg-btm-30">
                                            <h2 class="inline-block pull-right no-mrg-vertical pdd-top-15"><?= $title ?></h2>
                                            <br>
                                            <?= $this->Flash->render() ?>
                                        </div>
                                        <p class="mrg-btm-15 font-size-14"><?= __('Welcome to WebForm APP. Please login to continue!'); ?></p>
                                        <?= $this->Form->create('') ?>                                      
                                            <div class="form-group">
                                                <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control valid', 'placeholder' => __('Enter username'), 'autocomplete' => 'off']); ?>
                                            </div>
                                            <div class="form-group">
                                                 <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control valid', 'placeholder' => __('Enter password'), 'autocomplete' => 'off']); ?>        
                                            </div>
                                            <div class="mrg-top-20 text-right">
                                                <?= $this->Form->button(__('Login'), ['class' => 'btn btn-info']) ?>
                                            </div>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>