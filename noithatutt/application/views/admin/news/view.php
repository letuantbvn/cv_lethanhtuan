<!-- head -->
<?php $this->load->view('admin/news/head', $this->data)?>

<div class="line"></div>


<!--Form upload san pham-->
<div class="wrapper">
	<!-- Form -->
	<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/add.png" class="titleIcon">
					<h6>XEM THÔNG TIN BÀI VIẾT</h6>
				</div>
				<ul class="tabs">
					<li><a href="#tab1"  style="font-size: 15px;">Thông tin chung</a></li>
					<li><a href="#tab2"  style="font-size: 15px;">Bài viết</a></li>
				</ul>
				<div class="tab_container">
					<div id="tab1" class="tab_content pd0">

						<!-- Tên : Name-->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px; color: #2e6b9b;">
								<strong>TÊN BÀI VIẾT</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $news->title?></p>
							</div>
							<div class="clear"></div>
						</div>

						<!-- image_link: Hình ảnh -->
						<div class="formRow">
							<label class="formLeft" style="font-size: 20px; color: #2e6b9b;"><strong>HÌNH ẢNH BÀI VIẾT</strong></label>
							<br>
							<div class="formRight">
								<div class="left">
									<img src="<?php echo base_url('upload/news/'.$news->image_link)?>" style="width:50%;height:30%">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div id="tab2" class="tab_content pd0">
						<div class="formRow" >
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>CHI TIẾT BÀI VIẾT:</strong>
								<p style="font-size:14px; color: #219eff;text-align: center"><?php echo $news->content?></p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>

