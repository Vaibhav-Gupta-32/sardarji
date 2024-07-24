<?php 
$cities = [
	"Ambikapur", "Antagarh", "Arang", "Bacheli", "Bagbahera", "Bagicha", "Baikunthpur", "Balod", "Balodabazar", "Balrampur", "Barpalli", "Basana", "Bastanar", "Bastar", "Bderajpur", "Bemetara", "Berla", "Bhairongarh", "Bhanupratappur", "Bharathpur", "Bhatapara", "Bhilai", "Bhilaigarh", "Bhopalpatnam", "Bijapur", "Bilaspur", "Bodla", "Bokaband", "Chandipara", "Chhinagarh", "Chhuriakala", "Chingmut", "Chuikhadan", "Dabhara", "Dallirajhara", "Dantewada", "Deobhog", "Dhamda", "Dhamtari", "Dharamjaigarh", "Dongargarh", "Durg", "Durgakondal", "Fingeshwar", "Gariaband", "Garpa", "Gharghoda", "Gogunda", "Ilamidi", "Jagdalpur", "Janjgir", "Janjgir-Champa", "Jarwa", "Jashpur", "Jashpurnagar", "Kabirdham-Kawardha", "Kanker", "Kasdol", "Kathdol", "Kathghora", "Kawardha", "Keskal", "Khairgarh", "Kondagaon", "Konta", "Korba", "Korea", "Kota", "Koyelibeda", "Kuakunda", "Kunkuri", "Kurud", "Lohadigundah", "Lormi", "Luckwada", "Mahasamund", "Makodi", "Manendragarh", "Manpur", "Marwahi", "Mohla", "Mungeli", "Nagri", "Narainpur", "Narayanpur", "Neora", "Netanar", "Odgi", "Padamkot", "Pakhanjur", "Pali", "Pandaria", "Pandishankar", "Parasgaon", "Pasan", "Patan", "Pathalgaon", "Pendra", "Pratappur", "Premnagar", "Raigarh", "Raipur", "Rajnandgaon", "Rajpur", "Ramchandrapur", "Saraipali", "Saranggarh", "Sarona", "Semaria", "Shakti", "Sitapur", "Sukma", "Surajpur", "Surguja", "Tapkara", "Toynar", "Udaipur", "Uproda", "Wadrainagar"
];
sort($cities);
?>
<section>
		<div class="taxi_slider_text pt-0 shadow" >
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="left_text">
							<h3 class=" fw-bold wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" style="color:black !important;">Lets Book
								<span>Your Taxi</span> <br>Instantly
							</h3>
							<p class="wow  fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Global
								airport transfers, taxi and cars services</p>
							<a class="main_btn yellow wow  fadeInLeft animated" data-wow-delay="0.6s" href="#" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">Discover
								More</a>
						</div>
					</div>

					<div class="col-lg-7">
						<div class=" text-center p-0 m-0 mb-3 mt-5 ">
							<h1 class=" fs-3 fw-bold p-2 mt-0 text-white"><b>Book your</b> <span class=" text-warning"><b>Taxi</b></span></h1>
						</div>
						<div class="row text-white fw-bold p-5 text-justify-center">
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<button class="btn btn-danger btn-block mb-3 tablinks active" name="Outstation-Oneway" onclick="openForm(event, 'Outstation-Oneway')">
									<b>Outstation-Oneway</b>
								</button>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<button class="btn btn-info btn-block mb-3 tablinks" name="Outstation-RoundTrip" onclick="openForm(event, 'Outstation-RoundTrip')">
									<b>Outstation-RoundTrip</b>
								</button>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<button class="btn btn-warning btn-block mb-3 tablinks" name="Local-FullDay" onclick="openForm(event, 'Local-FullDay')">
									<b>Local-FullDay</b>
								</button>
							</div>
						</div>

						<!-- First form -->
						<form action="" method="POST" id="Outstation-Oneway" class="tabcontent form-body p-5" style="color:white;display:block;">
							<div class=" row">
								<input type="hidden" name="form_name" id="form_name" value="Outstation-Oneway" class="form-control ">
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Name<span class="text-danger">*</span></label>
									<input type="text" name="Name" placeholder="Enter Your Name" id="Name" class="form-control border-warning " required>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Mobile<span class="text-danger">*</span></label>
									<input type="text" name="Mobile" placeholder="Enter Your Mobile Number" id="Mobile" class="form-control border-warning" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
								</div>
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">From<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="from_place" id="from_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">To<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="to_place" id="to_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Departure<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="departure_date" id="datetimepicker1" required>

								</div>

								<!-- <div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Return<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="return_date" id="datetimepicker1" required>
								</div> -->

								<div class="col-lg-12 form-group mb-5 text-justify">
									<button class="btn btn-danger form-control text-center" name="submit" id="submit">SUBMIT</button>
								</div>
							</div>
						</form>

						<!-- Second -->
						<form action="" method="POST" id="Outstation-RoundTrip" class="tabcontent form-body p-5" style="color:white">
							<div class="row">
								<input type="hidden" name="form_name" id="form_name" value="Outstation-RoundTrip" class="form-control ">
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Name<span class="text-danger">*</span></label>
									<input type="text" name="Name" placeholder="Enter Your Name" id="Name" class="form-control border-warning " required>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Mobile<span class="text-danger">*</span></label>
									<input type="text" name="Mobile" placeholder="Enter Your Mobile Number" id="Mobile" class="form-control border-warning" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
								</div>
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">From<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="from_place" id="from_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">To<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="to_place" id="to_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Departure<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="departure_date" id="datetimepicker1" required>

								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Return<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="return_date" id="datetimepicker1" required>
								</div>

								<div class="col-lg-12 form-group mb-5">
									<button class="btn btn-info form-control text-center" name="submit" id="submit">SUBMIT</button>
								</div>
							</div>
						</form>


						<!-- Third form -->
						<form action="" method="POST" id="Local-FullDay" class="tabcontent form-body p-5" style="color:white">
							<div class=" row">
								<input type="hidden" name="form_name" id="form_name" value="Local-FullDay" class="form-control ">
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Name<span class="text-danger">*</span></label>
									<input type="text" name="Name" placeholder="Enter Your Name" id="Name" class="form-control border-warning " required>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Your Mobile<span class="text-danger">*</span></label>
									<input type="text" name="Mobile" placeholder="Enter Your Mobile Number" id="Mobile" class="form-control border-warning" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
								</div>
								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">From<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="from_place" id="from_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">To<span class="text-danger">*</span></label>
									<select class=" form-control border-warning" name="to_place" id="to_place" required>
										<option value="">- - Select City - -</option>
										<?php
										foreach ($cities as $city) {
											echo "<option value=\"$city\">$city</option>";
										}
										?>
									</select>
								</div>

								<div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Departure<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="departure_date" id="datetimepicker1" required>

								</div>

								<!-- <div class="col-lg-6 form-group mb-5">
									<label for="" class="form-label">Return<span class="text-danger">*</span></label>
									<input class="form-control border-warning" type="date" name="return_date" id="datetimepicker1" required>
								</div> -->

								<div class="col-lg-12 form-group mb-5 text-justify">
									<button class="btn btn-primary form-control text-center" title="Book Full Day Local" name="submit" id="submit">SUBMIT</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</section>
	<script>
		function openForm(evt, formName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(formName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		document.querySelectorAll('form').forEach((form) => {
			form.addEventListener('submit', (event) => {
				event.preventDefault();

				const formData = new FormData(form);
				const formName = formData.get('form_name');

				let whatsappLink = 'https://api.whatsapp.com/send?phone=918319790050&text=';

				for (let [name, value] of formData.entries()) {
					if (name !== 'form_name') {
						whatsappLink += `${encodeURIComponent(name)}=%20${encodeURIComponent(value)}%0A`;
					}
				}

				if (formName === 'Local-FullDay') {
					whatsappLink += 'For=Local%20Full%20Day';
				} else if (formName === 'Outstation-Oneway') {
					whatsappLink += 'For=Outstation%20One%20way';
				} else if (formName === 'Outstation-RoundTrip') {
					whatsappLink += 'For=Outstation%20Round%20Trip';
				}

				window.open(whatsappLink, '_blank');
			});
		});
	</script>