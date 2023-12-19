<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/post_author_1_0_0';
?>

<div class="post_author_1_0_0">
    <ul class="post_author_1_0_0__navg">
        <li class="post_author_1_0_0__Date">
            <div class="post_author_1_0_0__iconDate"></div>
            <p><?php echo get_post_modified_time('d/m/Y'); ?></p>
        </li>
        <li class="post_author_1_0_0__Person">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconPerson"></div>
            <p>Tác giả:<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php echo get_the_author() ?></a></p>
        </li>
        <?php 
            $doctor = get_field('doctor');
            $title = $doctor->post_title;
            $link = '/'.$doctor->post_type.'/'.$doctor->post_name;
            if($title){
                echo '
                    <li class="post_author_1_0_0__Person">
                        <div class="symp"> *</div>
                        <div class="post_author_1_0_0__iconPerson"></div>
                        <p>Tham vấn y khoa: <a href="'.$link.'">'.$title.'</a></p>
                    </li>
                ';
            }
        ?>
       
        <!-- <li class="post_author_1_0_0__Doctor">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconDoctor"></div>
            <p>Tham vấn y khoa: <a rel="nofollow" href="/doi-ngu-bac-si/"> Chuyên gia thẩm mỹ Kangnam</a></p>
        </li> -->
        <!-- <li class="post_author_1_0_0__View">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconview"></div>
            <?php
                $pageview = get_post_meta(get_the_ID(),'pageview',true);
                if($pageview =="") $pageview ="0";
                $pageview = (int)$pageview +1;
                update_post_meta( get_the_ID(), 'pageview', $pageview );
            ?>
            <p><?php echo $pageview ?> lượt xem</p>
        </li> -->
    </ul>
    <div class="line"></div>
</div>