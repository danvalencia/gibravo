Mail={};

Mail.send = function(form)
{
		var contactData = {
				name : form.elements["contact_name"].value,
				email : form.elements["contact_email"].value,
				message : form.elements["contact_msg"].value
		};
		
		if(Mail.validateForm(contactData))
		{
				$.ajax({
						theform : form,
						url : "/contact/send",
						dataType : 'json',
						data : contactData,
						success :  function(data, textStatus, request){
								$("#contact_form").empty().append("<div id='message'>" + data.message['text'] + "</div>");
						},
						error : function(request, textStatus, errorThrown){
								alert("Error!: " + errorThrown);
						}	
				});
		}
		else
		{
				alert("Please correct the errors in the form");
		}
		
}

Mail.validateForm = function(contactData)
{
		//TODO: Validate form fields
		return true;
}