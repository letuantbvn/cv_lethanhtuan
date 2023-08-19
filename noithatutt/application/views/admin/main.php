<html>
<head>
	<!--Trỏ đến file head của trang admin-->
	<?php $this->load->view('admin/head')?>
</head>
    <body>

	<!---Quản lý cột bên trái trang admin-->
	        <div id="left_content">
				<?php $this->load->view('admin/left')?>
			</div>
	<!---Quản lý cột header trang admin-->
			<div id="rightSide">
				<?php $this->load->view('admin/header')?>

				<!--Content - Nội dung giữa trong trang - thay đổi tại đây-->
				<?php $this->load->view($temp,$this->data)?>


				<!--End content - kết thúc-->



				<?php $this->load->view('admin/footer')?>
			</div>
			<div class="clear"></div>

	</body>


</html>
