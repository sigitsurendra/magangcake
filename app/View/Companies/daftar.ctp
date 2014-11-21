<div class="companies form">
    <?php echo $this->Form->create(); ?>
    <fieldset>
        <legend><?php echo __('Pendaftaran Perusahaan'); ?></legend>
        <?php
        echo $this->Form->input('User.UserName', array(
            'label' => 'User name',
            'type' => 'email',
            'placeholder' => '(Email utama Anda, ex: sigit@email.com)'
        ));
        echo $this->Form->input('User.Password', array(
            'label' => 'Password',
            'pattern' => '.{5,80}',
            'required title' => '5 characters minimum',
            'placeholder' => '(password Anda)'
        ));
        echo $this->Form->input('User.confirmPassword', array(
            'label' => 'Retype Password',
            'placeholder' => '(ulangi password anda)'
        ));

        echo __('<legend>Data Perusahaan</legend>');

        echo $this->Form->input('Name', array(
            'label' => 'Nama Perusahaan',
            'pattern' => '.{5,75}',
            'required title' => '5 characters minimum',
            'placeholder' => '(nama perusahaan Anda)'
        ));
        echo $this->Form->input('Description', array(
            'type' =>'textarea',
            'label' => 'Deskripsi Perusahaan',
            'pattern' => '.{5,500}',
            'required title' => '5 characters minimum',
            'placeholder' => '(deskripsi perusahaan Anda)',
            'rows' => '3'
        ));
        echo $this->Form->input('idIndustryCategory', array(
                'label' => 'Bidang Perusahaan   .',
                'type' => 'select',
                'empty' => '(Pilih Bidang Perusahaan)',
                'options' => $industryCategories)
        );
        echo $this->Form->input('Email', array(
            'label' => 'Email',
            'type' => 'email',
            'placeholder' => '(Email Perusahaan Anda)'
        ));
        echo $this->Form->input('Phone1', array(
            'label' => 'Telepon / Handphone',
            'pattern' => '.{7,16}',
            'required title' => '7 characters minimum',
            'type' => 'tel',
            'placeholder' => '(No Telepon Perusahaan Anda)'
        ));

        echo $this->Form->input('Address', array(
            'type' =>'textarea',
            'label' => 'Alamat Perusahaan',
            'pattern' => '.{5,500}',
            'required title' => '5 characters minimum',
            'placeholder' => '(Alamat perusahaan Anda)',
            'rows' => '3'
        ));

        echo $this->Form->input('idCity', array(
             'label' => 'Kota   .',
            'type' => 'select',
            'empty' => '(Pilih Kota)',
            'options' => $cities)
        );

        /*
        echo $this->Form->select('idCity', $cities, array(
                'label' => 'Kota',
                'empty' => '(Pilih Kota)',
                'div' => array('class' => 'input required',
                ),)
        );*/
        echo __('<legend>Contact Person Perusahaan</legend>');

        echo $this->Form->input('Companycontactperson.Name', array(
            'label' => 'Nama Contact Person',
            'pattern' => '.{5,60}',
            'required title' => '5 characters minimum',
            'placeholder' => '(Nama Contact Person)'
        ));

        echo $this->Form->input('Companycontactperson.Email', array(
            'label' => 'Email',
            'type' => 'email',
            'placeholder' => '(Email Contact Person)'
        ));

        echo $this->Form->input('Companycontactperson.Phone1', array(
            'label' => 'Telepon / Handphone',
            'pattern' => '.{7,16}',
            'required title' => '7 characters minimum',
            'type' => 'tel',
            'placeholder' => '(No Telepon Contact Person)'
        ));

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>

<script>
    $(document).ready(function () {
        // validate signup form on keyup and submit

        $("#CompanyDaftarFormDaftarForm").validate();

        $("#UserConfirmPassword").rules("add", {required:true, minlength:5, equalTo:"#UserPassword", messages:{equalTo:'Password tidak sama'}});


    });
</script>