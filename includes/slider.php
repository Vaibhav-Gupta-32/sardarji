<section class="main_slider_area mt-0">
		<div class="carousel-inner">
			<div class="item active">
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<?php
							$query = mysqli_query($conn, "select * from    tbl_slider order by id");
							$i=1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<li><img src="admin/<?= $row['location'] ?>" alt="<?= $row['id'] ?>" title="<?=$i++?>" id="wows1_<?= $row['id'] ?>" class="img-responsive"></li>
							<?php } ?>
							<!-- <li><img src="1.jpg" alt="1" title="1" id="wows1_0"/></li>
		<li><img src="2.jpg" alt="2" title="2" id="wows1_1"/></li>
		<li><img src="3.jpg" alt="3" title="3" id="wows1_2"/></li>
		<li><a href="#"><img src="4.jpg" alt="jquery carousel" title="4" id="wows1_3"/></a></li>
		<li><img src="5.jpg" alt="5" title="5" id="wows1_4"/></li> -->
						</ul>
					</div>
					<div class="ws_script" style="position:absolute;left:-99%"><a href="#">angularjs slider</a> by WOWSlider.com v7.7</div>
					<div class="ws_shadow"></div>
				</div>
				<script type="text/javascript" src="engine1/wowslider.js"></script>
				<script type="text/javascript" src="engine1/script.js"></script>
				<!-- End WOWSlider.com BODY section -->



			</div>

		</div>
		<!-- ================ -->



	</section>