<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/video_12_0_0'; 
?> 
<section class="video_12_0_0">
    <div class="container">
        <?php 
        $data=explode("\n",$field['title']);
        echo'
        <div class="video_12_0_0__title">
            '.$data[0].'
        </div>';
        ?>
        <div class="video_12_0_0__box">
            <div class="video_12_0_0__video1">
            <?php
                foreach($field['video_info'] as $key => $value):
                    $data=explode("\n",$value['video_info_ct']);
                    if($key==0):
                        echo'
                            <div class="item1 modal-clip" data-video="'.$data[2].'">
                                <div class="pic">
                                    <img width="611" height="371" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
                                </div>
                                <div class="desc">
                                    '.$data[1].'
                                </div>
                            </div>
                        ';
                    endif;
                endforeach;
                echo'
                </div>';
                
            ?>
             <?php
             echo'
            <div class="video_12_0_0__video2">';
                foreach($field['video_info'] as $key => $value):
                    $data=explode("\n",$value['video_info_ct']);
                    if($key > 0):
                        echo'
                        <div class="item2 modal-clip" data-video="'.$data[2].'">
                            <div class="pic pic2">
                                <img width="205" height="115" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
                                <div class="desc">
                                    '.$data[1].'
                                </div>
                            </div>
                            <div class="desc2">
                                '.$data[3].'
                            </div>
                        </div>
                        ';
                    endif;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>