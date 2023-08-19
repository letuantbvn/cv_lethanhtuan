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
					<h6>CẬP NHẬT THÔNG TIN BÀI VIẾT</h6>
				</div>
				<ul class="tabs">
					<li><a href="#tab1">Thông tin chung</a></li>
					<li><a href="#tab2">SEO ON Page- Quảng Cáo</a></li>
					<li><a href="#tab3">Bài viết</a></li>
				</ul>
				<div class="tab_container">
					<div id="tab1" class="tab_content pd0">

						<!-- Tên : Name-->
						<div class="formRow">
							<label class="formLeft" for="param_name">Tiêu đề bài viết:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input type="text" _autocheck="true" id="param_title" value="<?php echo $news->title?>" name="title">
								</span>
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
									<img src="<?php echo base_url('upload/news/'.$news->image_link)?>" style="width:100px;height:70px">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>
					<!--site_title:Tiêu đề trang web:Title -->
					<div id="tab2" class="tab_content pd0">
						<!--meta_desc: Mô tả ngắn gọn về nội dung bài viết:  Meta description-->
						<div class="formRow">
							<label class="formLeft" for="param_meta_desc">Mô tả ngắn:</label>
							<div class="formRight">
								<span class="oneTwo">
									<textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"><?php echo $news->meta_desc?></textarea>
								</span>
								<span name="meta_desc_autocheck" class="autocheck"></span>
								<div name="meta_desc_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!--meta_key:Meta keywords: Mô tả từ khóa và chủ đề mà một trang web thể hiện, truyền tải.-->
						<div class="formRow">
							<label class="formLeft" for="param_meta_key">Từ khóa:</label>
							<div class="formRight">
								<span class="oneTwo">
									<textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"><?php echo $news->meta_key?></textarea>
								</span>
								<span name="meta_key_autocheck" class="autocheck"></span>
								<div name="meta_key_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!--content: Nội dung sản phẩm mô tả chi tiết sản phẩm-->
						<div class="formRow hide"></div>
					</div>
					<div id="tab3" class="tab_content pd0">
						<div class="formRow">
							<label class="formLeft">Nội dung:</label>
							<div class="formRight">
								<textarea class="editor" id="param_content" name="content"><?php echo $news->content?></textarea>
								<div name="content_error" class="clear error"></div>
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

