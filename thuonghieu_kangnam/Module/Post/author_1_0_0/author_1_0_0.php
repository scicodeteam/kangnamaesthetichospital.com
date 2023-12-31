<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/author_1_0_0';
    $author_id = get_post_field ('post_author', $cause_id);
	$display_name = get_the_author_meta( 'display_name' , $author_id ); 
    $avatar = get_avatar( get_the_author_meta('user_email') , 90 ) ;
    $author_field = get_field('author_info', 'user_'. $author_id );
?>
<style>
.author_1_0_0{background-image:url(<?php echo $path ?>/images/bg-profile.jpg);background-repeat:no-repeat}
.author_1_0_0__profile{display:flex;align-items:center;gap:20px;padding-top:30px}
.author_1_0_0__image{width:20%}
.author_1_0_0__image img{width:100%;height:auto}
.author_1_0_0__name{font-size:22px;font-weight:600;margin:0;color:#000}
.author_1_0_0__info{display:flex;gap:20px;width:100%;margin-top:20px}
.author_1_0_0__box{max-width:50%;width:100%}
.author_1_0_0__item{margin-bottom:15px;border:1px solid #f1f1f1;border-radius:4px;overflow:hidden;box-shadow:0 0 2px 0 #e7e7e7}
.author_1_0_0__btn{background-color:#fff;font-size:17px;font-weight:600;margin:0;color:#000;position:relative;border-bottom:1px solid #f1f1f1}
.author_1_0_0__btn.active{background-color:#fff;border-bottom:none}
.author_1_0_0__btn img{width:20px;height:auto;position:absolute;top:50%;transform:translateY(-50%)}
.author_1_0_0__btn span{padding-left:30px}
.author_1_0_0__content{padding:0}
.author_1_0_0__content>p{margin:15px 0;padding:0 20px}
.author_1_0_0__content ul{margin:0;padding:0;list-style:none}
.author_1_0_0__content ul li{padding:10px 20px}
.author_1_0_0__content ul li:not(:last-child){border-bottom:1px solid #f1f1f1}
.author_1_0_0__news{display:flex;align-items:center;gap:10px;padding:10px;transition:.3s all}
.author_1_0_0__news img{width:10%;height:auto;-o-object-fit:cover;object-fit:cover}
.author_1_0_0__news p{flex:1;margin:0}
.author_1_0_0__news:not(:last-child){border-bottom:1px solid #f1f1f1}
.author_1_0_0__news:hover{background-color:#eee}
.author_1_0_0__more{background-color:rgba(0,0,0,0);border:none;float:right;font-style:italic;font-weight:500;text-decoration:underline;padding:0 25px 10px 0;cursor:pointer}
@media(max-width: 767px) {
.author_1_0_0__image{width:40%}
.author_1_0_0__name p{font-size:20px}
.author_1_0_0__info{flex-direction:column}
.author_1_0_0__box{max-width:100%;width:100%}
}
</style>
<section class="author_1_0_0">
    <div class="author_1_0_0__profile">
        <div class="author_1_0_0__image">
            <?php echo $avatar ?>
        </div>
        <h1 class="author_1_0_0__name"><?php echo $display_name ?></h1>
    </div>
    <div class="author_1_0_0__info"></div>
</section>