$(function(){
		$('[data-execute-js][data-execute-name]').each(function(){
			var link = $('<a href="#' + $(this).attr('name') + '" onClick="' + $(this).attr('data-execute-js') + '(\'' + $(this).attr('name') + '\')">' + $(this).attr('data-execute-name') + '<a>');
			$(this).parent().append(link);

		});

		var submitButton;
		var submitButtonText;
		var workingForm;
		$('form').submit(function(){
			var data = $(this).serialize();
			$("[type=submit][clicked=true]").each(function(){
				data += '&' + $(this).attr('name') + '=' +encodeURIComponent($(this).val());
				$(this).removeAttr("clicked");
			})
			var url = $(this).attr('action');
			submitButton = $(this).find('.submit-button');
			submitButtonText = submitButton.html();
			submitButton.addClass('active').attr('disabled','disabled').html('Submitting... <span class="spinner"><i class="icon-spin icon-refresh"></i></span>');

			$(this).find('.has-error').removeClass('has-error');
			$(this).find('.has-success').removeClass('has-success');
			$(this).find('.help-block').remove();
			$(this).find('.help-block').remove();
			$(this).find('.alert').remove();
			workingForm = $(this);
			$.ajax({
	            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
	            url         : url, // the url where we want to POST
	            data        : data, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            encode      : true
	        })
	            // using the done promise callback
	            .done(function(data) {
					if(data.status){
						//goto url

						if(data.url == ''){
							eval(data.function + '()');
						} else {
							window.location = data.url;
						}
						$('.form-group').not('.has-error').addClass('has-success');
					} else {
						//crap
						$.each(data.messages, function(element, messages) {
						    console.log(element);
						    var message = '';
						    $.each(messages, function(type, rawMessage) {
								message = rawMessage;
						    });
						    if(element == 'global'){
						    	alertMessage = $('<div class="alert alert-danger" role="alert"> ' + message + ' </div>');
						    	workingForm.find('.form-group').first().prepend(alertMessage);
						    } else {
						    	helpBlock = $('<span class="help-block">' + message + '</span>');
						    	workingForm.find('[name=' + element + ']').parents('.form-group').addClass('has-error');
						    	workingForm.find('[name=' + element + ']').parent().append(helpBlock);
						    }

						});
						$('.form-group').not('.has-error').addClass('has-success');
						submitButton.removeClass('active').removeAttr('disabled').html(submitButtonText);
					}

	            });

	        // stop the form from submitting the normal way and refreshing the page
	        event.preventDefault();
		});
		$("form [type=submit]").click(function() {
	        $("[type=submit]", $(this).parents("form")).removeAttr("clicked");
	        $(this).attr("clicked", "true");
	    });
		$('.autoshowmodal').modal('show');
	});
var tmpName;
var childWindow;
function googleGetToken(name){
	var url = '/mike-dev/connector-functions/google-directory/get-url';
	var data = $('[name="' + name + '"]').closest('form').serialize();

	tmpName = name;
	$.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST
        data        : data, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
    })
        // using the done promise callback
        .done(function(data) {
        	window.open(data.url,"myWindow", "width=500,height=450");
        });

}

function addToken(token){
	//alert(token);
	$('[name="' + tmpName + '"]').val(token);

}