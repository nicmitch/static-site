
var inValidClass = 'has-error';
var parentClass = 'form-group';
var activeClass = "isActive";
var sendButton = ".send_button";
var loadingClass = "loading";
var defaultAction =  templateUrl + '/form/sendmail.php';

function valida_modulo(modulo, messaggio_errore) {

	count = 0;
	countMail = 0;

	$('#'+modulo+" select[data-required]").each(function() {		
		if ($(this).val() == "") { 
			$(this).parent('.'+parentClass).addClass(inValidClass);
			count++;
		}		
	});

	$('#'+modulo+' input[data-required], #'+modulo+' textarea[data-required]').each(function() {
		if($(this).val() == '' || $(this).val() == $(this).attr('placeholder')) { 
			$(this).parent('.'+parentClass).addClass(inValidClass);
			count++;
		}		
	});

	// Validazione della mail
	$('form :text[data-type="mail"], form textarea[data-type="mail"]').each(function(){
		thisVal = $(this).val();

		if(thisVal != '' && validateEmail(thisVal)==false){
			$(this).parent('.'+parentClass).addClass(inValidClass);
			countMail++;
		};
	});	

	$('#'+modulo+" :checkbox[data-required]").each(function() {
		if(!$(this).is(':checked')) { 
			$(this).parent('.'+parentClass).addClass(inValidClass);
			count++;
		}		
	});



	if (count>0 && countMail > 0) {

		alert(messaggio_errore);
		alert(messaggio_errore_mail);

	} else
	if (count>0 && countMail == 0){

		alert(messaggio_errore);

	} else
	if (countMail>0 && count == 0){

		alert(messaggio_errore_mail);

	} else {



		$('#'+modulo).addClass(loadingClass);
		$('#'+modulo).find(sendButton).attr('disabled','disabled');

		if(document.getElementById(modulo).getAttribute('action')){
			action = document.getElementById(modulo).getAttribute('action');
		}else{
			action = defaultAction;
		};

		$.ajax({
           type: "POST",
           url: action,
           data: $("#"+modulo).serialize(), // serializes the form's elements.
           success: function(data){
			   	if(data=="ok"){

			   		$('#'+modulo).removeClass(loadingClass);
					$('#'+modulo).find(sendButton).removeAttr('disabled');
			  		
			  		$('.richiesta-info').fadeOut(500);
               		$('.mail-message').delay(500).fadeIn(300); // show response from the php script.*/
				}else{
					alert('errore nell&rsquo;invio della mail');

					
			   		$('#'+modulo).removeClass(loadingClass);
					$('#'+modulo).find(sendButton).removeAttr('disabled');
				};
           }
         });
	};	

}

function validateEmail(inputVal){
	var atpos=inputVal.indexOf("@");
	var dotpos=inputVal.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputVal.length){
	  	return false;
	}
}

$(document).ready(function() {


	// Funzione di check sull'entrata nei campi text e textarea
	$('form input, form textarea').focus(function() {
		if($(this).parent('.'+parentClass).hasClass(inValidClass)){
			$(this).parent('.'+parentClass).removeClass(inValidClass);
		}

		$(this).addClass(activeClass);
	});

	$('form input, form textarea').focusout(function() {
		if($(this).val() == ''){
			$(this).parent('.'+parentClass).removeClass(activeClass);
		};
	});



	$('form input[data-required], form textarea[data-required]').focusout(function(){
		
		if($(this).val() == $(this).attr('placeholder') || $(this).val() == ''){
			$(this).parent('.'+parentClass).addClass(inValidClass);
		};
	});	

	// Validazione della mail
	$('form :text[data-type="mail"], form input[type="email"], form textarea[data-type="mail"]').focusout(function(){
		thisVal = $(this).val();		
		if(validateEmail(thisVal) == false){
			$(this).parent('.'+parentClass).addClass(inValidClass);

			alert(messaggio_errore_mail);
		};
	});	

	// Funzione di validazione sull'entrata nei campi select
	$('form select[data-required]').change(function() {
		$thisCont = $(this).parent('.'+parentClass);		
		if($thisCont.hasClass(inValidClass)){$thisCont.removeClass(inValidClass);}		
		if($(this).val() == ""){$thisCont.addClass(inValidClass);};
	});

	// Funzione di validazione sull'entrata dei checkbox
	$('form input:checkbox').click(function() {
		if($(this).parent('.'+parentClass).hasClass(inValidClass)){$(this).siblings('label').removeClass(inValidClass);}
	});


	$(sendButton).click(function(event){

		event.stopPropagation();

		formID = $(this).attr('data-form');
		validationMessage = $(this).attr('data-alert');

		valida_modulo(formID, validationMessage);
	})

});