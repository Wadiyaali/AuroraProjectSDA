<div class="signup-content">
        <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <?php echo form_open(''); ?>
    
    <div class="my-5 form-group group">
    
                    <?php
                    $data=array(
                        'type'=>'text',
                        'class'=>'form-control',
                        'id'=>'txtName',
                        'title'=>'Name Must contain 4-5 Characters',
                        'name'=>'txtName',
                        'Placeholder'=>'Enter Full Name'
                    );
                    echo form_input($data);
                    ?>
                    
                </div>
 <div class="my-5 form-group group">
    
                    <?php
                    $data=array(
                        'type'=>'text',
                        'class'=>'form-control',
                        'id'=>'txtEmail',
                        'title'=>'eg. abc12@gmail.com',
                        'name'=>'txtEmail',
                        'Placeholder'=>'Enter Email',
                        'Pattern'=>'[A-Za-z0-9]{2,}+@[a-z]{2,}+\.[a-z]{2,}'
                    );
                    echo form_input($data);
                    ?>
                    
                </div>
             
                <div class="my-5 form-group group">
    
    <?php
    $data=array(
        'type'=>'Password',
        'class'=>'form-control',
        'id'=>'txtPassword',
        'title'=>'Format: More than 8 Characters, atleast 1: Uppercase, LowerCase, Number',
        'name'=>'txtPassword',
        'Placeholder'=>'Enter Password',
        'Pattern'=>'^(?=.*[A-Za-z])(?=.*\d).{8,}$'
    );
    echo form_input($data);
    ?>
    
</div>
  
<div class="my-5 form-group group">
    
    <?php
    $data=array(
        'type'=>'Password',
        'class'=>'form-control',
        'id'=>'txtCPassword',
        'title'=>'Same as Password',
        'name'=>'txtCPassword',
        'Placeholder'=>'Re enter Password',
        'Pattern'=>'^(?=.*[A-Za-z])(?=.*\d).{8,}$'
    );
    echo form_input($data);
    ?>
    
</div>
<div class="my-5 form-group group">
    
    <?php
     $data=array(
      
      'class'=>'form-control col-md-6 col-lg-6',
      'id'=>'ddCategory',
      'title'=>'Select Category',
      'name'=>'ddCategory',
      'style'=>'height:3em;background:transparent;font-size:1.2em;color:#ccc;'
      
  );
    $options = [
      'writer'  => 'Writer',
      'psychologist'    => 'Psychologist',
      'patient'  => 'Patient',
      
];


echo form_dropdown('Category', $options, 'writer',$data);
    ?>
    
</div>

<div class="btn btn-sucess">
            <?php
            $array = array(
                'Name' => 'btnSignUp',
                'class' => 'mt-4 col-md-4 btn btn-success btn-outline-success',
                'value' => 'Submit',
                'style'=>'background:white;color:#008c76;margin-left:15em;'
            );
            echo form_submit($array);
            ?>
                    </div>
 <?php echo validation_errors('<p class="alert alert-danger">'); ?>

<?php echo form_close(); ?>
      </div>
 
 
  
  <div class="right">
      
   
    
  <img class="col-md-10 "style="margin-left:5em;" src="https://www.annafreud.org/media/7136/duisrg-a.png?anchor=center&mode=crop&width=660&height=396&meta=false&rnd=131752761630000000">  

   <h2 class="text-center col-md-11 ml-5 " style="font-family:Century Gothic; margin-top:2em;color:#008c76;"> We are pleased to have you with us. Join us and make our online community better</h2>
</div>
    </div>
</div> 