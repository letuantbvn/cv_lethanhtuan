<div class="topNav">
	<div class="wrapper">
		<div class="welcome">
				<script type="text/javascript">
				farbbibliothek = new Array();
				farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");
				farbbibliothek[1] = new Array("#00FF00","#000000","#00FF00","#00FF00");
				farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00");
				farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");
				farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");
				farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF");
				farbbibliothek[6] = new Array("#0000FF","#FFFF00");
				farben = farbbibliothek[4];
				function farbschrift(){for(var b=0;b<Buchstabe.length;b++){document.all["a"+b].style.color=farben[b]}farbverlauf()}function string2array(b){Buchstabe=new Array();while(farben.length<b.length){farben=farben.concat(farben)}k=0;while(k<=b.length){Buchstabe[k]=b.charAt(k);k++}}function divserzeugen(){for(var b=0;b<Buchstabe.length;b++){document.write("<span id='a"+b+"' class='a"+b+"'>"+Buchstabe[b]+"</span>")}farbschrift()}var a=1;function farbverlauf(){for(var b=0;b<farben.length;b++){farben[b-1]=farben[b]}farben[farben.length-1]=farben[-1];setTimeout("farbschrift()",30)}var farbsatz=1;function farbtauscher(){farben=farbbibliothek[farbsatz];while(farben.length<text.length){farben=farben.concat(farben)}farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001))}setInterval("farbtauscher()",5000);

				text= "SÁNG KHÔNG GIAN - SANG NHÀ BẠN"; //h
				string2array(text);
				divserzeugen();
				//document.write(text);
				</script>
		</div>

		<div class="userNav">
			<ul>
				<li><a href="" target="_blank">
						<img style="margin-top:7px;" src="<?php echo public_url('admin')?>/images/icons/light/home.png">
						<span>Trang chủ</span>
					</a></li>

				<!-- Logout -->
				<li><a href="<?php echo admin_url('home/logout')?>">
						<img src="<?php echo public_url('admin')?>/images/icons/topnav/logout.png" alt="">
						<span>Đăng xuất</span>
					</a></li>
					
				<li><a href="http://noithatutt.vn/" target="_blank">
						<img style="margin-top:7px;" src="<?php echo public_url('admin')?>/images/icons/light/users.png">
						<span>Trang Khách</span>
				</a></li>		
			</ul>
		</div>

		<div class="clear"></div>
	</div>
</div>
