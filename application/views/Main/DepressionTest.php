<div class="test">  <h1>Depression Analyzing test</h1>
<?php echo form_open(''); ?>
<div class="container">
 <section class="section section--taivas">
    <?php 
        $attributes = array(
        'ID'  => 'lblResult',
        'Text'  => '',
        'CssClass'  => 'res'
    );

    echo form_label('', '', $attributes);
        ?>
         
    </section>

  <section class="section section--maa">

  <?php echo "<p>Below is a list of questions that relate to life experiences common among people who have been diagnosed with depression. Please read 
        each question carefully, and indicate how often you have experienced the same or similar challenges in the past few months.<br />
        <strong>NOTE:</strong> Your privacy is important to us. All results are completely anonymous.</p>"?> 
 
  <section class="section section--taivas">
    <h2 class="section__title">
      Little interest or pleasure in doing things
    </h2>

    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ1a" type="radio" value="0" groupname="q1" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ1b" type="radio" value="1" groupname="q1" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ1c" type="radio" value="2" groupname="q1" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ1d" type="radio" value="3" groupname="q1" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
    <section class="section section--maa">
    <h2 class="section__title">
      Trouble falling or staying asleep, or sleeping too much
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ2a" type="radio" value="0" groupname="q2" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ2b" type="radio" value="1" groupname="q2" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ2c" type="radio" value="2" groupname="q2" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ2d" type="radio" value="3" groupname="q2" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
    <section class="section section--taivas">
    <h2 class="section__title">
    Poor appetite or overeating  
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ3a" type="radio" value="0" groupname="q3" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ3b" type="radio" value="1" groupname="q3" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ3c" type="radio" value="2" groupname="q3" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ3d" type="radio" value="3" groupname="q3" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
  <section class="section section--maa">
    <h2 class="section__title">
      Feeling tired or having little energy
    </h2>
     
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ4a" type="radio" value="0" groupname="q4" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ4b" type="radio" value="1" groupname="q4" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ4c" type="radio" value="2" groupname="q4" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ4d" type="radio" value="3" groupname="q4" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
    <section class="section section--taivas">
    <h2 class="section__title">
      Feeling down, depressed, or hopeless
    </h2>
     
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ5a" type="radio" value="0" groupname="q5" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ5b" type="radio" value="1" groupname="q5" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ5c" type="radio" value="2" groupname="q5" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ5d" type="radio" value="3" groupname="q5" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
    <section class="section section--maa">
    <h2 class="section__title">
      Feeling bad about yourself - or that you are a failure or have let yourself or your family down
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ6a" type="radio" value="0" groupname="q6" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ6b" type="radio" value="1" groupname="q6" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ6c" type="radio" value="2" groupname="q6" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ6d" type="radio" value="3" groupname="q6" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
      <section class="section section--taivas">
    <h2 class="section__title">
      Trouble concentrating on things, such as reading the newspaper or watching television
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ7a" type="radio" value="0" groupname="q7" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ7b" type="radio" value="1" groupname="q7" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ7c" type="radio" value="2" groupname="q7" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ7d" type="radio" value="3" groupname="q7" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
     <section class="section section--maa">
    <h2 class="section__title">
      Moving or speaking so slowly that other people could have noticed
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ8a" type="radio" value="0" groupname="q8" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ8b" type="radio" value="1" groupname="q8" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ8c" type="radio" value="2" groupname="q8" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ8d" type="radio" value="3" groupname="q8" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
      <section class="section section--taivas">
    <h2 class="section__title">
      Thoughts that you would be better off dead, or of hurting yourself
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ9a" type="radio" value="0" groupname="q9" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ9b" type="radio" value="1" groupname="q9" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ9c" type="radio" value="2" groupname="q9" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ9d" type="radio" value="3" groupname="q9" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
     <section class="section section--maa">
    <h2 class="section__title">
      How difficult have these problems made it for you at work, home, school, or with other people?
    </h2>
    
    <p class="text-left col-md-12" style="margin-left:10em;">
    <input ID="rbQ10a" type="radio" value="0" groupname="q10" <?php echo  set_radio('Not at all', '0'); ?> /><br/>
    <input ID="rbQ10b" type="radio" value="1" groupname="q10" <?php echo  set_radio('Several days', '1'); ?> /><br/>
    <input ID="rbQ10c" type="radio" value="2" groupname="q10" <?php echo  set_radio('More than half of the days', '2'); ?> /><br/>
    <input ID="rbQ10d" type="radio" value="3" groupname="q10" <?php echo  set_radio('Nearly every day', '3'); ?> /><br/>
    </p> 

  </section>
     <section class="section section--maa">
        <i><strong>Important: </strong>  The above quiz is based on the Patient Health Questionnaire (PHQ-9). If you think you(or a loved one) may be suffering 
         from Depression and/or experiencing a mental health crisis, we strongly suggest that you reach out to to a qualified 
         mental health professional.</i>
     </section>

     <?php 
            $data = array(
              'ID'  => 'btnTestSubmit',
              'Text'  => 'Submit',
              'CssClass'  => 'btn btn-block btn-success text-white',
              'style'  => 'padding:1.5em; font-size:1em',
              'OnClick'  => 'btnTestSubmit_Click'
            );
            
            echo form_button($data);
                    ?>

    	</section>
</div>
    
</form></div>
