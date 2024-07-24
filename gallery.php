<!doctype html>
<?php include_once("db_connect.php");
?>
<?php include('includes/header.php') ?>
<?php include('includes/slider.php') ?>
<?php //include('includes/inquery_form.php') 
?>

<section class="car_drive_area dotted_left">
    <div class="container">
        <div class="flag_center_title wow  fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h2><span class="red">Gallery</span></h2>
            <!-- <p>Sardar JI One Way Taxi Services offers taxi services in
					Chhattisgarh- Book full day taxi in Chhattisgarh and other taxi
					service like Airport transfer, Railway transfer in
					Chhattisgarhwith top car operators. Make your journey safe and
					hassle free with Sardar JI One Way Taxi Services</p>
				<p> If you want to explore the Chhattisgarh, look no further. Avail
					of Sardar JI One Way Taxi Services top-rated and affordable cabs
					in Chhattisgarh.</p> -->
        </div>

        <div class="row l_collection_inner">
            <?php
            $query = mysqli_query($conn, "select * from gallery order by id");
            $i = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 shadow">
                    <div class="l_collection_item orange grid_four wow  fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="car_img">
                            <a href="contact.html"><img class="img-fluid" src="admin/<?= $row['location'] ?>" alt="Sardar JI One Way Taxi Services"></a>
                        </div>
                        <div class="text_body">
                            <a href="contact.html">
                                <h4><?=$row['tittle']?></h4>
                            </a>
                            <p><?=$row['description']?></p>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
        </div>
        <!-- <div class="all_btn wow  fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <a class="main_btn orange" href="contact.html">Any type Cab Book
                Now</a>
        </div> -->
    </div>
</section>
<?php include('includes/footer.php'); ?>