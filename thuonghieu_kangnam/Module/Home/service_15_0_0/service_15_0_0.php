<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/service_15_0_0'; 
?> 
<section class="service_15_0_0">
    <div class="container">
        <div class="service_15_0_0__box">
            <div class="service_15_0_0__box2">
                <?php
                    foreach($field['service_info2'] as $key => $value):
                        $data_img=$value['serive_img'];
                        $data_dv=$value['serive_dv'];
                        $data_ct=$value['serive_cont'];
                        if($key == 0):
                        echo'
                        <div class="service_15_0_0__pic">
                            <img width="456" height="457" alt="'.$data_dv.'" class="lazy" data-src="'.$data_img.'">
                        </div>
                        <div class="service_15_0_0__box3">
                            <div class="service_15_0_0__title3">
                                '.$data_dv.'
                            </div>
                            <div class="service_15_0_0__text">
                                '.$data_ct.'
                            </div>
                        </div>
                        ';
                        endif;
                    endforeach;
                    echo '<script>
                    let img2 = [];
                    let title2 = [];
                    let des2 = [];';
                    foreach($field['service_info2'] as $key => $value):
                        $data_img=$value['serive_img'];
                        $data_dv=$value['serive_dv'];
                        $data_ct=$value['serive_cont'];
                        echo'
                        img2.push("'.$data_img.'");
                        title2.push("'.$data_dv.'");
                        des2.push("'.$data_ct.'");
                        ';
                    endforeach;
                    echo'
                        let pic2 = document.querySelector(".service_15_0_0__box2 img");
                        let tieude2 = document.querySelector(".service_15_0_0__title3");
                        let mota2 = document.querySelector(".service_15_0_0__text");
                        let random2;
                        let runSlide2 = setInterval(function () {
                            for (let i2 = 0; i2 < img2.length; i2++) {
                                random2 = Math.floor(Math.random() * img2.length);
                            }
                            pic2.setAttribute("src", img2[random2]);
                            tieude2.innerHTML = title2[random2];
                            mota2.innerHTML = des2[random2];
                        }, 5000);
                        setTimeout(runSlide2, 10000);
                    </script>
                    ';
                ?>
            </div>
            <div class="service_15_0_0__boxCt">
                <div class="service_15_0_0__title"> <?php echo $field['service_title'] ?></div>
                <div class="service_15_0_0__box1">
                    <?php
                        foreach($field['service_info'] as $key => $value):
                            $data2 = explode("\n",$value['title']);
                            echo'
                                <div class="service_15_0_0__item">
                                    <a href="'.$data2[2].'">
                                        <img width="164" height="174" src="'.$data2[0].'" alt="'.$data2[1].'">
                                        <h2 class="service_15_0_0__content">'.$data2[1].'</h2>
                                    </a>
                                </div>
                            ';
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>