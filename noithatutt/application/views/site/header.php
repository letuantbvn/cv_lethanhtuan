<!-- The box-header-->
	<link type="text/css" href="<?php echo public_url()?>js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo public_url()?>js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$( "#text-search" ).autocomplete({
				source: "product/search_ac.html",
			});
		});
	</script>
	<div class="top"><!-- The top -->
		<div id="logo"><!-- the logo -->
			<a href="" title="Nội Thất Cao Cấp UTT">
				<img src="<?php echo public_url()?>site/images/logo.png" alt="Nội thất cao cấp UTT" style="padding-top: 15px">
			</a>
		</div><!-- End logo -->
		
		<!--  load gio hàng -->
		<div class="cart" id="cart_expand">
			<a class="cart_link" href="<?php echo base_url('cart')?>" style=" font-size: 13px; font-family:Roboto">
				<b>Giỏ hàng <span id="in_cart"><?php echo $total_items?></span> sản phẩm</b>
			</a>
			<img alt="cart bnc"  src="<?php echo public_url()?>site/images/cart.png"
			<a href="https://www.facebook.com/clblaptrinhvietnam" title="Facebook"><img src="<?php echo public_url()?>site/images/icon-fb.png" alt="facebook"></a>
			<a href="http://bit.ly/TIPPC" title="Youtube"><img src="<?php echo public_url()?>site/images/icon-youtube.png" alt="Youtube"></a>
			<a href="https://www.twitter.com/letuantbvn9x" title="Twitter"><img src="<?php echo public_url()?>site/images/icon-twitter.png" alt="twitter"></a>
		</div>
		<div id="search"><!-- the search -->
			<form action="<?php echo site_url('product/search')?>" method="get">
				<input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
				<input type="submit" value="" name="but" id="but">
			</form>
			<br>
			<br>
			<div style="font-size: 20px; margin-left: 50px">
				<script type="text/javascript">
					farbbibliothek = new Array();
					farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");
					farbbibliothek[1] = new Array("#00FF00","#000000","#00FF00","#00FF00");
					farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00");
					farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");
					farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");
					farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF");
					farbbibliothek[6] = new Array("#0000FF","#FFFF00");
					farben = farbbibliothek[4];
					function farbschrift(){for(var b=0;b<Buchstabe.length;b++){document.all["a"+b].style.color=farben[b]}farbverlauf()}function string2array(b){Buchstabe=new Array();while(farben.length<b.length){farben=farben.concat(farben)}k=0;while(k<=b.length){Buchstabe[k]=b.charAt(k);k++}}function divserzeugen(){for(var b=0;b<Buchstabe.length;b++){document.write("<span id='a"+b+"' class='a"+b+"'>"+Buchstabe[b]+"</span>")}farbschrift()}var a=1;function farbverlauf(){for(var b=0;b<farben.length;b++){farben[b-1]=farben[b]}farben[farben.length-1]=farben[-1];setTimeout("farbschrift()",30)}var farbsatz=1;function farbtauscher(){farben=farbbibliothek[farbsatz];while(farben.length<text.length){farben=farben.concat(farben)}farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001))}setInterval("farbtauscher()",5000);

					text= "SÁNG KHÔNG GIAN - SANG NHÀ BẠN"; //h
					string2array(text);
					divserzeugen();
					//document.write(text);
				</script>
				</div>
		</div><!-- End search -->



		<div class="clear"></div><!-- clear float -->
	</div><!-- End top -->
<!-- End box-header  -->

	<!-- The box-header-->
	<div id="menu"><!-- the menu -->
		<ul class="menu_top">
			<li class="active index-li"><a href="http://noithatutt.vn/">TRANG CHỦ </a></li>
			<li class=""><a href="http://noithatutt.vn/san-pham">SẢN PHẨM </a></li>
			<li class=""><a href="http://noithatutt.vn/tin-tuc">TIN TỨC</a></li>
			<li class=""><a href="http://noithatutt.vn/hoi-dap">HỎI - ĐÁP</a></li>
			<?php if(isset($user_info)):?>
				<li class=""><a href="<?php echo site_url('user')?>">Xin chào: <?php echo $user_info->name?></a></li>
				<li class="">
					<a type="button" href="<?php echo site_url('user/logout')?>">ĐĂNG XUẤT</a>
				</li>
			<?php else:?>
				<li class=""><a href="http://noithatutt.vn/dang-ky">ĐĂNG KÝ</a></li>
				<li class=""><a href="http://noithatutt.vn/dang-nhap">ĐĂNG NHẬP</a></li>
			<?php endif;?>
			<li class=""><a href="http://noithatutt.vn/admin">QUẢN TRỊ</a></li>

		</ul>
	</div><!-- End menu -->
	<!-- End box-header  -->
