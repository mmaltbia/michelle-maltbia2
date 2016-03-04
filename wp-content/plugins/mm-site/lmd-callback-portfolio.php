<?php 

function lmd_callback_portfolio(){
    
    // Deletes portfolio item
    if (isset ($_POST['delete-item']) ){
        $portfolio_item = get_option('page_portfolio');
        $i =  $_POST['delete-item-i']; 
        unset($portfolio_item[$i]);
        $updated_list = array_values($portfolio_item);
        update_option('page_portfolio', $updated_list);
    }
    
    // Adds new portfolio item
    if (isset ($_POST['new-submit']) ) {
        $db_item = get_option('page_portfolio');

        $new_item = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_img2' => sanitize_text_field( $_POST['block1_img2'] ),
            'block1_img3' => sanitize_text_field( $_POST['block1_img3'] ),
            'block1_img4' => sanitize_text_field( $_POST['block1_img4'] ),
            'block1_img5' => sanitize_text_field( $_POST['block1_img5'] ),
            'block1_project' => sanitize_text_field( $_POST['block1_project'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_client' => sanitize_text_field( $_POST['block1_client'] ),
            'block1_description' => wpautop( $_POST['block1_description'] ),
            'block1_description2' => wpautop( $_POST['block1_description2'] ),
            'block1_link' => sanitize_text_field( $_POST['block1_link'] ),
            'block1_slug' => sanitize_text_field( $_POST['block1_slug'] ),
            'block1_tech' => sanitize_text_field( $_POST['block1_tech'] )
        );

        if (empty($db_item)){
            add_option('page_portfolio');
            $db_item = [];
            array_push($db_item, $new_item);
            update_option('page_portfolio', $db_item);
        }

        else {
            array_push($db_item, $new_item);
            print_r($db_item);
            update_option('page_portfolio', $db_item);
        }
    }
    
    // Edits portfolio item
    if (isset ($_POST['save-item']) ) {
        $db_item = get_option('page_portfolio');
        $i = 	$_POST['save-item-i']; 
        $updated_item = array(
            'block1_img' => sanitize_text_field( $_POST['block1_img'] ),
            'block1_img2' => sanitize_text_field( $_POST['block1_img2'] ),
            'block1_img3' => sanitize_text_field( $_POST['block1_img3'] ),
            'block1_img4' => sanitize_text_field( $_POST['block1_img4'] ),
            'block1_img5' => sanitize_text_field( $_POST['block1_img5'] ),
            'block1_link' => sanitize_text_field( $_POST['block1_link'] ),
            'block1_project' => sanitize_text_field( $_POST['block1_project'] ),
            'block1_title' => sanitize_text_field( $_POST['block1_title'] ),
            'block1_client' => sanitize_text_field( $_POST['block1_client'] ),
            'block1_description' => wpautop( $_POST['block1_description'] ),
            'block1_description2' => wpautop( $_POST['block1_description2'] ),
            'block1_slug' => sanitize_text_field( $_POST['block1_slug'] ),
            'block1_tech' => sanitize_text_field( $_POST['block1_tech'] )
        );
        $db_item[$i] = $updated_item;
        update_option('page_portfolio', $db_item);
    }
    
    // Gets portfolio item data from the database
    $db_values = get_option('page_portfolio');
	
	//setting empty values to avoid 'undefined index' warning
	$block1_img = '';
    $block1_img2 = '';
    $block1_img3 = '';
    $block1_img4 = '';
    $block1_img5 = '';
    $block1_link = '';
    $block1_project = '';
    $block1_title = '';
    $block1_client = '';
	$block1_description = '';
    $block1_description2 = '';
    $block1_slug = '';
    $block1_tech = '';

    //if there's any data in options table, updating our variables with relevant data	

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="background: #333;">
           <div class="col-xs-12">
               <h1>Portfolio <a id="add-new-portfolio" href="#" class="btn btn-primary" style="margin-top: -7px;">+ Add New</a></h1>
           </div>
        </div>
    </div>
    <div id="new-form" class="row hide">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 block">
            <form name="add_new_form" action="" method="post" onsubmit="window.location.reload()">
               <div class="col-sm-12" style="margin-top: 10px;">
                   <div class="col-sm-4" style="padding:0;">
                      <div id="new-image">
                      <?php 
                        $url = plugins_url(); ?>
                        <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100"> 
                       </div>
                       <input id="upload_image_button" class="gray-box" type="button" value="Choose Image" style="width: 100%" />
                       <input type="text" id="block1_img" name="block1_img" value="" size="30" style="display: none">
                   </div>
                   <div class="col-sm-8 text-center" style="padding-right: 0; padding-left: 25px;">
                       <input type="text" name="block1_project" value="" size="30" placeholder="Project Name" class="w-100">
                       <br>
                        <input type="text" name="block1_title" value="" size="30" placeholder="Title" class="w-100">
                        <br>
                        <input type="text" name="block1_client" value="" size="30" placeholder="Client Name" class="w-100">
                        <br>
                        <textarea name="block1_description" class="w-100" id="description" placeholder="Description" cols="30" rows="3" value=""></textarea>
                        <br>
                        <input type="text" name="block1_slug" value="" size="30" placeholder="Slug Name (/slug-name)" class="w-100">
                        <br>
                        <input type="text" name="block1_link" value="" size="30" placeholder="Link to Website" class="w-100">
                        <br>
                        <input type="text" name="block1_tech" value="" size="30" placeholder="Technology Used" class="w-100">
                        <div class="col-sm-12" style="padding:0;">
                            <div class="col-sm-3" style="padding:0;">
                                <div id="new-image2">
                                    <?php 
                                    $url = plugins_url(); ?>
                                    <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100"> 
                                </div>
                                <input id="upload_image_button_2" class="gray-box" type="button" value="Choose Image" style="width: 100%" />
                                <input type="text" id="block1_img2" name="block1_img2" value="" size="30" style="display: none"> 
                            </div>
                            <div class="col-sm-3" style="padding:0;">
                                <div id="new-image3">
                                    <?php 
                                    $url = plugins_url(); ?>
                                    <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100"> 
                                </div>
                                <input id="upload_image_button_3" class="gray-box" type="button" value="Choose Image" style="width: 100%" />
                                <input type="text" id="block1_img3" name="block1_img3" value="" size="30" style="display: none"> 
                            </div>
                            <div class="col-sm-3" style="padding:0;">
                                <div id="new-image4">
                                    <?php 
                                    $url = plugins_url(); ?>
                                    <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100"> 
                                </div>
                                <input id="upload_image_button_4" class="gray-box" type="button" value="Choose Image" style="width: 100%" />
                                <input type="text" id="block1_img4" name="block1_img4" value="" size="30" style="display: none"> 
                            </div>
                            <div class="col-sm-3" style="padding:0;">
                                <div id="new-image5">
                                    <?php 
                                    $url = plugins_url(); ?>
                                    <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100"> 
                                </div>
                                <input id="upload_image_button_5" class="gray-box" type="button" value="Choose Image" style="width: 100%" />
                                <input type="text" id="block1_img5" name="block1_img5" value="" size="30" style="display: none"> 
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="submit" class="btn-primary btn pull-right" name="new-submit" value="Publish" style="margin-left: 10px;">
                         <input id="cancel-btn" type="button" class="btn-secondary btn pull-right" value="Cancel">
                   </div>
               </div>
            </form>
        </div>
    </div>
</div>
<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="background: #333; padding-top: 30px; color: #fff;">
          <div class="col-xs-12">
           <?php 
                $length = count($db_values);

                if (empty($db_values)) { ?>
                    <div class="col-xs-12 block">
                           <span style="color:#333;font-family: 'Open Sans';font-weight: 300;font-size: 16px;">
                           Your portfolio is empty. Add some of your recent work using the add new button above.</span>
                    </div> <?php 
                }
                if (!empty($db_values)){ ?>
                       <div class="row">
                            <table style="width:100%; color: #fff;">
                                      <div class="row">
                                        <div class="col-xs-3">Thumbnail</div>
                                        <div class="col-xs-3">Title</div>
                                        <div class="col-xs-3">Client</div>		
                                        <div class="col-xs-3">Description</div>
                                      </div>
                            <?php 
                            // Loops over items in portfolio array then prints them to the screen
                            for ($i = 0; $i < $length; $i++) { ?>
                                <div id="portfolio-container" class="row show" style="margin-bottom: 15px;">
                                    <div id="item" class="row-<?php echo $i?> show">
                                        <div class="col-xs-12 col-sm-3"><img src="<?php echo $db_values[$i]['block1_img']?>" class="w-100"></div>
                                        <div class="col-xs-12 col-sm-3">
                                            <?php echo $db_values[$i]['block1_title'] ?>
                                            <div class="col-xs-12" style="padding:0;margin-top:15px;">
                                                <form action="" onsubmit="window.location.reload()" method="post">
                                                    <input class="btn btn-primary" type="submit" name="delete-item" value="Delete" />
                                                    <input type="text" name="delete-item-i" style="width: 1%; display:none;" value="<?php echo $i ?>"/>
                                                </form>
                                                <form action="" method="post">
                                                    <input id="<?php echo $i ?>" class="edit-btn btn btn-secondary" type="submit" name="edit-item" value="Edit" />
                                                    <input type="text" name="edit-item-i" style="width: 1%; display:none;" value="<?php echo $i ?>"/>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3"><?php echo $db_values[$i]['block1_client'] ?></div>	
                                        <div class="col-xs-12 col-sm-3">
                                            <?php echo $db_values[$i]['block1_description'] ?><br>
                                            <?php echo $db_values[$i]['block1_slug'] ?><br>
                                        </div>
                                    </div>
                                    <div id="edit-form" class="edit-form-<?php echo $i?> hide">
                                       <form action="" method="post">
                                           <div class="col-sm-4" style="padding:0;">
                                               <div id="edit-image" class="col-sm-12">
                                                   <?php 
                                                    $url = plugins_url();
                                                    if($db_values[$i]['block1_img']){ ?>
                                                   <img src="<?php echo $db_values[$i]['block1_img'] ?>" class="w-100"> 
                                                    <?php }
                                                    if(!$db_values[$i]['block1_img']){ ?>
                                                        <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100" alt="">
                                                        <?php } ?>
                                               </div>
                                               <div class="col-sm-12">
                                                   <input id="upload_image_button_6" class="btn btn-primary" type="button" value="Choose Image" style="width: 100%" />
                                                   <input type="text" id="block1_img6" name="block1_img" value="<?php echo $db_values[$i]['block1_img'] ?>" size="30" style="display: none">
                                               </div>
                                           </div>
                                            <div class="col-sm-8">
                                                <div class="col-sm-4">
                                                    <label for="block1_project">Project Name</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_project" style="width:100%;" value="<?php echo $db_values[$i]['block1_project'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="block1_title">Title</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_title" style="width:100%;" value="<?php echo $db_values[$i]['block1_title'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="block1_client">Client</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_client" style="width:100%;" value="<?php echo $db_values[$i]['block1_client'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="block1_description">Description</label>
                                                </div>
                                                <div class="col-sm-12" style="color: #333;">
                                                   <?php 
                                                    $text = wpautop($db_values[$i]['block1_description']);
                                                    $content = $text;
                                                    $editor_id = 'mycustomeditor-'. $i;
                                                    $settings = array(
                                                        'textarea_name' => 'block1_description',
                                                        'wpautop' => false
                                                    );

                                                              wp_editor(wpautop($content), $editor_id, $settings ); ?>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-12" style="color: #333;">
                                                    <?php 
                                                              $text = wpautop($db_values[$i]['block1_description2']);
                                                              $content = $text;
                                                              $editor_id = 'mycustomeditor-'. $i;
                                                              $settings = array(
                                                                  'textarea_name' => 'block1_description2',
                                                                  'wpautop' => false
                                                              );

                                                              wp_editor(wpautop($content), $editor_id, $settings ); ?>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="block1_slug">Slug Name</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_slug" style="width:100%;" value="<?php echo $db_values[$i]['block1_slug'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="block1_link">Link to Website</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_link" style="width:100%;" value="<?php echo $db_values[$i]['block1_link'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="block1_tech">Technology Used</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="block1_tech" style="width:100%;" value="<?php echo $db_values[$i]['block1_tech'] ?>"/>
                                                    <br><br>
                                                </div>
                                                <div class="col-sm-12" style="padding:0;">
                                                    <div class="col-sm-3" style="padding:0;">
                                                        <div id="edit-image<?php echo i?>">
                                                            <?php 
                                                        $url = plugins_url();
                                                              if($db_values[$i]['block1_img2']){ ?>
                                                            <img src="<?php echo $db_values[$i]['block1_img2'] ?>" class="w-100"> 
                                                            <?php }
                                                              if(!$db_values[$i]['block1_img2']){ ?>
                                                            <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100" alt="">
                                                            <?php } ?> 
                                                        </div>
                                                        <input id="upload_image_button_<?php echo i?>" class="btn btn-secondary" type="button" value="Choose Image" style="width: 100%" />
                                                        <input type="text" id="block1_img7" name="block1_img2" value="" size="30" style="display: none"> 
                                                    </div>
                                                    <div class="col-sm-3" style="padding:0;">
                                                        <div id="edit-image8">
                                                            <?php 
                                                            $url = plugins_url();
                                                              if($db_values[$i]['block1_img3']){ ?>
                                                                    <img src="<?php echo $db_values[$i]['block1_img3'] ?>" class="w-100"> 
                                                            <?php }
                                                              if(!$db_values[$i]['block1_img3']){ ?>
                                                            <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100" alt="">
                                                            <?php } ?> 
                                                        </div>
                                                        <input id="upload_image_button_8" class="btn btn-secondary" type="button" value="Choose Image" style="width: 100%" />
                                                        <input type="text" id="block1_img8" name="block1_img3" value="" size="30" style="display: none"> 
                                                    </div>
                                                    <div class="col-sm-3" style="padding:0;">
                                                        <div id="edit-image9">
                                                            <?php 
                                                        $url = plugins_url();
                                                              if($db_values[$i]['block1_img4']){ ?>
                                                            <img src="<?php echo $db_values[$i]['block1_img4'] ?>" class="w-100"> 
                                                            <?php }
                                                              if(!$db_values[$i]['block1_img4']){ ?>
                                                            <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100" alt="">
                                                        <?php } ?> 
                                                        </div>
                                                        <input id="upload_image_button_9" class="btn btn-secondary" type="button" value="Choose Image" style="width: 100%" />
                                                        <input type="text" id="block1_img9" name="block1_img4" value="" size="30" style="display: none"> 
                                                    </div>
                                                    <div class="col-sm-3" style="padding:0;">
                                                        <div id="edit-image10">
                                                            <?php 
                                                    $url = plugins_url();
                                                    if($db_values[$i]['block1_img5']){ ?>
                                                   <img src="<?php echo $db_values[$i]['block1_img5'] ?>" class="w-100"> 
                                                    <?php }
                                                    if(!$db_values[$i]['block1_img5']){ ?>
                                                        <img src="<?php echo $url ?>/mm-site/img/no-image.svg" class="w-100" alt="">
                                                        <?php } ?> 
                                                        </div>
                                                        <input id="upload_image_button_10" class="btn btn-secondary" type="button" value="Choose Image" style="width: 100%" />
                                                        <input type="text" id="block1_img10" name="block1_img5" value="" size="30" style="display: none"> 
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <input class="btn btn-primary btn pull-right" class="btn btn-primary" type="submit" name="save-item" value="Save" />
                                                <input type="text" name="save-item-i" style="width: 1%; display:none;" value="<?php echo $i ?>"/>
                                                <input type="button" class="btn-secondary btn pull-right cancel-edit-btn-<?php echo $i ?>" value="Cancel">
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                  <?php  }
                ?>
           </div>
        </div>
    </div>

	<?php
}
?>