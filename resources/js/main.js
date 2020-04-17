

	/*
	|---------------------------
	| User details update
	|---------------------------
	*/

	$(document).on("click",".edit-email",function(){
		var email_form = $(".email-form");
		
		$(".email-show").removeClass('d-none').addClass('d-none');
		email_form.removeClass('d-none');
		email_form.find('.input-underline').focus();
	});

	$(document).on("click",".cncl-email-update",function(){
		var input_email = $(".input-underline");
		var orig_email_val = $(".email-val").text();
		
		input_email.val(orig_email_val);

		$(".email-show").removeClass('d-none');
		$(".email-form").removeClass('d-none').addClass('d-none');
	});

	$(".email-form").on("submit","form",function(e){
		var email = $(this).find("[name='email']").val();
		var url = $(this).attr('action');
		var method = $(this).attr('method');

		e.preventDefault();

		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	    	url: url,
	    	method: method,
	    	data: {
	    		email: email
	    	},
	    	success: function(response){
	    		if(!$.isEmptyObject(response.errors)){
                    for (var key in response.errors) {
					    if (Object.prototype.hasOwnProperty.call(response.errors, key)) {
					        $("input[name='"+ key +"']").addClass('is-invalid');
					        $("span."+ key).empty().append(response.errors[key]);
					    }
					}
                }else{
                	$(".email-val").text(response.email);
		    		$(".email-form").removeClass('d-none').addClass('d-none');
		    		$(".email-show").removeClass('d-none');
                }
	    	}
	    });

	});