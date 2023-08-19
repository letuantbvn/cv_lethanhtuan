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
					<h6>CẬP NHẬT THÔNG TIN SILDE : "<?php echo $slide->name?>" </h6>
				</div>
					<ul class="tabs">
						<li><a href="#tab1" style="font-size: 15px;">Thông tin chung</a></li>
					</ul>

				<div class="tab_container">
					<div id="tab1" class="tab_content pd0">

						<!-- Tên : Name-->
						<div class="formRow">
							<label class="formLeft" for="param_name">Tên silde:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input type="text" _autocheck="true" id="param_name" value="<?php echo $slide->name?>" name="name">
								</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<!-- Link: Đường dẫn khi ấn vào slide tự chuyen tới bài viết -->
						<div class="formRow">
							<label class="formLeft" for="param_name">Link:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="link" id="param_link" _autocheck="true" type="text" value="<?php echo $slide->link?>"</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- image_link: Hình ảnh -->
						<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
							<div class="formRight">
								<div class="left">
									<input type="file" id="image" name="image" size="30">
									<img src="<?php echo base_url('upload/slide/'.$slide->image_link)?>" style="width:100px;height:70px">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Mô tả slide : info-->
						<div class="formRow">
							<label class="formLeft" for="param_name">Mô tả slide:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="info" id="param_info" _autocheck="true" type="text" value="<?php echo $slide->info?>"></span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Thứ tự slide : Sort_order-->
						<div class="formRow">
							<label class="formLeft" for="param_name">Thứ tự hiện thị: </label>
							<div class="formRight">
								<span class="oneTwo"><input name="sort_order" id="param_sort_order" _autocheck="true" type="text" value="<?php echo $slide->sort_order?>"></span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<div class="formRow hide"></div>
					</div>

				</div>
				<!-- End tab_container-->
				<div class="formSubmit">
					<input type="submit" value="Cập nhật" class="redB">
					<input type="reset" value="Hủy bỏ" class="basic">
				</div>
				<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>

