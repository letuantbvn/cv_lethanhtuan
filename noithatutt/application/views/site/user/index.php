<style>
table td{
	padding:10px;
	border:1px solid #f0f0f0;
}
</style>
<div class="box-center" ><!-- The box-center product-->
     <div>
		 <h3 style="text-align: center"><b>THÔNG TIN THÀNH VIÊN</b></h3>
     </div>
      <div class="box-content-center product" style="text-align:  center"><!-- The box-content-center -->
          <table style="margin-left: 60px ; width: 450px ; height: 200px; text-align: center; border: 2px solid #747d8c;" >
               <tr>
                  <td><b>Họ tên</b></td>
                  <td><?php echo $user->name?></td>
               </tr>
               <tr>
                  <td><b>Email</b></td>
                  <td><?php echo $user->email?></td>
               </tr>
                <tr>
					<td><b>Số điện thoại</b></td>
                  <td><?php echo $user->phone?></td>
               </tr>
                <tr>
					<td><b>Địa chỉ</b></td>
                  <td><?php echo $user->address?></td>
               </tr>

          </table>
		  <div class="form-item">
			 <button class="info-edit" style="height: 40px; width: auto;">
			  <a style="color:#ffffff;" href="<?php echo site_url('user/edit')?>">SỬA THÔNG TIN</a>
			 </button>
		  </div>
	  </div>

      </div>
</div>
