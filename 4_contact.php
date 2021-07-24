<?php include '2_header.php' ?>

<div role="main" class="main">

	<section
		class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>- تواصل معنا <span>ارسل رساله لنا او تواصل معنا مع خلال الابيانات</span></h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row pt-xs pb-xl mb-md">
			<div class="col-md-8">

				<h2 class="font-weight-bold text-color-dark">- ارسل رساله</h2>
				<p>ارسل رساله لنا وسيقوم احد المختصين بالرد عليك</p>

				<div class="alert alert-success hidden mt-lg" id="contactSuccess">
					<strong>تم الارسال!</strong>
				</div>

				<div class="alert alert-danger hidden mt-lg" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
				</div>

				<form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php"
					method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<div class="custom-input-box">
									<i class="icon-user icons text-color-primary"></i>
									<input type="text" value="" data-msg-required="الاسم"
										maxlength="100" class="form-control" name="name" id="name"
										placeholder="الاسم*" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<div class="custom-input-box">
									<i class="icon-envelope icons text-color-primary"></i>
									<input type="email" value="" maxlength="100"
										class="form-control" name="email" id="email" placeholder="البريد الاليكتروني*"
										required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<div class="custom-input-box">
									<i class="icon-bubble icons text-color-primary"></i>
									<textarea maxlength="5000"
										rows="10" class="form-control" name="message" id="message"
										placeholder="الرساله*" required></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="ارسل الان"
								class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm"
								data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">

				<div class="row mb-xl">
					<div class="col-md-12">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon mt-xs">
								<i class="icon-location-pin icons"></i>
							</div>
							<div class="feature-box-info">
								<h2 class="font-weight-bold text-color-dark">- العنوان</h2>
								<p class="font-size-lg">
									الدور الاخير –  محل رقم ٢ – مول المغاتير<br>
									شارع حبيب مناور –قطعه ٣ - الفروانية<br>
									الكويت –  مدينه الكويت
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-xl">
					<div class="col-md-12">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon mt-xs">
								<i class="icon-phone icons"></i>
							</div>
							<div class="feature-box-info">
								<h2 class="font-weight-bold text-color-dark">- خدمه العملاء</h2>
								<p class="font-size-lg">
									800 123 4567 <br>
									800 123 4567
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-xl">
					<div class="col-md-12">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon mt-xs">
								<i class="icon-envelope icons"></i>
							</div>
							<div class="feature-box-info">
								<h2 class="font-weight-bold text-color-dark">- الايميل</h2>
								<p class="font-size-lg">
									<a href="mailto:mail@example.com"
										class="text-decoration-none">mail@example.com</a><br>
									<a href="mailto:mail2@example.com"
										class="text-decoration-none">mail2@example.com</a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2024.955954726402!2d47.96262366038!3d29.27856137287586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9bcd56acae1d%3A0xac9bf20d791ce8d7!2zTWFnaGF0ZWVyIENlbnRlciDZhdix2YPYsiDYp9mE2YXYutin2KrZitix!5e0!3m2!1sen!2seg!4v1609078219395!5m2!1sen!2seg" frameborder="0" ariahidden="false" tabindex="0" style="border: 0px; width: 100%; min-height: 400px;"></iframe>

</div>

<?php include '3_Footer.php' ?>
