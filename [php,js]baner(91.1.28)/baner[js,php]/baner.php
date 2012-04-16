<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my banner</title>
<link type="text/css" rel="stylesheet" href="baner.css" />
<script type="text/javascript" src="baner.js" ></script>
</head>
<body>
<div class="contaner">
	<div class="baner">
    	<div class="scrol">
        	<?php 
				$d=dir('./images');
				while($f=$d->read()){
					if(strtolower(substr($f,-4))!='.jpg') continue;
					echo "<img src='images/$f' />";	
				}
			?>
		</div>
        <ul class="btn">
        	<?php
				for($i=1;$i<=$piclen;$i++){
					echo "<li></li>";	
				}
			?>	
        </ul> 
    </div>
    <div class="dokme">
		<input type="button"  id="back"  class="bak" onclick="backslid()"/>
        <input type="button"  id="next"  class="nxt" onclick="nextslid()"/>
    </div>   
</div> 
</body>           
</html>
