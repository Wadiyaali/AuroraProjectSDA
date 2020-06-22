       <div class="feed">
       <div class="sess">
    <main role="main">
        <fieldset>
            <?php echo form_open(''); ?>
            <h2 class="text-bold text-capitalize text-dark text-center">Write Feedback</h2>


            

         

            <div class="form-group form-element">
                <p> <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );
                    echo form_label("Ratings", "txtRating", $data); ?>
                    <?php
                    $data = array(
                        'type' => 'number',
                        'class' => 'form-control col-md-4',
                        'id' => 'txtRating',
                        'name' => 'txtRating',
                        'value' => set_value('txtRating'),
                        'min' => 0,
                        'max' => 5,
                    );
                    echo form_input($data);
                    ?></p>
            </div>
            <div class="form-group form-element">
                <p> <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );
                    echo form_label("Comments", "txtComments", $data); ?>
                    <?php
                    $data = array(
                        'type' => 'text',
                        'class' => 'form-control col-md-4',
                        'id' => 'txtComments',
                        'name' => 'txtComments',
                        'value' => set_value('txtComments'),
                        'rows'=>2,
                        'placehpolder'=>'Add comments here',
                        'cols'=>4,
                    );
                    echo form_textarea($data);
                    ?></p>
            </div>
            <p></p>
            <div class="btn btn-block">
                <?php
                $array = array(
                    'Name' => 'AddFeedback',
                    'class' => 'btn btn-block btn-success text-white',
                    'value' => 'Add',
                );
                echo form_submit($array);
                ?>
            </div>
            <?php echo validation_errors('<p class="alert alert-danger">'); ?>

            <?php echo form_close(); ?>
        </fieldset>
        <?php if ($this->session->flashdata('createSuccess')) : ?>
            <p class="alert alert-success"><?php echo $this->session->flashdata('createSuccess'); ?> </p>
        <?php endif; ?>

        <?php if ($this->session->flashdata('createError')) : ?>
            <p class="alert alert-danger"><?php echo $this->session->flashdata('createError'); ?> </p>
        <?php endif; ?>
    </main>
</div>
   </div>
