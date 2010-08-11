<div id="contact_form">
	<div id="form_container">
		<form method="get" onsubmit="Mail.send(this); return false">

			<div class="contact_field"><div class="contact_label"><label for="contact_name">YOUR NAME:</label></div><div class="contact_input"><input id="contact_name" name="contact_name" type="text" size="46" value="" class="text_input"></input></div></div>
			<div class="contact_field"><div class="contact_label"><label for="contact_email">YOUR EMAIL:</label></div><div class="contact_input"><input id="contact_email" name="contact_email" type="text" class="text_input" size="46" value=""></input></div></div>
			<div class="contact_field"><div class="contact_label"><label for="contact_msg">MAIL MESSAGE:</label></div><div class="contact_input"><textarea id="contact_msg" name="contact_msg" cols="49" rows="10" value="" class="text_input"></textarea></div></div>

			<div id="contact_submit"><input type="submit" name="sendmail" value="SEND MAIL" id="sendmail"></div>
		</form>
	</div>
	
</div>