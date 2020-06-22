<<<<<<< HEAD

   <div class="test">
        <h1>Anxiety Analyzing test</h1>
        <?php echo form_open(''); ?>
<div class="container">
    <section class="section section--maa">
    <?php 
    $attributes = array(
      'ID'  => 'lblResult',
      'Text'  => '',
      'CssClass'  => 'res'
);

echo form_label('', '', $attributes);
    ?>
        
    </section>

 <section class="section section--taivas">
  <?php echo "<p>Below is a list of questions that relate to life experiences common among people who have been diagnosed with anxiety. Please read 
        each question carefully, and indicate how often you have experienced the same or similar challenges in the past few months.<br />
        <strong>NOTE:</strong> Your privacy is important to us. All results are completely anonymous.</p>"?>
     
  <section class="section section--maa">
    <h2 class="section__title">
     Do you experience intense worry and find it difficult to control?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ1a" type="radio" value="0" groupname="q1" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ1b" type="radio" value="1" groupname="q1" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ1c" type="radio" value="2" groupname="q1" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ1d" type="radio" value="3" groupname="q1" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ1e" type="radio" value="4" groupname="q1" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

  <section class="section section--taivas">
    <h2 class="section__title">
      Does worry or anxiety make you feel irritable or fatigued?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ2a" type="radio" value="0" groupname="q2" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ2b" type="radio" value="1" groupname="q2" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ2c" type="radio" value="2" groupname="q2" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ2d" type="radio" value="3" groupname="q2" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ2e" type="radio" value="4" groupname="q2" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

    <section class="section section--maa">
    <h2 class="section__title">
      Does worry or anxiety disturb your sleep or ability to concentrate?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ3a" type="radio" value="0" groupname="q3" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ3b" type="radio" value="1" groupname="q3" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ3c" type="radio" value="2" groupname="q3" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ3d" type="radio" value="3" groupname="q3" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ3e" type="radio" value="4" groupname="q3" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

    <section class="section section--taivas">
    <h2 class="section__title">
      Do you experience constant thoughts that are upsetting and unwanted?
    </h2>
        
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ4a" type="radio" value="0" groupname="q4" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ4b" type="radio" value="1" groupname="q4" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ4c" type="radio" value="2" groupname="q4" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ4d" type="radio" value="3" groupname="q4" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ4e" type="radio" value="4" groupname="q4" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>
  
  
  <section class="section section--maa">
    <h2 class="section__title">
    Do you experience strong fear that causes panic, shortness of breath, chest pains, a pounding heart, sweating, shaking, nausea, dizziness, and/or fear of dying?
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ5a" type="radio" value="0" groupname="q5" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ5b" type="radio" value="1" groupname="q5" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ5c" type="radio" value="2" groupname="q5" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ5d" type="radio" value="3" groupname="q5" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ5e" type="radio" value="4" groupname="q5" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  

     <section class="section section--taivas">
    <h2 class="section__title">
      Do you avoid social situations due to fear of this panic?
    </h2>
     
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ6a" type="radio" value="0" groupname="q6" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ6b" type="radio" value="1" groupname="q6" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ6c" type="radio" value="2" groupname="q6" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ6d" type="radio" value="3" groupname="q6" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ6e" type="radio" value="4" groupname="q6" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  

     <section class="section section--maa">
    <h2 class="section__title">
     Do you ever engage in repetitive behaviors to manage your worry? (i.e. checking the oven is off, locking doors, washing hands, counting, repeating words)
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ7a" type="radio" value="0" groupname="q7" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ7b" type="radio" value="1" groupname="q7" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ7c" type="radio" value="2" groupname="q7" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ7d" type="radio" value="3" groupname="q7" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ7e" type="radio" value="4" groupname="q7" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  
    <div class="btn btn-block">

    <?php 
            $data = array(
              'ID'  => 'btnTestSubmit',
              'Text'  => 'Submit',
              'CssClass'  => 'btn btn-lg btn-block btn-success text-white',
              'style'  => 'padding:1.5em; font-size:1em',
              'OnClick'  => 'btnTestSubmit_Click'
            );
            
            echo form_button($data);
                    ?>

					</div>
   
     <section class="section section--taivas">
    <i><strong>Important: </strong>The above quiz is based on the Patient Health Questionnaire (PHQ-9). If you think you(or a loved one) may be suffering 
         from Anxiety and/or experiencing a mental health crisis, we strongly suggest that you reach out to to a qualified 
         mental health professional.</i>  
     </section>
     </section>
</div>
   <?php echo form_close(); ?>
</div>
=======

   <div class="test">
        <h1>Anxiety Analyzing test</h1>
        <?php echo form_open(''); ?>
<div class="container">
    <section class="section section--maa">
    <?php 
    $attributes = array(
      'ID'  => 'lblResult',
      'Text'  => '',
      'CssClass'  => 'res'
);

echo form_label('', '', $attributes);
    ?>
        
    </section>

 <section class="section section--taivas">
  <?php echo "<p>Below is a list of questions that relate to life experiences common among people who have been diagnosed with anxiety. Please read 
        each question carefully, and indicate how often you have experienced the same or similar challenges in the past few months.<br />
        <strong>NOTE:</strong> Your privacy is important to us. All results are completely anonymous.</p>"?>
     
  <section class="section section--maa">
    <h2 class="section__title">
     Do you experience intense worry and find it difficult to control?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ1a" type="radio" value="0" groupname="q1" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ1b" type="radio" value="1" groupname="q1" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ1c" type="radio" value="2" groupname="q1" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ1d" type="radio" value="3" groupname="q1" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ1e" type="radio" value="4" groupname="q1" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

  <section class="section section--taivas">
    <h2 class="section__title">
      Does worry or anxiety make you feel irritable or fatigued?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ2a" type="radio" value="0" groupname="q2" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ2b" type="radio" value="1" groupname="q2" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ2c" type="radio" value="2" groupname="q2" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ2d" type="radio" value="3" groupname="q2" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ2e" type="radio" value="4" groupname="q2" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

    <section class="section section--maa">
    <h2 class="section__title">
      Does worry or anxiety disturb your sleep or ability to concentrate?
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ3a" type="radio" value="0" groupname="q3" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ3b" type="radio" value="1" groupname="q3" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ3c" type="radio" value="2" groupname="q3" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ3d" type="radio" value="3" groupname="q3" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ3e" type="radio" value="4" groupname="q3" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>

    <section class="section section--taivas">
    <h2 class="section__title">
      Do you experience constant thoughts that are upsetting and unwanted?
    </h2>
        
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ4a" type="radio" value="0" groupname="q4" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ4b" type="radio" value="1" groupname="q4" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ4c" type="radio" value="2" groupname="q4" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ4d" type="radio" value="3" groupname="q4" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ4e" type="radio" value="4" groupname="q4" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>
  
  
  <section class="section section--maa">
    <h2 class="section__title">
    Do you experience strong fear that causes panic, shortness of breath, chest pains, a pounding heart, sweating, shaking, nausea, dizziness, and/or fear of dying?
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ5a" type="radio" value="0" groupname="q5" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ5b" type="radio" value="1" groupname="q5" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ5c" type="radio" value="2" groupname="q5" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ5d" type="radio" value="3" groupname="q5" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ5e" type="radio" value="4" groupname="q5" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  

     <section class="section section--taivas">
    <h2 class="section__title">
      Do you avoid social situations due to fear of this panic?
    </h2>
     
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ6a" type="radio" value="0" groupname="q6" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ6b" type="radio" value="1" groupname="q6" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ6c" type="radio" value="2" groupname="q6" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ6d" type="radio" value="3" groupname="q6" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ6e" type="radio" value="4" groupname="q6" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  

     <section class="section section--maa">
    <h2 class="section__title">
     Do you ever engage in repetitive behaviors to manage your worry? (i.e. checking the oven is off, locking doors, washing hands, counting, repeating words)
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ7a" type="radio" value="0" groupname="q7" <?php echo  set_radio('Never', '0'); ?> /><br/>
    <input ID="rbQ7b" type="radio" value="1" groupname="q7" <?php echo  set_radio('Rarely', '1'); ?> /><br/>
    <input ID="rbQ7c" type="radio" value="2" groupname="q7" <?php echo  set_radio('Sometimes', '2'); ?> /><br/>
    <input ID="rbQ7d" type="radio" value="3" groupname="q7" <?php echo  set_radio('Often', '3'); ?> /><br/>
    <input ID="rbQ7e" type="radio" value="4" groupname="q7" <?php echo  set_radio('Very often', '4'); ?> /><br/>
    </p> 

  </section>  
    <div class="btn btn-block">

    <?php 
            $data = array(
              'ID'  => 'btnTestSubmit',
              'Text'  => 'Submit',
              'CssClass'  => 'btn btn-lg btn-block btn-success text-white',
              'style'  => 'padding:1.5em; font-size:1em',
              'OnClick'  => 'btnTestSubmit_Click'
            );
            
            echo form_button($data);
                    ?>

					</div>
   
     <section class="section section--taivas">
    <i><strong>Important: </strong>The above quiz is based on the Patient Health Questionnaire (PHQ-9). If you think you(or a loved one) may be suffering 
         from Anxiety and/or experiencing a mental health crisis, we strongly suggest that you reach out to to a qualified 
         mental health professional.</i>  
     </section>
     </section>
</div>
   <?php echo form_close(); ?>
</div>
>>>>>>> bb4dae05fc99bf32988c35fe2c7b1a9a6c886b97
