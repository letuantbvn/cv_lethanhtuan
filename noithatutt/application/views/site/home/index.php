<?php $this->load->view('site/slide', $this->data);?>

<!-- Danh muc hien thi san pham mới nhất - 3 sản phẩm mới nhất-->
<div class="box-center"><!-- The box-center product-->
	<div class="tittle-box-center">
		<h2 style="font-size: 16px; color: #337ab8; margin-top:6px">SẢN PHẨM MỚI</h2>
	</div>

	<div class="box-content-center product">
		<!-- The box-content-center -->
		<?php foreach ($product_newest as $row):?>
			<div class="product_item">
				<h3>
					<a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
						<?php echo $row->name?>
					</a>
				</h3>
				<div class="product_img">
					<a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
						<img alt="<?php echo $row->name?>" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
					</a>
				</div>

				<p class="price">
					<?php if($row->discount > 0):?>
						<?php $price_new = $row->price - $row->discount;?>
						<?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
					<?php else:?>
						<?php echo number_format($row->price)?> đ
					<?php endif;?>
				</p>

				<!-- Đánh giá sao -->
				<center>
					<div class='raty' style='margin:10px 0px' id='<?php echo $row->id?>' data-score='<?php echo  ($row->rate_count > 0) ? $row->rate_total/$row->rate_count : 0?>'></div>
				</center>

				<div class="action">
					<p style="float:left;margin-left:10px">Lượt xem: <b><?php echo $row->view?></b></p>
					<a title="Chi tiết" href="<?php echo base_url('product/view/'.$row->id)?>" class="button">Chi tiết</a>
					<div class="clear"></div>
				</div>
			</div>
		<?php endforeach;?>



		<div class="clear"></div>
	</div><!-- End box-content-center -->


	<!-- Danh muc hien thi san pham mua nhiều nhất - 3 sản phẩm san pham mua nhiều nhất-->
	<div class="box-center" style="margin-top: 50px"><!-- The box-center product-->
		<div class="tittle-box-center">
			<h2 style="font-size: 16px; color: #337ab8; margin-top:6px">SẢN PHẨM MUA NHIỀU NHẤT</h2>
		</div>
		<div class="box-content-center product"><!-- The box-content-center -->
			<?php foreach ($product_buy as $row):?>
				<div class="product_item">
					<h3>
						<a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
							<?php echo $row->name?>
						</a>
					</h3>
					<div class="product_img">
						<a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
							<img alt="<?php echo $row->name?>" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
						</a>
					</div>

					<p class="price">
						<?php if($row->discount > 0):?>
							<?php $price_new = $row->price - $row->discount;?>
							<?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
						<?php else:?>
							<?php echo number_format($row->price)?> đ
						<?php endif;?>
					</p>

					<center>
						<div class='raty' style='margin:10px 0px' id='<?php echo $row->id?>' data-score='<?php echo  ($row->rate_count > 0) ? $row->rate_total/$row->rate_count : 0?>'></div>
					</center>

					<div class="action">
						<p style="float:left;margin-left:10px">Lượt mua: <b><?php echo $row->buyed?></b></p>
						<a title="Chi tiết" href="<?php echo base_url('product/view/'.$row->id)?>" class="button">Chi tiết</a>
						<div class="clear"></div>
					</div>
				</div>
			<?php endforeach;?>


			<div class="clear"></div>
		</div><!-- End box-content-center -->
	</div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			xfbml            : true,
			version          : 'v3.3'
		});
	};

	(function(d, s, id)
	{
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id))
			return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
	 attribution=setup_tool
	 page_id="982347035195111"
	 theme_color="#ff7e29"
	 logged_in_greeting="Chào mừng quý bạn "
	 logged_out_greeting="Chào mừng quý bạn ">
</div>
