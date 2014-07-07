<?php
	if(isset($_POST["cName"],$_POST["cEmail"],$_POST["cSub"],$_POST["cMsg"])){
		//echo "no";
		$cName = $_POST["cName"];
		$cEmail = $_POST["cEmail"];
        $cSub = $_POST["cSub"];
		$cMsg = $_POST["cMsg"];
		$result = preg_match('/^[A-Za-z0-9\_\-\.\+\%]+[\@]{1}[A-Za-z0-9\.\-]+[\.]{1}[A-Za-z0-9\.\-]+$/',$cEmail);
		if(trim($cName)=="")
			echo "no";
		elseif(trim($cEmail)=="")
			echo "no";
		elseif(!$result)
			echo "no";
		else{
			$subject="Email from my website: ". $cSub;
			$to="jamie.xiaojie.duan@gmail.com";
			$mailRes = mail($to,$subject,$cMsg,"From: ". $cName. " ". $cEmail);
			echo $mailRes;
		}
	}
?>
