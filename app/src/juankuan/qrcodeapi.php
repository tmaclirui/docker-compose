<?php 
	if($_POST['flag']){
		$img = $_POST['flag'] == 1 ? "http://59.110.9.25/juankuan/images/zfb.jpg" : "http://59.110.9.25/juankuan/images/wx.jpg";
		$key = "20161212109988";
		$url = "http://api.wwei.cn/dewwei.html";
	    $data = array(  
	        'data'=>$img,  
	        'apikey'=>$key
	    ); 
	    function postData($url, $data)  
	    {  
	        $ch = curl_init();  
	        $timeout = 300;   
	        curl_setopt($ch, CURLOPT_URL, $url);  
	        curl_setopt($ch, CURLOPT_POST, true);  
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
	        $handles = curl_exec($ch);  
	        curl_close($ch);  
	        return $handles;  
	    }  
	    $json_data = postData($url, $data);  

	    exit($json_data);  
	      
	}
 ?>