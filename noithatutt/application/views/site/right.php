<!-- The Support -->
	<div class="box-right">
		<div class="title tittle-box-right">
			<h2 style="font-size: 16px; color: #198fc4; margin-top:10px"> HỖ TRỢ TRỰC TUYẾN </h2>
		</div>
		<div class="content-box">
			<!-- goi ra phuong thuc hien thi danh sach ho tro -->
			<div class='support'>
				<?php foreach ($supports as $row):?>
					<strong style="text-transform: uppercase"><?php echo $row->name?> </strong>
					<p><a rel="nofollow" href="https://www.facebook.com/<?php echo $row->facebook?>">
						<img style="margin-bottom:-3px; width: 20px; height: 20px" src="<?php echo public_url()?>/site/images/icon-fb.png"> <?php echo $row->name_fb?>
					</p>

					<p> <a rel="nofollow" href="tel:<?php echo $row->gmail?>">
						<img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/phone.png"> <?php echo $row->phone?>
					</p>

					<p>
						<a rel="nofollow" href="mailto:<?php echo $row->gmail?>">
							<img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/email.png"> Email: <?php echo substr($row->gmail, 0,14)?>...
						</a>
					</p>
					<p>
						<a rel="nofollow" href="skype:<?php echo $row->skype?>">
							<img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/skype.png"> Skype: <?php echo $row->skype?>
						</a>
					</p>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<!-- End Support -->

	<!-- The news -->
	<div class="box-right">
		<div class="title tittle-box-right">
			<h2> Bài viết mới </h2>
		</div>
		<div class="content-box">
			<ul class="news">
				<?php foreach ($news_list as $row):?>
				<li>
					<a href="" title="<?php echo $row->title?>">
						<img src="<?php echo base_url('upload/news/'.$row->image_link)?>" alt="<?php echo $row->title?>">
					<?php echo $row->title?></a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>		<!-- End news -->

	<!-- The Ads -->
	<div class="box-right">
		<div class="title tittle-box-right">
			<h2> Quảng cáo </h2>
		</div>
		<div class="content-box">
			<a href="">
				<img src="<?php echo public_url()?>site/images/ads.png">
			</a>
		</div>
	</div>
	<!-- End Ads -->

	<!-- The Fanpage -->
	<div class="box-right">
		<div class="title tittle-box-right">
			<h2> Fanpage </h2>
		</div>
		<div class="content-box">

			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fclblaptrinhvietnam&tabs=timeline&width=190&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="190" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

		</div>
	</div>
	<!-- End Fanpage -->

	<!-- The Fanpage -->
	<div class="box-right">
		<div class="title tittle-box-right">
			<h2> Thống kê truy cập </h2>
		</div>
		<div class="content-box">
			<center>
				<!-- Histats.com  START  (standard)-->
				<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script><script src="http://s10.histats.com/js15.js" type="text/javascript"></script>
				<a href="http://www.histats.com" target="_blank" title="hit counter"><script type="text/javascript">
						try {Histats.start(1,2138481,4,401,118,80,"00011111");
							Histats.track_hits();} catch(err){};
					</script><div id="histats_counter_7726" style="display: block;"><a href="http://www.histats.com/viewstats/?sid=2138481&amp;ccid=401" target="_blank"><canvas id="histats_counter_7726_canvas" width="119" height="81"></canvas></a></div></a>
				<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2138481&101" alt="hit counter" border="0"></a></noscript>
				<!-- Histats.com  END  -->
			</center>
		</div>
	</div>
	<!-- End Fanpage -->
