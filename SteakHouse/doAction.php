<?php 


print_r($_FILES);

$filename =$_FILES['myfile']['name'];

$type =$_FILES['myfile']['type'];


$tmp_name =$_FILES['myfile']['tmp_name'];


$error =$_FILES['myfile']['error'];

$size =$_FILES['myfile']['size'];





if ($error==UPLOAD_ERR_OK) {




if(is_uploaded_file($tmp_name)){
$destination='uploads/'.$filename;
print_r($destination);
	if (move_uploaded_file($tmp_name, $destination)) {
		$mes ="gogogo";
		# code...
	}else{

		$mes ="fail";
	}
	# code...
}else{

	$mes=" wenjian buneng http post  way upload";

}
}else{


/*	switch ($error) {
		case 1:
			# code...
		$mes =" chaoguo eizhi wenjian da xiao";
			break;
		case 2:

$mes =" chaoguo biandan wenjian da xiao";
			# code...
			break;
			case 3:
				# code...
			$mes "wenjian benfe bei shangchuan";
				break;

				case 4:
					# code...

				$mes  ="meiyou bei shangchuan";
					break;
					case 6:

$mes ="no temep mulu";
						# code...
						break;
											case 7:

$mes ="wenjian bukexie";
						# code...
						break;
											case 8:

   $mes ="youyi PHP  de kuozhan chengxu zhongduan le wenjian shangchuan";
						# code...
						break;
		default :

			# code...
			break;*/
	//}

}
	echo $mes;


