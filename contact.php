<?php include_once("db_connect.php"); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/slider.php'); ?>
<?php
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pickup_location = mysqli_real_escape_string($conn, $_POST['pickup_location']);
    $drop_location = mysqli_real_escape_string($conn, $_POST['drop_location']);
    $date_of_journey = mysqli_real_escape_string($conn, $_POST['date_of_journey']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert query
    $query = "INSERT INTO contact_us (name, email, phone, pickup_location, drop_location, date_of_journey, message) VALUES ('$name', '$email', '$phone', '$pickup_location', '$drop_location', '$date_of_journey', '$message')";
    // echo $query;die;
    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>

<section class="l_collection_area">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <h4>Contact Us</h4>
            <p><i class="fas fa-map-marker-alt"></i> Address 1: Dharampura no. 2, Jagdalpur</p>
            <p><i class="fas fa-map-marker-alt"></i> Address 2: Deopuri, Front of Kamal Vihar, Raipur</p>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:sardarjionewaytaxi@gmail.com">sardarjionewaytaxi@gmail.com</a></p>
            <p><i class="fas fa-phone"></i> Phone: +91-8319790050</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a class="btn btn-orange" href="mailto:sardarjionewaytaxi@gmail.com">Get in Touch</a>
      </div>
    </div>
  </div>
</section>
<!-- <section class="contact_area dotted_left">
    <div class="container">
        <div class="flag_center_title wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h2>Get in Touch with <span class="red">Sardarji One Way Taxi Services</span></h2>
            <p>Fill out the form below to book your taxi or to get in touch with us.</p>
        </div>

        <div class="row">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="pickup" class="form-label">Pickup Location</label>
                        <input type="text" class="form-control" id="pickup" name="pickup_location" placeholder="Enter your pickup location" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="drop" class="form-label">Drop Location</label>
                        <input type="text" class="form-control" id="drop" name="drop_location" placeholder="Enter your drop location" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date of Journey</label>
                        <input type="date" class="form-control" id="date" name="date_of_journey" placeholder="Enter your date of journey" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
                    </div>
                </div>
        </div>
        <div class="col-lg-12 mb-2">
            <button class="col-12 text-white btn  text-center shadow btn-info" id="Print" type="submit" name="submit"><b>Submit</b></button>
        </div>
        </form>
    </div>
    </div>
</section> -->
<?php include('includes/footer.php'); ?>