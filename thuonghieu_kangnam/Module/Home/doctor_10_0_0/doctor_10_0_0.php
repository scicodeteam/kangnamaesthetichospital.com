<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/doctor_10_0_0'; 
?> 
<section class="doctor_10_0_0">
    <div class="container">
        <div class="doctor_10_0_0__box">
            <div class="item">
            <?php
                foreach($field['doctor_info2'] as $key => $value):
                    $data_img=$value['doctor_img'];
                    $data_dv=$value['doctor_dv'];
                    if($key == 0):
                    echo'
                        <div class="pic">
                            <img width="399" height="401" class="lazy" data-src="'.$data_img.'" alt="'.$data_dv.'">
                        </div>
                        <div class="cont">
                            '.$data_dv.'
                        </div>
                    ';
                    endif;
                endforeach;
                echo '
                    <script>
                        let img3 = [];
                        let cont3 = [];
                ';

                foreach($field['doctor_info2'] as $key => $value):
                    $data_img=$value['doctor_img'];
                    $data_dv=$value['doctor_dv'];
                    echo'
                        img3.push(`'.$data_img.'`);
                        cont3.push(`'.$data_dv.'`);
                    ';
                endforeach;

                echo'
                        let pic3 = document.querySelector(".doctor_10_0_0__box img");
                        let content3 = document.querySelector(".cont");
                        let random3;
                        let runSlide3 = setInterval(function () {
                            for (let i3 = 0; i3 < img3.length; i3++) {
                                random3 = Math.floor(Math.random() * img3.length);
                            }
                            pic3.setAttribute("src", img3[random3]);
                            content3.innerHTML = cont3[random3];
                        }, 3000);
                        setTimeout(runSlide3, 3000);
                    </script>
                ';
            ?>
            </div>
        </div>
        <div class="doctor_10_0_0__tabs">
        <?php
            foreach($field['doctor_info'] as $key2 => $value2):
                $data2 = explode("\n",$value2['content']);
                $des = $value2['about_des'];

                echo'
                    <div class="doctor_10_0_0__item modal-btn" data-modal="modalDoctor'.$key2.'">
                        <img width="188" height="188" class="lazy" data-src="'.$data2[0].'" alt="'.$data2[1].'">
                    </div>
                ';
            endforeach;
        ?>
        </div>
        <?php
            foreach($field['doctor_info'] as $key2 => $value2):
                $data2 = explode("\n",$value2['content']);
                $des = $value2['about_des'];
                
                $nameDoctor = $data2[1];

                if(!$nameDoctor){
                    $nameDoctor = 'Bác sĩ Kangnam';
                }

                if(!$des){
                    $des = 'Đang cập nhật thông tin ...';
                }
                
                echo '
                    <div class="modal" id="modalDoctor'.$key2.'">
                        <div class="modal-bg"></div>
                        <div class="modal-box animate-pop">
                            <div class="modal-header">
                                <div class="modal-close">×</div>
                                <div class="modal-title">'.$nameDoctor.'</div>
                            </div>
                            <div class="modal-body">
                                '.$des.'
                            </div>
                        </div>
                    </div>
                ';
            endforeach;
        ?>
    </div>
</section>