<?php /* Template Name: Dang Ky Thanh Cong */ ?>
<?php get_header(); ?>

<div class="regist">
	<picture>
		<source media="(max-width:414px)" srcset="<?php echo get_template_directory_uri(); ?>/Module/media/dang-ky-tc-mb.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/Module/media/dang-ky-tc.jpg">
	</picture>
</div>
	
<?php get_footer(); ?>
<script>
	setTimeout(function(){
        window.location.href = '/'  ;
    },5000);	
</script>
<style>
	body{
		padding-top:42px;
	}
	.regist img{
		max-width:100%;
		display:block;
		margin:0 auto;
	}
</style>


<style>
	#comments {
		display: none !important;
	}
</style>