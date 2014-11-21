<div class="students form">
<?php echo $this->Form->create(); ?>
<fieldset>
<legend><?php echo __('Pendaftaran Anggota'); ?></legend>
<?php
		echo $this->Form->input('User.UserName',array(
            'label'=>'User name',
            'type' => 'email',
            'placeholder'=>'(Email utama Anda, ex: sigit@email.com)'
        ));
        echo $this->Form->input('User.Password',array(
            'label'=>'Password',
            'pattern'=> '.{5,80}',
            'required title'=>'5 characters minimum',
            'placeholder'=>'(password Anda)'
        ));
        echo $this->Form->input('User.confirmPassword',array(
            'label'=>'Retype Password',
            'placeholder'=>'(ulangi password anda)'
        ));
		echo $this->Form->input('Name', array(
            'label'=>'Nama',
            'pattern'=> '.{5,80}',
            'required title'=>'5 characters minimum',
            'placeholder'=>'(nama lengkap Anda)'
        ));
		echo $this->Form->input('Email2', array(
            'label'=>'Email',
            'type' => 'email',
            'placeholder'=>'(Email lain Anda)'
        ));
        echo $this->Form->input('Phone1', array(
            'label'=>'Telepon / Handphone',
            'pattern'=> '.{7,16}',
            'required title'=>'7 characters minimum',
            'type'=>'tel',
            'placeholder'=>'(No Telepon / HP Anda)'
        ));

?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<script>
    $(document).ready(function() {
        // validate signup form on keyup and submit

        $("#StudentDaftarForm").validate();

        $("#UserConfirmPassword").rules("add", {required:true, minlength:5, equalTo: "#UserPassword",messages:{equalTo:'Password tidak sama'}});


    });
</script>