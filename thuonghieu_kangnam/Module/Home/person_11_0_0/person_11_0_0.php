<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/person_11_0_0'; 
?> 

<div class="person_11_0_0">
    <div class="container">
        <div class="person_11_0_0_box">
        <?php
            foreach($field['person_info'] as $key => $val):
                $data2=explode("\n",$val['content2']);
                echo'
                <div>
                    <div class="person_11_0_0__item">
                        <img width="360" height="517" class="lazy" data-src="'.$data2[1].'" alt="'.$data2[2].'">
                        <div class="person_11_0_0__itemten">
                            '.$data2[2].'
                            <p>'.$data2[3].'</p>
                        </div>
                    </div>
                </div>
                ';
            endforeach
            ?>
        </div>
    </div>
</div>