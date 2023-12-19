<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
            
            <div class="post_1_0_0">		
                    <?php get_template_part('Module/module_advPost'); ?>
                    
                    <h1 class="post_1_0_0__title"><?php the_title(); ?></h1>

                    <?php include(locate_template('Module/Post/post_author_1_0_0/post_author_1_0_0.php')); ?>
                    <?php 
                        $sapo = get_field('sapo',$post->ID);
                        if($sapo != ''){
                        echo '<div class="sapo">'.$sapo.'</div>';
                        }
                    ?>

                    <div class="post_1_0_0__detail scroll_check">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>

                    <br/>
                    <?php get_template_part('Module/Post/tool_info_2_0_0/tool_info_2_0_0'); ?>

                    <?php get_template_part('Module/module_advPost'); ?>

                    <?php get_template_part('Module/Post/postOther_mz_1_0_0/postOther_mz_1_0_0'); ?>
            </div>
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>