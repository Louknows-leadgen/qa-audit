$(document).ready(function(){


	/*
	|-------------------------------------------------------------------------
    | initialize bootstrap-select
    |-------------------------------------------------------------------------
	*/

		$('.select-mult').selectpicker();

	/*
	|-------------------------------------------------------------------------
    | initialize datefield
    |-------------------------------------------------------------------------
	*/
	

	// callback function
	var date = function(){
		tail.DateTime(".date",{
			dateFormat: 'mm/dd/YYYY',
			timeFormat: false
		});
	};

	var datetime = function(){
		tail.DateTime(".datetime",{
			dateFormat: 'mm/dd/YYYY',
			timeFormat: "GG:ii A",
			timeIncrement: false,
			timeSeconds: false
		});
	};

	// initialize date and datetime
	date();
	datetime();

	// reinitialize dynamic elements for datetime
	var elementToObserve = document.querySelector("body");
	var obsrv_date = new MutationObserver(date);
	var obsrv_datetime = new MutationObserver(datetime);
	obsrv_date.observe(elementToObserve, {subtree: true, childList: true});
	obsrv_datetime.observe(elementToObserve, {subtree: true, childList: true});



	//-------------------------------------------------------------------------


	/*
	|-----------------------------------------------------------------
	| User details update
	|-----------------------------------------------------------------
	*/

	$("form.account-form").on("submit",function(e){
		var form = $(this);
		var form_data = {};
		var url = form.attr("action");
		var method = form.attr('method');
		var notif = $(".account-notif");

		e.preventDefault();

		// clean up input classes
		form.find('input').removeClass('is-invalid');

		form.find('[name]').each(function(){
			form_data[this.name] = this.value;
		});

		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	    	url: url,
	    	method: method,
	    	data: form_data,
	    	beforeSend: function(){
	    		form.find('.btn').html("<span class='spinner-grow spinner-grow-sm'></span><span class='spinner-grow spinner-grow-sm'></span><span class='spinner-grow spinner-grow-sm'></span>");
	    	},
	    	complete: function(){
	    		form.find('.btn').text("Update");
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
                	showAccountNotif(notif,response.success,'text-success');
                }
	    	},
	    	error: function(jqXHR,textStatus,errorThrown ){
	    		showAccountNotif(notif,jqXHR.responseJSON.fail,'text-danger');
	    	}
	    });

	});
	

	$(".acnt-tab:not(.link)").on("click",function(){
		var tab = $(this).data('tab');
		var actv_tabcontent = $('.' + tab);

		$(".actv-acnt-opt").removeClass('actv-acnt-opt');
		$(this).addClass('actv-acnt-opt');

		//.acnt-tabcontent
		$('.acnt-tabcontent').removeClass('d-none').addClass('d-none');
		actv_tabcontent.removeClass('d-none');
	});

	$(".acnt-tab.link").on("click",function(){
		var url = $(this).find('[data-url]').data('url');
		location.href = url;
	});


	$("form.password-update").on('submit',function(e){
		var form = $(this);
		var form_data = {};
		var url = form.attr("action");
		var method = form.attr('method');
		var notif = $(".password-notif"); 

		e.preventDefault();

		// clean up input classes
		form.find('input').removeClass('is-invalid');

		form.find('[name]').each(function(){
			form_data[this.name] = this.value;
		});

		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
			url: url,
			method: method,
			data: form_data,
			beforeSend: function(){
	    		form.find('.btn').html("<span class='spinner-grow spinner-grow-sm'></span><span class='spinner-grow spinner-grow-sm'></span><span class='spinner-grow spinner-grow-sm'></span>");
	    	},
	    	complete: function(){
	    		form.find('.btn').text("Update");
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
                	showAccountNotif(notif,response.success,'text-success');
                }
			},
			error: function(jqXHR,textStatus,errorThrown ){
	    		showAccountNotif(notif,jqXHR.responseJSON.fail,'text-danger');
	    	}
		});
	});

	function showAccountNotif(el,msg,classNm){
		el.html(msg)
		  .removeClass('text-success text-danger')
		  .addClass(classNm)
		  .fadeIn(300,function(){
    		setTimeout(function(){
    			el.fadeOut(300);
    		},2000);
		  });
	}

	//-----------------------------------------------------------------------------

	
	/*
	|-----------------------------------------------------------------
	| Auditor QA form effects
	|-----------------------------------------------------------------
	*/

	$(document).on("click",".script-tab:not(.script-tab-actv)",function(){
		var tab = $(this).data('tab');

		// transfer tab active class
		$(".script-tab-actv").removeClass("script-tab-actv");
		$(this).addClass("script-tab-actv");

		// transfer tabcontent active class
		$("div[data-tabcontent].actv").removeClass("actv");
		$("div[data-tabcontent="+ tab +"]").addClass("actv");

		// smooth scrolling to the top
		$("html,body").animate({ scrollTop: 0 },"slow");
	});

	$(document).on("click",".left-chevron,.right-chevron",function(){
		var tab = $(this).data('tab');

		$(".script-tab[data-tab="+ tab +"]").click();
	});

	//-----------------------------------------------------------------------------

});

	