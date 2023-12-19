<style>
	.search_1_0_0 {
		margin: 20px 0 40px
	}

	.search_1_0_0__title {
		margin: 10px 0;
		font-size: 18px;
		font-weight: 700;
		color: #f26649;
		text-transform: uppercase
	}

	.search_1_0_0__info {
		font-size: 14px;
		font-style: italic;
		text-align: justify
	}

	.search_1_0_0__info b {
		color: #f26649
	}
	.cate_1_0_0__box{
		display:none!important;
	}

	@media (max-width: 414px) {
		.search_1_0_0 {
			margin: 20px 0
		}
	}

	
</style>

<div class="search_1_0_0">
	<h1 class="search_1_0_0__title">Bạn đang tìm kiếm với từ khóa <b><?php echo(get_search_query());?></b></h1>
	<div class="search_1_0_0__info">
		<p>
			Kết quả tìm được với từ khóa <b style="color:#f26649"><?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e('</b> có <b style="color:#f26649">'); echo $count . ' '; _e('</b> bài viết'); wp_reset_query(); ?>
		</p>
	</div>					
</div>
