<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
    	<!-- HEADER -->
    	<?php get_header(); ?>
    </head>

    <body <?php body_class(); ?> >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- MAIN MENU -->
        <?php get_template_part('main_menu'); ?>

        <!-- GET THE CONTENTS -->
        <?php get_template_part('loop'); ?>

        <!-- SIDEBAR -->
        <?php get_sidebar('sidebar1'); ?>

        <!-- FOOTER -->
        <?php get_footer(); ?>

    </body>
</html>
