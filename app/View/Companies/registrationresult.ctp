
<div class="messageresult">
    <div class="messagebox">
        <?php
            echo $this->Session->flash('mymessage');
             $isSucceed =  $this->request->query['success'];
            if($isSucceed){
                ?>
                <br/>
                Silakan menuju halaman
                <?php

            echo $this->Html->link('Login','/Users/Login');
            }
        ?>

</div>