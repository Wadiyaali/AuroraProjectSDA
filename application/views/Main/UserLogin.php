
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <script type="text/javascript" language="javascript">
        window.history.forward();  
     function DisableBackButton(){
       window.history.forward()
      }
     DisableBackButton();
     window.onload = DisableBackButton;
     window.onpageshow = function(evt) { if (evt.persisted) DisableBackButton() }
     window.onunload = function() { void (0) }
 </script>
<div class="container login-form" style="background:#008c76; margin-top:10em;padding:2em;">
    
   
  
 <div class="col-md-6 col-lg-6" style="padding:5em;">
 <?php echo form_open(''); ?>
 <h1 class="text-white" style="font-family: Century Gothic;">
        
        Login
       </h1>
 <div class="my-5 form-group group">
    
    <?php
    $data=array(
        'type'=>'text',
        'class'=>'form-control form-field',
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
'class'=>'form-control form-field',
'id'=>'txtPassword',
'title'=>'Format: More than 8 Characters, atleast 1: Uppercase, LowerCase, Number',
'name'=>'txtPassword',
'Placeholder'=>'Enter Password',
'Pattern'=>'^(?=.*[A-Za-z])(?=.*\d).{8,}$'
);
echo form_input($data);
?>

</div>

<div class="my-5 form-group group ">
    
    <?php
     $data=array(
      
      'class'=>'form-control form-field col-md-8',
      'id'=>'ddCategory',
      'title'=>'Select',
      'name'=>'ddCategory',
      'style'=>'height:3em;'
      
  );
    $options = [
      'writer'  => 'Writer',
      'psychologist'    => 'Psychologist',
      'patient'  => 'Patient',
      
];


echo form_dropdown('Category', $options, 'writer',$data);
    ?>
    
</div>
<div class="btn btn-sucess col-md-12">
            <?php
            $array = array(
                'Name' => 'btnSignUp',
                'class' => 'mt-4 col-md-4 btn btn-success btn-outline-success',
                'value' => 'Submit',
                'style'=>'background:white;color:#008c76;margin-left:5em;'
            );
            echo form_submit($array);
            ?>
                    </div>
         <?php echo validation_errors('<p class="alert alert-danger">'); ?>
            <?php echo form_close(); ?>
        </div>
        <div>
        <?php if ($this->session->flashdata('loginError')) : ?>
            <p class="alert alert-danger"><?php echo $this->session->flashdata('loginError'); ?> </p>
        <?php endif; ?>
        </div>
        <div class="col-md-6 col-lg-6">
<img class="col-md-12" style="margin-top: 8em;" src="https://kidshelpline.com.au/sites/default/files/bdl_image/HEADER_T_MFSWMH.png">
        </div>
        </div>
    
  