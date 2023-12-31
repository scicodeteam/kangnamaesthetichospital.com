<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module/Popup/popup_search_1_0_0';
?>
<style>
	a {
		text-decoration: none
	}

	.popupSearch_1_0_0__title {
		text-align: center;
		color: #004689;
		text-transform: uppercase;
		font-weight: 600;
		font-size: 20px
	}

	.popupSearch_1_0_0__search {
		width: 90%;
		margin: 20px auto;
		position: relative
	}

	.popupSearch_1_0_0__search input {
		width: 100%;
		padding: 5px 40px 5px 10px;
		border-radius: 4px;
		border: 1px solid #248de8;
		background: #f2f8fd
	}

	.popupSearch_1_0_0__search button {
		position: absolute;
		top: 0;
		right: 0;
		height: 100%;
		background: #248de8;
		border: none;
		width: 38px;
		border-radius: 0 4px 4px 0;
		color: #fff;
		cursor: pointer;
		padding-top:6px;
	}

	/*# sourceMappingURL=../maps/popupSearch.css.map */
</style>

<div class="modal popupSearch_1_0_0" id="search" style="display:none;">
	<div class="modal-bg"></div>
	<div class="modal-box animate-zoom">
		<div class="modal-header">
			<div class="modal-close">×</div>
			<div class="popupSearch_1_0_0__title">Tìm Kiếm Nhanh</div>
		</div>
		<div class="modal-body">
			<form action="/" id="searchform" name="searchform" method="get" onsubmit="return checkSearch()">	
				<div class="popupSearch_1_0_0__search">
					<input id="s" name="s" type="text" placeholder="Nhập từ khóa tìm kiếm">
					<button type="submit"><i class="icon-search"><img  width="20" height="20" src="<?php echo $path ?>/images/search.svg" alt="search"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
function checkSearch() {
	var x = document.forms["searchform"]["s"].value;
	regex = /[\!\@\#\$\%\^\&\*\)\(\+\=\.\<\>\{\}\[\]\:\;\'\"\|\~\`\_\-]/g;
	console.log(x);
		if  (x=="" || regex.test(x))  {
			alert("Vui lòng nhập từ khóa cần tìm !");
			return false;
		}
	// var x = document.forms["searchform"]["s"].value;
	// if (x == "") {
	// 	alert("Vui lòng nhập từ khóa cần tìm !");
	// 	return false;
	// }
}
</script>
