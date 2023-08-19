<!-- head -->
<?php $this->load->view('admin/product/head', $this->data)?>

<div class="line"></div>


<!--Form upload san pham-->
<div class="wrapper">
	<!-- Form -->
	<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/add.png" class="titleIcon">
					<h6>CẬP NHẬT SẢN PHẨM: "<?php echo $product->name?>"</h6>
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
								<span class="oneTwo">
									<input type="text" _autocheck="true" id="param_name" value="<?php echo $product->name?>" name="name">
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
									<img src="<?php echo base_url('upload/product/'.$product->image_link)?>" style="width:100px;height:70px">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- image_list: Hình ảnh kèm theo -->
						<?php $image_list = json_decode($product->image_list);?>

						<div class="formRow">
							<label class="formLeft">Ảnh kèm theo:</label>
							<div class="formRight">
								<div class="left">
									<input type="file" id="image_list" name="image_list[]" multiple="" size="30">
									<?php if(is_array($image_list)):?>
									<?php foreach ($image_list as $img):?>
										<img src="<?php echo base_url('upload/product/'.$img)?>" style="width:100px;height:70px;margin:5px">
									<?php endforeach;?>
									<?php endif;?>

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
                        <input type="text" value="<?php echo $product->price?>" _autocheck="true" class="format_number" id="param_price" style="width:100px" name="price"><b style="font-size:20px; font-family: Roboto;">&#8363;</b>
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
							<input type="text" value="<?php echo $product->discount?>"  class="format_number" id="param_discount" style="width:100px" name="discount"><b style="font-size:20px; font-family: Roboto;">&#8363;</b>
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
													<option value="<?php echo $sub->id?>" <?php if($sub->id == $product->catalog_id) echo 'selected';?>> <?php echo $sub->name?> </option>
												<?php endforeach;?>
											</optgroup>
										<?php else:?>
											<option value="<?php echo $row->id?>" <?php if($row->id == $product->catalog_id) echo 'selected';?>><?php echo $row->name?></option>
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
								<span class="oneFour">
									<input type="text" id="param_warranty" name="warranty" value="<?php echo $product->warranty?>">
								</span>
								<span name="warranty_autocheck" class="autocheck"></span>
								<div name="warranty_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- gifts  : Ưu đãi -->
						<div class="formRow">
							<label class="formLeft" for="param_sale">Ưu đãi:</label>
							<div class="formRight">
								<span class="oneTwo">
									<textarea cols="" rows="4" id="param_gifts" name="gifts"><?php echo $product->gifts?></textarea>
								</span>
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
								<span class="oneTwo">
									<textarea cols="" rows="4" _autocheck="true" id="param_site_title" name="site_title"><?php echo $product->site_title?></textarea>
								</span>
								<span name="site_title_autocheck" class="autocheck"></span>
								<div name="site_title_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!--meta_desc: Mô tả ngắn gọn về nội dung bài viết:  Meta description-->
						<div class="formRow">
							<label class="formLeft" for="param_meta_desc">Mô tả ngắn:</label>
							<div class="formRight">
								<span class="oneTwo">
									<textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"><?php echo $product->meta_desc?></textarea>
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
									<textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"><?php echo $product->meta_key?></textarea>
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
								<textarea class="editor" id="param_content" name="content"><?php echo $product->content?></textarea>
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

