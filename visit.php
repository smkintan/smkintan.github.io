<html>
<head>
<title> Cara Membuat Visitor Counter Website di PHP</title>
</head>
<body>
<FONT FACE="Comic Sans MS" size='6' color='brown'>Cara Membuat Visitor Counter Website di PHP</font></br></br></br>
<?php
$filename = 'counter.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	
 
echo 'Total pengunjung: '.file_get_contents($filename);	
?></br></br>
<FONT FACE="Comic Sans MS" size='4' color='black'>Pengunjung Anda akan bertambah 1, ketika Anda me-refresh halaman.</font>
</body>
</html>
