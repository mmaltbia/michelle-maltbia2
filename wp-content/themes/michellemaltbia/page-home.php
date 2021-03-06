<?php get_header(); ?>
<div id="landing" class="container-fluid gradient-bg" style="position: relative;padding-bottom: 60px;">
    <div id="svg" style="position:absolute;top:0;left:0;width:100%;height:100%;"></div>
    <div class="row">
        <div class="col-xs-12 text-center" style="padding-top:85px;">
            <img id="headshot" src="<?php echo get_bloginfo('template_directory');?>/images/michelle-headshot.png">
        </div>
        <div class="col-xs-6 col-xs-offset-3 text-center">
            <h2>Full-Stack Developer</h2>
            <p style="color: #fff;"> 2014 - 2016 | Web Developer | Lauren Michelle Design</p>
            <p style="color: #fff;">Spelman College</p>
        </div>
    </div>         
</div>
<div id="hyper"class="container-fluid" style="background:#000;padding-top:50px;">
    <div class="row">
        <div class="col-xs-12 text-center" style="padding-bottom: 55px;text-transform: uppercase;color:#fff;">
            <h1>Portfolio</h1>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <?php 
            $imgPath = get_bloginfo('template_directory').'/images/';
            ?>
            <img src="<?php echo get_bloginfo('template_directory')?>/images/hyper-logo.png" alt="" width="100%">
            <h2 class="text-right" style="text-transform:uppercase;letter-spacing:2.5px;font-size: 13.5px;">Digital Viewing Party</h2>
            <br>
            <p class="text-center" style="color: #fff;">
                Hyper is the ultimate fan engagement platform. Hyper utilizes Amazon's Alexa technology to take an image of the screen whenever a user voices a verbal reaction in response to the show or movie they are watching.
                <br><br>
            </p>
            <div class="text-center">
                <a href="http://hypenbc.mybluemix.net/videos" class="btn btn-primary" style="color: #fff;">See it in Action!</a>
            </div>
            <div>
                <div class="col-xs-12" style="padding-top:50px;">
                    <img src="<?php echo $imgPath.'/hyper-main.png' ?>" width="100%">
                </div>
                
            </div>
        </div>
    </div>
</div>
<div id="lacy" class="container-fluid" style="background-image: url('<?php echo $imgPath.'/lacy/grey-shirt.jpg' ?>');background-size:cover;background-attachment: fixed;padding-top:100px;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <object width="100%" data="<?php echo $imgPath.'/lacy/lacy-logo.svg'?>" type="image/svg+xml"></object>
            <br>
            <div class="col-xs-12" style="background: #fff;border: solid #000 8px;padding-top: 30px;">
                <p class="text-center" style="color: #000;">
                    Lacy is a luxury fashion jewelry line. This project required that the final build be fluid, graceful and meet brand guidelines. 
                    <br><br>
                </p>                
            </div>
            <div class="text-center">
                <a href="http://lacy-jewelry-co.herokuapp.com" class="btn btn-primary" style="color: #fff;margin-top:25px;">See it in Action!</a>
            </div>
            <div>
                <div class="col-xs-12" style="padding-top:50px;">
                    <img src="<?php echo $imgPath.'/lacy/home.png' ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="" class="container-fluid" style="background-image: url('<?php echo $imgPath.'/media-mash/media-bg.jpg' ?>');background-size:cover;background-attachment: fixed;padding-top:100px;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <h1 class="text-center" style="text-transform: uppercase;color:#000;font-size:50px">Media Mash</h1>
            <br>
            <div class="col-xs-12" style="background:rgba(0, 0, 0, 0.8);padding-top: 30px;">
                <p class="text-center" style="color: #fff;">
                    Media Mash is a search one and done high quality free image search tool. 
                    <br>
                </p>
                <div class="text-center">
                    <a href="http://media-mash.michellemaltbia.com" class="btn btn-primary" style="color: #fff;margin-bottom:25px;">See it in Action!</a>
                </div>                
            </div>
            
            <div>
                <div class="col-xs-12" style="padding-top:50px;">
                    <img src="<?php echo $imgPath.'/media-mash/media1.png' ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lmd" class="container-fluid" style="padding-top:50px;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <object class="col-xs-4 col-xs-offset-4" width="50%" data="<?php echo $imgPath.'/lmd/logo.svg'?>" type="image/svg+xml"></object>
            <br>
            <div class="col-xs-12">
                <p class="text-center" style="color: #fff;">
                    Lauren Michelle Design is a full service brand development company. You can check out even more of my work here!
                    <br>
                </p>
                <div class="text-center">
                    <a href="http://laurenmichelledesign.com" class="btn btn-primary" style="color: #fff;margin-bottom:25px;">See it in Action!</a>
                </div>                
            </div>

            <div>
                <div class="col-xs-12" style="padding-top:50px;">
                    <img src="<?php echo $imgPath.'/lmd/main.png' ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bg" class="container-fluid" style="background-image: url('<?php echo $imgPath.'/bg/bg.jpg' ?>');background-size:cover;background-attachment: fixed;padding-top:100px;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <h1 class="text-center" style="text-transform: uppercase;color:#000;font-size:50px">Background Graphics API</h1>
            <br>
            <div class="col-xs-12">
                <p class="text-center" style="color: #333;">
                    I created this tool for easily updating the graphics API I built. It is the companion app to "Media Mash".
                    <br>
                </p>
                <div class="text-center">
                    <a href="http://laurenmichelledesign.com" class="btn btn-primary" style="color: #333;margin-bottom:25px;">See it in Action!</a>
                </div>                
            </div>

            <div>
                <div class="col-xs-12" style="padding-top:50px;">
                    <img src="<?php echo $imgPath.'/bg/main.png' ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div id="work" class="container-fluid" style="padding-top: 65px;padding-bottom: 65px;">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-12 col-sm-8">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/media-mash-main.png" width="100%" class="img-left">
            </div>
            <div class="col-xs-12 col-sm-4">
                <h1 style="text-transform: uppercase;color:#000;">Media Mash</h1>
                <a href="http://media-mash.michellemaltbia.com">www.media-mash.michellemaltbia.com</a>
                <h3>Unstock Image Search</h3>
                <h5>Technology: JavaScript/jQuery, Flickr API, HTML5/CSS3</h5>
                <br>
                <p>Media Mash is an unstock image search app that returns filtered data from the Flickr API.</p>
                
            </div>
        </div>
    </div>
</div>
-->

        <div class="row" style="padding-bottom: 80px;">
            <div class="col-xs-12 text-center" style="padding-bottom: 55px;">
                <br><br>
                <h1>Skills</h1>
            </div>
            <div class="col-xs-8 col-xs-offset-2 text-center" style="margin-top: -40px;">
                <p>
                    I'm constantly looking to expand my knowledge and stay up to date on new concepts, frameworks, libraries, and industry best practices
                </p>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center" >
                <li class="btn btn-skill">HTML5/CSS</li>
                <li class="btn btn-skill">JavaScript</li>
                <li class="btn btn-skill">jQuery</li>
                <li class="btn btn-skill">Wordpress</li>
                <li class="btn btn-skill">PHP</li>
                <li class="btn btn-skill">Angular</li>
                <li class="btn btn-skill">Ruby on Rails</li>
                <li class="btn btn-skill">MongoDB</li>
                <li class="btn btn-skill">SASS</li>
                <li class="btn btn-skill">REST API</li>
                <li class="btn btn-skill">Illustrator</li>
                <li class="btn btn-skill">Photoshop</li>
                <li class="btn btn-skill">Node.js</li>
                <li class="btn btn-skill">User Experience</li>
                <li class="btn btn-skill">SQL</li>
            </div>
        </div>
<!--
    </div>
</div>
-->
<div id="about" class="container-fluid gradient-bg" style="padding-top:20px; padding-bottom: 50px;">
    <div class="row">
        <div class="col-xs-12 text-center" style="padding-bottom: 35px; color: #fff;">
            <h1>Meet Michelle</h1> 
            <div class="col-xs-2 col-xs-offset-5">
                <div style="height: 10px; background: #fff;"></div> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <p style="color: #fff;">The crossover between design and programming has always been of interest to me. I am currently residing in the Bay Area where I have been lucky enough to work as a freelancer. </p>
            <br>
            <p style="color: #fff;">I have a wide range of skills that include design (Illustrator, Photoshop), front-end development (HTML5, CSS, JavaScript, Angular) and back-end development using open source technologies (Ruby on Rails, Node.js).</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="contact" class="col-xs-12 col-sm-6 col-sm-offset-3 text-center" style="padding-top: 55px;padding-bottom: 60px;">
            <h3>I'm looking to join a dev team full-time, but am also available for freelance projects - Get in touch!</h3>
            <br>
            <a href="mailto:hi@michellemaltbia.com" class="btn btn-primary">Send Me An Email</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>