$(document).ready(function(){
	
	
	var get = getVarsUrl();
	
	setVarFormData("id", get.id);
	startObjDragDrop(globalElement);
	//sendFormDataClick();
	
});
var globalElement = ".dragandropUploadFile";
var gobalFormData = new FormData();
var globalPath = "http://kreativeco.com/TESTING/femsa/admin/scripts/dragandrop/";
var globalAction = "index.php?module=generations&action=addDragAndDrop";

var dragdropConfig = {


}
/**
 * startObjDragDrop
 *
 * Construye el objeto que permite obtener los objetos 
 * del area de drag and drop
 *
 * @params element 	=> string
 * @return void
 * @author Fernando Saavedra
 *
 *
 */
function startObjDragDrop(element){

	var obj = $(element);
	
	obj.on('dragenter', function (e) {
			e.stopPropagation();
			e.preventDefault();
			$(this).css('border', '2px solid #0B85A1');
	});
	
	obj.on('dragover', function (e) {
			 e.stopPropagation(); 
			 e.preventDefault();
	});
	
	obj.on('drop', function (e) {
		$(this).css('border', '2px dotted #0B85A1');
		 e.preventDefault();
		 var getFiles = e.originalEvent.dataTransfer.files;
		 
		console.log(getFiles);
		
		//seteamos la imagen obtenidad de drag an drop
		setVarFormData("file_image", getFiles[0]);
		//We need to send dropped files to Server
		uploadAjaxFormData(gobalFormData);
	});
	
	
	$(document).on('dragenter', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});
	$(document).on('dragover', function (e) {
		 e.stopPropagation();
		 e.preventDefault();
		 obj.css('border', '2px dotted #0B85A1');
	});
	$(document).on('drop', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});
	
}

 
/**
 * setVarFormData
 *
 * Agrega variables al elemento FormData para enviarlas
 * por metodo POST 
 *
 * @params name 	=> string
		   value	=> string|integer|array|object
 * @return void
 * @author Fernando Saavedra
 *
 *
 */
function setVarFormData(name, value){
	
	gobalFormData.append(name, value);
	
}




/**
 * uploadAjaxFormData
 *
 * Realiza un apeticion AJAX para evniar las variables de FormData
 * drag.drop.upload-file.php guarda las variables en $_SESSION[draganddrop] 
 *
 * @params formData 	=> objeto FormData
		   value		=> string|integer|array|object
 * @return void
 * @author Fernando Saavedra
 *
 *
 */	
function uploadAjaxFormData(formData){
	var message = "";
	var _path = globalPath;
	
	$.ajax({
            url: _path+'drag.drop.upload-file.php',  
            type: 'POST',
            data: formData,
            //necesario para subir files via ajax
            cache: false,
            contentType: false,
            processData: false,
			dataType: 'json',
			
            beforeSend: function(){
                message = "Subiendo la imagen, por favor espere...";
                messageAjaxStatus(message)        
            },
			
            success: function(response){
                message = "La imagen ha subido correctamente.";
                messageAjaxStatus(message);
				console.log(response);
				/*
				if(response["draganddrop"] == "success"){
					url = "index";
				}
				else if(response["draganddrop"] == "errors"){
				
				}
				else{
				
				}
				
				location.href = "";
				*/
				window.location= globalAction+"&option=uno";

			},
			
            error: function(){
                message = "Ha ocurrido un error.";
                messageAjaxStatus(message);
            }
			
    });

}


function messageAjaxStatus(message){
    $(".messageAjaxStatus").text("").show();
    $(".messageAjaxStatus").text(message);
}


function sendFormDataClick(){
	 $('form[name=frmImages] > input[name=submit]').click(function(e){
		e.preventDefault();
        var formData = new FormData($('form[name=frmImages]')[0]);
		uploadAjaxFormData(formData);
	});
}