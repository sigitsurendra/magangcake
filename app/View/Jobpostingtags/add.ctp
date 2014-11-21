<div class="container">
    <div class="row clearfix">
        <div class="col-md-2 column">
            <?php
            echo $this->element('sidebarmenucompany');
            ?>
        </div>
        <div class="col-md-10 column">
            <div class="jobpostings form formright">
                <?php echo $this->Form->create('Jobpostingtag'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Tawaran Magang'); ?></legend>
                    <div id='csshorizontalmenu'>
                        <ul>
                            <li><a href='#'><span>Main</span></a></li>
                            <li class='active'><a href='#'><span>Tambah Tag</span></a></li>
                            <li><a href='#'><span>Tambah Expertise</span></a></li>
                        </ul>
                    </div>

                </fieldset>
                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div>

</div>


