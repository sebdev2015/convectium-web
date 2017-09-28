<?php
/**
* Template name: Contact Us
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package kultivatemedia
*/

 define( 'WP_USE_THEMES', false ); get_header(); ?>




<header class="masthead">
<div class="header-content">
<div class="header-content-inner">
<h2 id="homeHeading" style="font-weight:bold;">GET IN TOUCH</h2>
<hr>
<h5 style="font-weight:bold; text-transform:uppercase; margin-bottom:60px;">Give us a call or send us an email and we will get back to you as soon as possible! We love to help our clients find the right solution!</h5>
</div>
</div>
</header>





<div class="content-area container">

 <section id="contact">
      <div class="container">

        <div class="row">


         <div class="col-md-6  ml-auto text-center">
            <?php echo do_shortcode( '[contact-form-7 id="14411" title="Contact form 1"]' ); ?>
         </div>



        <div class="col-md-6 c-contact-info mr-auto text-center">
            <div class=" text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>
                    <a href="tel:1-800-605-3580">800-605-3580</a>
                </p>
            </div>
               <hr class="primary">
            <div class=" text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p>
                  <a href="mailto:info@convectium.com">info@convectium.com</a>
                </p>
            </div>
    <hr class="primary">
             <div class=" text-center">
                    <i class="fa fa-map fa-3x" aria-hidden="true"></i>

                  <div style="margin-top:10px;"><a href="https://www.google.com/maps/place/30191+Avenida+De+Las+Banderas,+Rancho+Santa+Margarita,+CA+92688/@33.6342682,-117.6056251,17z/data=!3m1!4b1!4m5!3m4!1s0x80dceba4123f4d27:0xe5866de83de693d1!8m2!3d33.6342682!4d-117.6034364" target="_blank"><span style="font-size:15px;">CONVECTIUM USA </span><br/> 30191 Avenida De Las Banderas #B</br>
                  Rancho Santa Margarita, CA 92688</a></div>

                    <div style="margin-top:10px; font-size:14px!important;"><span style="font-size:15px;">CONVECTIUM CHINA </span><br/>1701 Rongchao Binhai Building #A, </br>
                                    Haixiu Road 2021, Baoan District,<br/>
                                    Shenzhen, China</div>

            </div>


        </div>



        </div>
      </div>
    </section>


</div>






<?php get_footer();