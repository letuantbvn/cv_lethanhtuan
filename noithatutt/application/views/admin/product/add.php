<!-- head -->
<?php $this->load->view('admin/product/head', $this->data)?>

<div class="line"></div>


<!--Form upload san pham-->
<div class="wrapper">
	<!-- Form -->
	<form class="form" id="form" action="<?php echo admin_url('product/add')?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/add.png" class="titleIcon">
					<h6>THÊM SẢN PHẨM MỚI</h6>
				</div>
				<ul class="tabs">
					<li><a href="#tab1" style="font-size: 15px;">Thông tin chung</a></li>
					<li><a href="#tab2" style="font-size: 15px;">SEO ON Page- Quảng Cáo</a></li>
					<li><a href="#tab3" style="font-size: 15px;">Bài viết</a></li>
				</ul>
				<div class="tab_container">
					<div id="tab1" class="tab_content pd0">

						<!-- Tên : Name-->
						<div class="formRow">
							<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" placeholder="Nhập tên sản phẩm"></span>
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
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- image_list: Hình ảnh -->
						<div class="formRow">
							<label class="formLeft">Ảnh kèm theo:</label>
							<div class="formRight">
								<div class="left">
									<input type="file" id="image_list" name="image_list[]" multiple="">
								</div>
								<div name="image_list_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- price: Giá gốc-->
						<div class="formRow">
							<label class="formLeft" for="param_price">
								Giá :<span class="req">*</span>
							</label>
							<div class="formRight">
                        <span class="oneTwo">
                        <input name="price" style="width:100px" id="param_price" class="format_number" _autocheck="true" type="text" placeholder="Nhập giá gốc"><b style="font-size:20px; font-family: Roboto;">&#8363;</b>
                        <img class="tipS" title="Giá bán sử dụng để giao dịch" style="margin-bottom:-8px" src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png">
                        </span>
								<span name="price_autocheck" class="autocheck"></span>
								<div name="price_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- discount : Giá đã giảm -->
						<div class="formRow">
							<label class="formLeft" for="param_discount">
								Giảm giá (VNĐ)<span></span>:
							</label>
							<div class="formRight">
                        <span>
							<input name="discount" style="width:100px" id="param_discount" class="format_number" type="text" placeholder="Nhập số tiền giảm"><b style="font-size:20px; font-family: Roboto;">&#8363;</b>
                        <img class="tipS" origin-title="Số tiền giảm giá" style="margin-bottom:-8px" src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png">
                        </span>
								<span name="discount_autocheck" class="autocheck"></span>
								<div name="discount_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- Thể loại danh mục: catalog_id  -->
						<div class="formRow">
							<label class="formLeft" for="param_cat">Thể loại:<span class="req">*</span></label>
							<div class="formRight">
								<!-- Add Danh Mục-->
								<select name="catalog" class="Left" >
									<option value="">DANH MỤC</option>
									<!-- kiem tra danh muc co danh muc con hay khong -->
									<?php foreach ($catalogs as $row):?>
										<?php if(count($row->subs) > 1):?>
											<optgroup label="<?php echo $row->name?>">
												<?php foreach ($row->subs as $sub):?>
													<option value="<?php echo $sub->id?>"><?php echo $sub->name?> </option>
												<?php endforeach;?>
											</optgroup>
										<?php else:?>
											<option value="<?php echo $row->id?>"><?php echo $row->name?></option>
										<?php endif;?>
									<?php endforeach;?>
								</select>
								<span name="cat_autocheck" class="autocheck"></span>
								<div name="cat_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>



						<!-- warranty : bảo hành  -->
						<div class="formRow">
							<label class="formLeft" for="param_warranty">
								Bảo hành :
							</label>
							<div class="formRight">
								<span class="oneFour"><input name="warranty" id="param_warranty" type="text" placeholder="Nhập thời gian bảo hành"></span>
								<span name="warranty_autocheck" class="autocheck"></span>
								<div name="warranty_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- gifts  : Ưu đãi -->
						<div class="formRow">
							<label class="formLeft" for="param_sale">Ưu đãi:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="gifts" id="param_gifts" rows="4" cols=""placeholder="Nhập nội dung ưu đãi khi mua sản phẩm"></textarea></span>
								<span name="sale_autocheck" class="autocheck"></span>
								<div name="sale_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>


					<!--site_title:Tiêu đề trang web:Title -->
					<div id="tab2" class="tab_content pd0">
						<div class="formRow">
							<label class="formLeft" for="param_site_title">Tiêu đề:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="site_title" id="param_site_title" _autocheck="true" rows="4" cols="" placeholder="Nhập tiêu đề dùng SEO"></textarea></span>
								<span name="site_title_autocheck" class="autocheck"></span>
								<div name="site_title_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


					<!--meta_desc: Mô tả ngắn gọn về nội dung bài viết:  Meta description-->
						<div class="formRow">
							<label class="formLeft" for="param_meta_desc">Mô tả ngắn:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_desc" id="param_meta_desc" _autocheck="true" rows="4" cols="" placeholder="Nhập mô tả ngắn dùng SEO"></textarea></span>
								<span name="meta_desc_autocheck" class="autocheck"></span>
								<div name="meta_desc_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


					<!--meta_key:Meta keywords: Mô tả từ khóa và chủ đề mà một trang web thể hiện, truyền tải.-->
						<div class="formRow">
							<label class="formLeft" for="param_meta_key">Từ khóa:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="meta_key" id="param_meta_key" _autocheck="true" rows="4" cols="" placeholder="Nhập từ khóa , chủ đề dùng SEO"></textarea></span>
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
								<textarea name="content" id="param_content" class="editor"></textarea>
								<div name="content_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>
				</div>
				<!-- End tab_container-->
				<div class="formSubmit">
					<input type="submit" value="LƯU TRỮ" class="redB">
					<input type="reset" value="KHÔI PHỤC" class="basic">
				</div>
				<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>

