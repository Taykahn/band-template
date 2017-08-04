<?php 
/**
 * Contact Form
 */
?>

<?php include('form_process.php'); ?>

<div class="contact-form container">  

	<form id="contact" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

		<h3>Contact</h3>

		<h4>Contact us today, and get reply with in 24 hours!</h4>

		<fieldset>

			<input placeholder="Your name" type="text" name="contact-name" value="<?= $name ?>" tabindex="1" autofocus>

			<span class="error"><?= $name_error ?></span>

		</fieldset>

		<fieldset>

			<input placeholder="Your Email Address" type="text" name="contact-email" value="<?= $email ?>" tabindex="2">

			<span class="error"><?= $email_error ?></span>

		</fieldset>

		<fieldset>

			<input placeholder="Your Phone Number" type="text" name="contact-phone" value="<?= $phone ?>" tabindex="3">

			<span class="error"><?= $phone_error ?></span>

		</fieldset>

		<fieldset>

			<input placeholder="Your Web Site starts with http://" type="text" name="contact-url" value="<?= $url ?>" tabindex="4" >

			<span class="error"><?= $url_error ?></span>

		</fieldset>

		<fieldset>

			<textarea value="<?= $message ?>" name="contact-message" tabindex="5">

			</textarea>

		</fieldset>

		<fieldset>

			<button name="contact-submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>

		</fieldset>

		<div class="success"><?= $success ?></div>

	</form>

</div>





