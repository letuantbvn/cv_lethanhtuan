<!-- head -->
<?php $this->load->view('admin/slide/head', $this->data)?>

<div class="line"></div>


<!--Form upload san pham-->
<div class="wrapper">
	<!-- Form -->
	<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/add.png" class="titleIcon">
					<h6>XEM THÔNG TIN CHI TIẾT SLIDE:  "<?php echo $slide->name?>" </h6>
				</div>
					<H5 style="color: #2e6b9b; margin-left:450px; margin-top: 10px; margin-bottom: 10px; font-size: 20px">THÔNG TIN CHUNG</H5>
				<hr>
				<div>
						<!-- Tên : Name-->
						<div class="formRow">
							<div class="view_product" style="font-size: 18px; color: #2e6b9b;margin-left: 10px;">
								<strong>TÊN SLIDE</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $slide->name?></p>
							<div class="clear"></div>
						</div>


						<!-- Link: Đường dẫn khi ấn vào slide tự chuyen tới bài viết -->
						<div class="formRow">
							<div class="view_product" style="font-size: 18px; color: #2e6b9b;">
								<strong>LINK LIÊN KẾT SLIDE</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $slide->link?></p>
								<div class="clear"></div>
						</div>

							<!-- image_link: Hình ảnh -->
						<div class="formRow">
							<label class="formLeft" style="font-size: 18px; color: #2e6b9b;margin-left:-15px;"><strong>HÌNH ẢNH SẢN PHẨM</strong></label>
							<br>
							<div class="formRight">
								<div class="left">
								<img src="<?php echo base_url('upload/slide/'.$slide->image_link)?>" style="width:100%;height:70%">
								</div>
								<div name="image_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
						</div>



						<!-- Mô tả slide : info-->
						<div class="formRow">
							<div class="view_product" style="font-size: 18px; color: #2e6b9b; margin-left:-15px;">
									<strong>MÔ TẢ SLIDE</strong>
									<p style="font-size: 16px; color: #e74c3c;"><?php echo $slide->info?></p>
							<div class="clear"></div>
						</div>

						<!-- Thứ tự slide : Sort_order-->
						<div class="formRow">
							<div class="view_product" style="font-size: 18px; color: #2e6b9b;margin-left:-30px;">
								<strong>THỨ TỰ SLIDE</strong>
								<p style="font-size: 20px; color: #e74c3c; margin-left: 15px"><?php echo $slide->sort_order?></p>
								<div class="clear"></div>
						</div>
						</div>
			</div>
						</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>

