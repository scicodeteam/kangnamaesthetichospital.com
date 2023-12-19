<?php
    include(locate_template("Module/Post/post_1_1_0/css/post_1_1_0_css.php"));
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <!-- Breadcrumb -->
            <?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
            
            <!-- Post Main -->
            <div class="post_1_1_0">		
                <div class="post_1_1_0__content">
                    <h1 class="post_1_1_0__title"><?php the_title(); ?></h1>

                    <?php 
                        $sapo = get_field('sapo',$post->ID);
                        if($sapo != ''){
                        echo '<div class="sapo">'.$sapo.'</div>';
                        }
                    ?>

                    <div class="post_1_1_0__detail scroll_check">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>

                    <div style="text-align:right;padding:10px 20px; display:none">
                        <?php include(locate_template('templates/like_view/like_view.php')); ?>
                    </div>
                    <br/>
                    
                </div>
            </div>


        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

