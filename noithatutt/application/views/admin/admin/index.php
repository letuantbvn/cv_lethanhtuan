<!--header-->
<?php
$this->load->view('admin/admin/head',$this->data); ?>
<div class="line"></div>
<!-- Body-->
<div class="wrapper">
	<div class="widget">

		<div class="title">
			<h6 align="center">Danh sách Quản Trị Viên</h6>
		 	<div class="num f12" style="font-size: 16px">
				Tổng số: <b style="font-family: Roboto; font-size: 16px; color:red;"><?php echo $total?></b>
			</div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
			<tr>
				<td style="width:100px;">Mã số</td>
				<td>Họ và Tên</td>
				<td>Username</td>
				<td style="width:100px;">Hành động</td>
			</tr>
			</thead>

			<tbody>
			<?php foreach ($list as $row):?> 
			<tr>

				<td class="textC"><?php echo $row->id?></td>

				<td>
					<span title="<?php echo $row->name?>" class="tipS"><?php echo $row->name?></span>
				</td>

				<td>
					<span title="<?php echo $row->username?>" class="tipS"><?php echo $row->username?></span>
				</td>
				
				<td class="option">
					<a href="<?php echo admin_url('admin/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS ">
						<img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
					</a>

					<a href="<?php echo admin_url('admin/delete/').$row->id?>" title="Xóa" class="tipS verify_action" >
						<img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
					</a>
				</td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<div class="clear mt30"></div>
