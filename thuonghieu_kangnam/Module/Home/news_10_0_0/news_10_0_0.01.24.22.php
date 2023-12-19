<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/news_10_0_0'; 
    if($check == 0){
        include(locate_template("Module/Home/news_10_0_0/css/news_10_0_0_css.php"));           
    }
?>
<section class="news_10_0_0">
    <div class="container">
        <div class="news_10_0_0__title">
            TIN TỨC MỚI NHẤT
        </div>
        <div class="news_10_0_0__box">
        <?php
            $args = array(
                'post_status' => 'publish',
                'showposts' => 0,
                'orderby' => 'desc',
                'category__not_in' => array( 150 ),
            );
            $getposts = new WP_query($args); 
            $num = 0; 
            while ($getposts->have_posts() && $num < 3) : 
                $num++;
                $getposts->the_post(); 
                $link = get_permalink();
                $title = get_the_title();
                $img = get_the_post_thumbnail_url();
                $time = get_the_date('d/m/Y');
                $excerpt = wp_trim_words( get_the_excerpt(), 15 );
                echo'
                    <a class="news_10_0_0__item" href="'.$link.'">
                        <div class="news_10_0_0__pic">
                            <img width="355" height="355" class="lazy" data-src="'.$img.'" alt="'.$title.'">
                        </div>
                        <div class="news_10_0_0__ct">
                            <h3 class="news_10_0_0__intro">
                                '.$title.'
                            </h3>
                            <div class="news_10_0_0__des">
                                '.$excerpt.'
                            </div>
                        </div>
                    </a>
                ';
            endwhile; wp_reset_postdata(); 
        // foreach($field['content1'] as $key => $post):
        //     setup_postdata($post);
        //     $des = get_the_excerpt($post->ID);
        //     $link = get_permalink();
        //     $title = get_the_title();
        //     $img = get_the_post_thumbnail_url();
        //     $excerpt = wp_trim_words( get_the_excerpt(), 15 );
        //     if($key < 3):
        //     echo'
                // <div class="news_10_0_0__item">
                //     <a href="'.$link.'">
                //         <img class="lazy" data-src="/rs/?w=295&h=295&src='.$img.'" alt="'.$title.'">
                //         <div class="news_10_0_0__ct">
                //             <div class="news_10_0_0__intro">
                //                 <a href="'.$link.'">'.$title.'</a>
                //             </div>
                //             <div class="news_10_0_0__des">
                //                 '.$excerpt.'
                //             </div>
                //         </div>
                //     </a>
                // </div>
        //     ';
        //     endif;
        // endforeach;
        // wp_reset_postdata(); 
        ?>
        </div>
    </div>
</section>


