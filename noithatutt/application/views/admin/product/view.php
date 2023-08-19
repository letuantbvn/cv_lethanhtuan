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
					<h6>XEM THÔNG TIN CHI TIẾT SẢN PHẨM</h6>
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
							<div class="view_product" style="font-size: 20px; color: #2e6b9b;">
									<strong>TÊN SẢN PHẨM</strong>
									<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->name?></p>
							</div>
							<div class="clear"></div>
						</div>

						<!-- image_link: Hình ảnh -->
						<div class="formRow">
							<label class="formLeft" style="font-size: 20px; color: #2e6b9b;"><strong>HÌNH ẢNH SẢN PHẨM</strong></label>
							<br>
							<div class="formRight">
								<div class="left">
									<img src="<?php echo base_url('upload/product/'.$product->image_link)?>" style="width:50%;height:50%">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<!-- image_list: Hình ảnh kèm theo -->
						<?php $image_list = json_decode($product->image_list);?>

						<div class="formRow">
							<label class="formLeft" style="font-size: 20px; color: #2e6b9b;"><strong>ẢNH ĐÍNH KÈM</strong></label>
							<br>
							<div class="formRight">
								<div class="left">
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
							<div class="view_product" style="font-size: 20px; color: #2e6b9b;"><strong>GIÁ BÁN</strong>
								<p style="font-size: 16px; color: #e74c3c;" class="format_number" id="param_discount" ><?php echo $product->price?> VNĐ</p>
							</div>
							<div class="clear"></div>
						</div>


						<!-- discount : Giá đã giảm -->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px; color: #2e6b9b;"><strong>GIẢM GIÁ</strong>
								<p style="font-size: 16px; color: #e74c3c;" class="format_number" id="param_discount" ><?php echo $product->discount?></p>
							</div>
							<div class="clear"></div>
						</div>


						<!-- Thể loại danh mục: catalog_id  -->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>THỂ LOẠI</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->catalog_id?></p>
							</div>
							<div class="clear"></div>
						</div>



						<!-- warranty : bảo hành  -->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>BẢO HÀNH</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->warranty?></p>
							</div>
							<div class="clear"></div>
						</div>


						<!-- gifts  : Ưu đãi -->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>ƯU ĐÃI:</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->gifts?></p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>


					<!--site_title:Tiêu đề trang web:Title -->
					<div id="tab2" class="tab_content pd0">
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>TIÊU ĐỀ SEO:</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->site_title?></p>
							</div>
							<div class="clear"></div>
						</div>

						<!--meta_desc: Mô tả ngắn gọn về nội dung bài viết:  Meta description-->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>MÔ TẢ NGẮN:</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->meta_desc?></p>
							</div>
							<div class="clear"></div>
						</div>


						<!--meta_key:Meta keywords: Mô tả từ khóa và chủ đề mà một trang web thể hiện, truyền tải.-->
						<div class="formRow">
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>TỪ KHÓA:</strong>
								<p style="font-size: 16px; color: #e74c3c;"><?php echo $product->meta_key?></p>
							</div>
							<div class="clear"></div>
						</div>


						<!--content: Nội dung sản phẩm mô tả chi tiết sản phẩm-->
						<div class="formRow hide"></div>
					</div>
					<div id="tab3" class="tab_content pd0">
						<div class="formRow" >
							<div class="view_product" style="font-size: 20px;color: #2e6b9b;"><strong>CHI TIẾT SẢN PHẨM:</strong>
								<p style="font-size: 16px; color: #219eff;"><?php echo $product->content?></p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="formRow hide"></div>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear mt30"></div>

