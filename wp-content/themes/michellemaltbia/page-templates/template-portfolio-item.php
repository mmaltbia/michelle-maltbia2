<?php /* Template Name: Single Portfolio Item Template */ 
get_header(); ?>
<div id="landing" class="container-fluid gradient-bg" style="position: relative;padding-top: 75px;padding-bottom: 75px; color:#fff;">
    <div class="row">
        <?php
        $data = get_option('page_portfolio');
        $length = count($data);
        for($i=0; $i< $length; $i++){
            $dir = get_home_url();
            $slug = $data[$i]['block1_slug'] . '/';
            $url = substr(get_permalink(),38);
            ?>
            <?php if ($slug == $url){ ?>
                <div class="container-fluid text-center">
                    <h1><?php echo $data[$i]['block1_title']?></h1>
                </div>
    </div>         
</div>
<div class="container-fluid">
    <div class="row">
       <div class="col-xs-12 text-center">
            <br><br><br>
            <h1><?php echo $data[$i]['block1_project']?></h1>
       </div>
        <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5">
            <div class="gradient-hr"></div> 
            <br><br><br><br>
        </div>
        
            <div class="col-sm-6" style="padding:0;">
                <div id="img-1" class="col-sm-12" style="padding:0;">
                    <?php 
                    $filetype = wp_check_filetype($data[$i]['block1_img']);
                     if($filetype['ext'] === "svg" ){ ?>
                        <object type="image/svg+xml" data="<?php echo $data[$i]['block1_img']?>" style="width: 100%;"></object>
                    <?php }
                     else if($filetype['ext'] === 'jpg' || 'png'){ ?>
                    <img src="<?php echo $data[$i]['block1_img']?>" style="width:100%;">
                    <?php } ?>
                    <br><br>
                </div>
                
                <div id="img-3" class="col-sm-12" style="padding:0;">
                    <?php 
                    $filetype = wp_check_filetype($data[$i]['block1_img3']);
                    if($filetype['ext'] === "svg" ){ ?>
                        <object type="image/svg+xml" data="<?php echo $data[$i]['block1_img3']?>" style="width: 100%;"></object>
                    <?php }
                    else if($filetype['ext'] === 'jpg' || 'png'){ ?>
                    <img src="<?php echo $data[$i]['block1_img3']?>">
                    <?php } ?>
                </div>
                <div id="img-4" class="col-sm-12" style="padding:0;">
                    <?php 
                    $filetype = wp_check_filetype($data[$i]['block1_img4']);
                    if($filetype['ext'] === "svg" ){ ?>
                        <object type="image/svg+xml" data="<?php echo $data[$i]['block1_img4']?>" style="width: 100%;"></object>
                    <?php }
                    else if($filetype['ext'] === 'jpg' || 'png'){ ?>
                    <img src="<?php echo $data[$i]['block1_img4']?>">
                    <?php } ?>
                </div>
                <div id="img-5" class="col-sm-12" style="padding:0;">
                    <?php 
                    $filetype = wp_check_filetype($data[$i]['block1_img5']);
                    if($filetype['ext'] === "svg" ){ ?>
                        <object type="image/svg+xml" data="<?php echo $data[$i]['block1_img5']?>" style="width: 100%;"></object>
                    <?php }
                    else if($filetype['ext'] === 'jpg' || 'png'){ ?>
                    <img src="<?php echo $data[$i]['block1_img5']?>">
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Project Brief</h3>
                <?php if($data[$i]['block1_link']){ ?>
                <a href="<?php echo $data[$i]['block1_link']?>"><?php echo $data[$i]['block1_link']?></a>
                <?php } ?>
                <p><?php echo $data[$i]['block1_description']?></p>
                <br>
                <h3>Technology</h3>
                <p><?php echo $data[$i]['block1_tech']?></p>
            </div> 
        </div>
    </div>


   <?php }
    }

get_footer();
?>
