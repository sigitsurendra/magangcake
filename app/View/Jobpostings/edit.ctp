<div class="container">
    <div class="row clearfix">
        <div class="col-md-2 column">
            <?php
            echo $this->element('sidebarmenucompany');
            ?>
        </div>
        <div class="col-md-10 column">
            <div class="jobpostings form formright">
                <?php echo $this->Form->create('Jobposting'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Tawaran Magang'); ?></legend>
                    <div id='csshorizontalmenu'>
                        <ul>
                            <li class='active'><a href='#'><span>Main</span></a></li>
                            <li><a href=<?php echo $this->Html->url(array(
                                "controller" => "jobpostingtags",
                                "action" => "add",
                                "id" => $this->request->data['Jobposting']['idJobPosting']
                            ));?>><span>Tambah Tag</span></a></li>
                            <li><a href='#'><span>Tambah Expertise</span></a></li>
                        </ul>
                    </div>
                    <?php
                    echo $this->Form->input('idJobPosting');
                    echo $this->Form->input('Title', array(
                            'label' => 'Judul Lowongan Magang',
                            'placeholder' => '(ex: Junior Editor)')
                    );
                    echo $this->Form->input('Description',array(
                            'label' => 'Deskripsi Lowongan Magang',
                            'placeholder' => '(ex: Mengerjakan tugas-tugas editor)')
                    );
                    echo $this->Form->input('Requirements',array(
                        'label' => 'Kemampuan yang dibutuhkan',
                        'placeholder' => '(ex: Mampu menguasai microsoft office)'));
                    echo $this->Form->input('StartDatePosting',
                        array('label' => 'Tanggal Mulai Lowongan')
                    );
                    echo $this->Form->input('EndDatePosting',array(
                            'label' => 'Tanggal Berakhir Lowongan')
                    );
                    echo $this->Form->input('Jobpostingcity.citynameshow',array(
                            'label' => 'Kota','id' => 'idJobpostingcitynameshow',
                        'value'=> $cities[$this->request->data['Jobposting']['idCity']])
                    );

                    echo $this->Form->input('Jobposting.idCity',array(
                            'id' => 'idJobpostingcityid','type' => 'hidden')
                    );

                    echo $this->Form->input('VacancyAvailable',array(
                        'label' => 'Jumlah Posisi Tersedia',
                        'placeholder' => '(ex: 5)'));
                    echo $this->Form->input('DurationDays',array(
                        'label' => 'Durasi Magang (dalam hari)',
                        'placeholder' => '(ex: 60)'));
                    echo $this->Form->input('StartDateWork',array(
                        'label' => 'Tanggal Mulai Kerja',
                        'placeholder' => '(ex: Junior Editor)'));
                    echo $this->Form->input('Sallary',array(
                        'label' => 'Perkiraan Honor Diterima',
                        'placeholder' => '(ex: 1000000)'));
                    echo $this->Form->input('abc', array(
                        'label' => 'Kategori Pekerjaan ','id'=>'JobCategory',
                        'placeholder' => '(ex: Programmer)',
                        'value'=> $jobCategories[$this->request->data['Jobposting']['idJobCategory']]));
                    echo $this->Form->input('idJobCategory', array('type' => 'hidden'));

                    /*
                    echo $this->Form->input('idJobCategory', array(
                        'label' => 'Kategori Pekerjaan   .',
                        'type' => 'select',
                        'empty' => '(Pilih Kategori Pekerjaan)',
                        'options' => $jobCategories));*/
                    //echo $this->Form->input('idActivationStatus');
                    //echo $this->Form->input('idJobType');
                    //echo $this->Form->input('Visible');
                    //echo $this->Form->input('CreatedBy');
                    //echo $this->Form->input('LastUpdateBy');
                    ?>
                </fieldset>
                <?php echo $this->Form->end(__('Submit')); ?>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function () {

        $("#idJobpostingcitynameshow").autocomplete({
            source: "http://localhost/magangcake/cities/listofcities",
            minLength: 2,//search after two characters
            select: function(event,ui){
                //alert(ui.item.label);
                //$('#idJobpostingcitynameshow').val(ui.item.label);
                $('#idJobpostingcityid').val(ui.item.id);
            }
        });

        $("#JobCategory").autocomplete({
            source: "http://localhost/magangcake/jobcategories/listofjobcategories",
            minLength: 2,//search after two characters
            select: function(event,ui){
                //alert(ui.item.label);
                //$('#idJobpostingcitynameshow').val(ui.item.label);
                $('#JobpostingIdJobCategory').val(ui.item.id);
            }
        });
    });
</script>

