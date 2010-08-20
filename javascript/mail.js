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
								var response = $.parseJSON(request.responseText);
								alert(response.message.text);
						}	
				});
		}
		else
		{
				alert("Por favor llene todos los campos de la forma.");
		}
		
}

Mail.validateForm = function(contactData)
{
		if($.trim(contactData.name) == "" ||
			 $.trim(contactData.email) == "" ||
		   $.trim(contactData.message) == "")
		{
				return false;
		}
		return true;
}