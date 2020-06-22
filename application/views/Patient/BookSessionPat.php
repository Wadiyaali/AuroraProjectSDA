<div class="sess">
    <main role="main">
        <fieldset>
            <?php echo form_open(''); ?>
            <h2 class="text-bold text-capitalize text-dark text-center">Book a session</h2>


            <div class="form-group form-element">
                <p>
                    <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );

                    echo form_label("Check in Date", "txtSessionDate", $data); ?>

                    <?php
                    $data = array(
                        'type' => 'date',
                        'class' => 'form-control col-md-4',
                        'id' => 'txtSessionDate',
                        'name' => 'txtSessionDate',
                        'value' => set_value('txtSessionDate'),
                        'title' => 'The closest appointment you can book  is for tomorrow.',
                    );
                    echo form_input($data);
                    ?>
                </p>
            </div>

            <div class="form-group form-element">
                <p> <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );
                    echo form_label("Time (24 hrs)", "txtSessionTime", $data); ?>
                    <?php
                    $data = array(
                        'type' => 'number',
                        'class' => 'form-control col-md-4',
                        'id' => 'txtSessionTime',
                        'name' => 'txtSessionTime',
                        'value' => set_value('txtSessionTime'),
                        'min' => 1,
                        'max' => 24,
                    );
                    echo form_input($data);
                    ?></p>
            </div>

            <div class="form-group form-element">
                <p> <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );
                    echo form_label("Severity", "txtSeverity", $data); ?>
                    <?php
                    $data = array(
                        'type' => 'number',
                        'class' => 'form-control col-md-4',
                        'id' => 'txtSeverity',
                        'name' => 'txtSeverity',
                        'value' => set_value('txtSeverity'),
                        'min' => 0,
                        'max' => 5,
                    );
                    echo form_input($data);
                    ?></p>
            </div>
            <div class="form-group form-element">
                <p style="padding:1.2em 1 1.2em 1;">
                    <?php
                    $data = array(
                        'class' => 'col-md-4',
                    );
                    echo form_label("Choose Pyschologist", "txtPyscho", $data); ?>
                    <?php
                    $js = array(
                        'id'       => 'txtPyscho',
                        'class' => 'col-md-4 form-control',
                        'style' => 'height:2.5em;'
                    );
                    $arr = array(
                        '' => 'Choose Psychologist'
                    );
                    echo form_dropdown('txtPyscho', $arr + $Psychologists, '', $js);
                    ?></p>
            </div>

            <p></p>
            <div class="btn btn-block">
                <?php
                $array = array(
                    'Name' => 'AddSession',
                    'class' => 'btn btn-block btn-success text-white',
                    'value' => 'Create Booking',
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