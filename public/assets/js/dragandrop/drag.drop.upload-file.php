<?php
	session_start();

	if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
		
		
		$array = array("file_image" => "", 
					   "id" 		=> "",);
		
		foreach($array as $key => $value){
			
			if(strpos($key, "file") !== false){
				if( !empty($_FILES[$key]["name"]) ){
					$array[$key] = $_FILES[$key];	
					copy($_FILES[$key]["tmp_name"], "../../../images/generations/{$_FILES[$key]["name"]}");
				}
			}else{
				if( !empty($_REQUEST[$key]) ){
					$array[$key] = $_REQUEST[$key];			
				}
			}
			
		}
		
		$_SESSION["draganddrop"] = $array;

		$response["draganddrop"] = "success";
			
			
		
		
	}else{
	
		$response["draganddrop"] = "errors";


	}


	echo json_encode($response);




?>