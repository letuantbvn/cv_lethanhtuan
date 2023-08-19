<div id="left_content">
	<div id="leftSide" style="padding-top:30px;">

		<!-- Account panel -->

		<div class="sideProfile">
			<a href="#" title="" class="profileFace"><img src="<?php echo public_url('admin') ?>/images/adminsystem.png"
														  width="40"></a>

			<span>Xin chào: <strong>admin!</strong></span>
			<span> QUẢN TRỊ VIÊN
			</span>
			<div class="clear"></div>
		</div>
		<div class="sidebarSep"></div>
		<!-- Left navigation -->

		<ul id="menu" class="nav">

			<li class="home">

				<a href="<?php echo admin_url()?>" class="active" id="current">
					<span>BẢNG ĐIỀU KHIỂN</span>
					<strong></strong>
				</a>

			</li>
			<li class="tran">

				<a href="admin/tran.html" class=" exp">
					<span>Quản lý bán hàng</span>
					<strong>2</strong>
				</a>

				<ul class="sub">
					<li>
						<a href="<?php echo admin_url('transaction')?>">
							Giao dịch </a>
					</li>
					<li>
						<a href="<?php echo admin_url('order')?>">
							Đơn hàng sản phẩm </a>
					</li>
				</ul>

			</li>
			<li class="product">

				<a href="admin/product.html" class=" exp">
					<span>Sản phẩm</span>
					<strong>2</strong>
				</a>

				<ul class="sub">
					<li>
						<a href="<?php echo admin_url('product')?>">
							Sản phẩm </a>
					</li>
					<li>
						<a href="<?php echo admin_url('catalog')?>">
							Danh mục </a>
					</li>

				</ul>

			</li>
			<li class="account">

				<a href="admin/account.html" class=" exp">
					<span>Tài khoản</span>
					<strong>2</strong>
				</a>

				<ul class="sub">
					<li>
						<a href="<?php echo admin_url('admin')?>">
							Ban quản trị & Nhân viên</a>
					</li>
					<li>
						<a href="<?php echo admin_url('user')?>">
							Khách hàng thành viên </a>
					</li>
				</ul>

			</li>
			<li class="support">

				<a href="admin/support.html" class=" exp">
					<span>Hỗ trợ và liên hệ</span>
					<strong>2</strong>
				</a>

				<ul class="sub">
					<li>
						<a href="<?php echo admin_url('support')?>">
							Nhân viên hỗ trợ </a>
					</li>
					<li>
						<a href="<?php echo admin_url('contact')?>">
							Hỏi Đáp & Liên hệ </a>
					</li>
				</ul>

			</li>
			<li class="content">

				<a href="admin/content.html" class=" exp">
					<span>Nội dung</span>
					<strong>2</strong>
				</a>

				<ul class="sub">
					<li>
						<a href="<?php echo admin_url('slide')?>">
							Slide </a>
					</li>
					<li>
						<a href="<?php echo admin_url('news')?>">
							Tin tức </a>
					</li>
				</ul>

			</li>

		</ul>

	</div>
	<div class="clear"></div>
</div>
