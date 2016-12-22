<section id="contact">
    <script>
        $(function () {
            $('#form-message').hide();
            var form = $('#ajax-form');
            var name = $('#name-input').val();
            var email = $('#email-input').val();
            var message = $('#message-input').val();
            console.log(message);
            $(form).submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '<?= SCRIPTS_PATH . "mailer.php"; ?>',
                    data: {
                        'name': name,
                        'email': email,
                        'message': message,
                    },
                    success: function (response) {
                        $('#ajax-contact-div').hide();
                        $('#form-message').fadeIn();
                        console.log(response);
                    }
                });
            });
        });
    </script>
    <p id="form-message" class="w3-center w3-padding-128 w3-text-green w3-large">Thank you for the email.</p> <!-- TODO: make same height as #ajax-contact-div -->
    <div id="ajax-contact-div" class="container">
        <form id="ajax-form">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Your Name *" id="name-input" required data-validation-required-message="Please enter your name."></input>
                    <p class="help-block text-danger"></p>
                    <input type="email" class="form-control" placeholder="Your Email *" id="email-input" required data-validation-required-message="Please enter your email address."></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control" placeholder="Your Message *" id="message-input" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <input id="submit" name="submit" type="submit" id="contact-form-submit-button">
                </div>
            </div>
        </form>
    </div>
</section>