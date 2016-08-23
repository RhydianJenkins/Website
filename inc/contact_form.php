<section id="contact">
	<div class="container">
		<form id="ajax-contact" method="post" action="<?php echo SCRIPTS_PATH . 'mailer2.php'; ?>">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Contact Us</h2>
					<h3 class="section-subheading text-muted">Send us an email and we will try our best to get back to you.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-12 text-center">
					<div id="success"></div>
					<button class="w3-btn w3-padding-16 w3-small w3-margin-top">Send Email</button>
				</div>
			</div>
		</form>
	</div>
	<div id="form-messages" class="w3-center"></div>

	<script>
	$(function() {
		// Get the form.
		var form = $('#ajax-contact');

		// Get the messages div.
		var formMessages = $('#form-messages');

		// Set up an event listener for the contact form.
		$(form).submit(function(event) {
			// Stop the browser from submitting the form.
			event.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();
			
			.done(function(response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#name').val('');
				$('#email').val('');
				$('#message').val('');
			}).fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});
		});
	});
	</script>
</section>