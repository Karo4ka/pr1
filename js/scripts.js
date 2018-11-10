// Как только страничка загрузилась 
  window.onload = function () { 
    // проверяем поддерживает ли браузер FormData 
    if(!window.FormData) {
      alert("Браузер не поддерживает загрузку файлов на этом сайте");
    }
  }

jQuery(document).ready(function(){
	// =validation
	var errorTxt = 'Ошибка отправки';
	jQuery("#formform").validate({
		submitHandler: function(form){
			var form = document.forms.formform,
				formData = new FormData(form),
				xhr = new XMLHttpRequest();
				
			xhr.open("POST", "form.php");
			
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4) {
					if(xhr.status == 200) {
						jQuery("#formform").html('<p class="thank">Данные отправлены!<p>');
					}
				}
			};
			xhr.send(formData);
		}
	});	
})

function sendSuccess(callback){
	jQuery(callback).find("form fieldset").html(thank);
	startClock();
}

