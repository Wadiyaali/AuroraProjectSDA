<div class="sess">
<main role="main">
			<fieldset>			
            <?php echo form_open(''); ?>
		<h2 class="text-bold text-capitalize text-dark text-center">Book a session</h2>
				
					
                    <div class="form-group form-element">
					<p>   
                    <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );
                    
                    echo form_label("Check in Date","txtSessionDate",$data); ?>	
                    
                            <?php
                    $data=array(
                        'type'=>'date',
                        'class'=>'form-control col-md-4',
                        'id'=>'txtSessionDate',
                        'name'=>'txtSessionDate',
                        'title'=>'The closest appointment you can book  is for tomorrow.',
                        'max'=>31-12-2022,);
                    echo form_input($data);
                    ?>
			</p>	</div>		
					<div class="form-element form-group">
                    <p> <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );
                    
                    echo form_label("Stay Anonymous","txtAnonymous",$data); ?>	
                        <?php
                        $data = array(
                            'name'          => 'txtAnonymous',
                            'id'            => 'txtAnonymous',
                            'value'         => 'accept',
                            'checked'       => false,
                            'class'=>'col-md-4',
                    );
                        echo form_checkbox($data);
                        
                        ?>
                    
                    </p>
						</div>
				
						<div class="form-group form-element">
					<p> <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );    echo form_label("Time (24 hrs)","txtSessionTime",$data); ?>	
                        <?php
                    $data=array(
                        'type'=>'number',
                        'class'=>'form-control col-md-4',
                        'id'=>'txtSessionTime',
                        'name'=>'txtSessionTime',
                        'min'=>1,
                        'max'=>24, );
                    echo form_input($data);
                    ?></p></div>
					
					
                    
                    <div class="form-group form-element">
					<p style="padding:1.2em 1 1.2em 1;"> <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );    echo form_label("Expected Problem","txtExpectedProblem",$data); ?>	
                        <?php
                   $options = array(
                    'depression'         => 'Depression',
                    'anxiety'         => 'Anxiety',
                    
            );
            $js = array(
                'id'       => 'txtExpectedProblem',
                'name'=>'txtExpectedProblem',
                'class'=>'col-md-4 form-control',
                'style'=>'height:2.5em;'
        );
            echo form_dropdown('anxiety', $options,'',$js);
                    ?></p></div>

                
            <div class="form-group form-element">
					<p> <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );    echo form_label("Severity","txtSeverity",$data); ?>	
                        <?php
                    $data=array(
                        'type'=>'number',
                        'class'=>'form-control col-md-4',
                        'id'=>'txtSeverity',
                        'name'=>'txtSeverity',
                        'min'=>0,
                        'max'=>5, );
                    echo form_input($data);
                    ?></p></div>
				 <div class="form-group form-element">
					<p style="padding:1.2em 1 1.2em 1;"> <?php
                    $data=array(     
                        'class'=>'col-md-4',
              );    echo form_label("Expected Problem","txtExpectedProblem",$data); ?>	
                        <?php
                   $options = array(
                    'depression'         => 'Depression',
                    'anxiety'         => 'Anxiety',
                    
            );
            $js = array(
                'id'       => 'txtExpectedProblem',
                'name'=>'txtExpectedProblem',
                'class'=>'col-md-4 form-control',
                'style'=>'height:2.5em;'
        );
            echo form_dropdown('anxiety', $options,'',$js);
                    ?></p></div>

			<p></p>
			<div class="btn btn-block">
            <?php
            $array = array(
                'Name' => 'AddSession',
                'class' => 'btn btn-block btn-success text-white',
                'value' => 'Submit',
            );
            echo form_submit($array);
            ?>
                    </div>
                    <?php echo validation_errors('<p class="alert alert-danger">'); ?>

<?php echo form_close(); ?>
            </fieldset>
	
</main>
  </div>
     <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0
        var yyyy = today.getFullYear();
        if(dd<10){
               dd='0'+dd
                 } 
        if(mm<10){
               mm='0'+mm
                } 

        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("dateSession").setAttribute("min", today+1);
    </script>