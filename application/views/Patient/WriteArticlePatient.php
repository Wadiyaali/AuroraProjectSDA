 <div class="article">
        <header class="header new-article">
            <div class="content-wrap">
                <h2 class="title-page vert-align" style="font-family:Century Gothic;">New Post</h2>    
              
            </div> 
        </header>
        <div class="add-new-article">
            <h5 class="text-center text-light text-dark"> *this page is dedicated to write articles for mental health. By publishing article you are agreeing to terms and 
                    condition of our page and your identity won't stay anonymous.
                </h5>
         
            <div class="content-wrap">
            <?php echo form_open(''); ?>
           
                          
            <div class="form-group col-md-12 col-lg-12">
					<p> <?php
                    $data=array(     
                        'class'=>'name-field col-md-3 col-lg-3',
              );    echo form_label("Title","txtArticleTitlePat",$data); ?>	
                        <?php
                    $data=array(
                        'type'=>'text',
                        'class'=>'form-control col-md-9 col-lg-9 light-text',
                        'id'=>'txtArticleTitlePat',
                        'name'=>'txtArticleTitlePat',
                        'value' => set_value('txtArticleTitlePat'),
                         );
                    echo form_input($data);
                    ?></p></div>
                  
                    <div class="form-group col-md-12 col-lg-12">
					<p> <?php
                    $data=array(     
                        'class'=>'name-field col-md-6 col-lg-6',
              );    echo form_label("Content","txtArticleContentPat",$data); ?>	
                        <?php
                    $data=array(
                        'type'=>'text',
                        'class'=>'form-control col-md-9 col-lg-9 light-text',
                        'id'=>'txtArticleContentPat',
                        'name'=>'txtArticleContentPat',
                        'rows'=>8,
                        'placehpolder'=>'Add content here...',
                        'cols'=>50,
                        'value' => set_value('txtArticleContentPat'),
                        'maxlength'=>2000,
                         );
                    echo form_textarea($data);
                    ?></p></div>

                

                     <div class="btn btn-block">
            <?php
            $array = array(
                'Name' => 'AddArticlePat',
                'class' => 'btn btn-lg btn-success text-white',
                'value' => 'Submit',
            );
            echo form_submit($array);
            ?>
                    </div>
                  <?php echo validation_errors('<p class="alert alert-danger">'); ?>

<?php echo form_close(); ?> 
    </div>
    <?php if ($this->session->flashdata('createASuccess')) : ?>
            <p class="alert alert-success"><?php echo $this->session->flashdata('createSuccess'); ?> </p>
        <?php endif; ?>

        <?php if ($this->session->flashdata('createAError')) : ?>
            <p class="alert alert-danger"><?php echo $this->session->flashdata('createError'); ?> </p>
        <?php endif; ?>
    </div></div>