<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/person_12_0_0'; 
?> 
<section class="person_12_0_0">
    <div class="person_12_0_0__pic">
    <?php 
        $data=explode("\n",$field['content2']);
        echo'
            <picture>
                <source media="(min-width:480px)" srcset="'.$data[0].'">
                <img width="1440" height="727" class="lazy" data-src="'.$data[0].'" alt="Khách hàng đã điều trị thành công">
            </picture>
        ';
    ?>
    </div>
    <div class="person_12_0_0__cont">
        <span class="real__border type-top">top</span>
        <span class="real__border type-left">left</span>
        <span class="real__border type-bottom">bottom</span>
        <span class="real__border type-right">right</span>
        <?php 
            $data=explode("\n",$field['content2']);
            echo'
                <img width="473" height="215" class="lazy" data-src="'.$data[1].'" alt="Khách hàng đến với Kangnam">
            ';
        ?>
    </div>
</section>