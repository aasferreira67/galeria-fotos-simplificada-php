<?php
    
    $pastas11 = "portfolio";
	
	$pasta1 = opendir($pastas11);
			 // $titulo = $pastas; 
			$fich = $pastas11 . "/";
	
	print "<div class='row' style='text-align:center;width:100%;' >";
	$linha = 0;
	$contador = 0;
	while ($file = readdir($pasta1)) {
		
		
		
		$filess = substr($file, -3,3); 

		if ($file != "." && $file != "..") {
		
		  if ($filess == "jpg" or $filess == "JPG" or $filess == "bmp" or $filess =="BMP" or $filess =="png" or $filess =="PNG") 
          {
			$linha = $linha +1;      
			$contador++;       
			$ficheiro[$contador] = $fich.$file; 
			
			 print "
			 		<div class='card col-md-2 transforma' >
      						<a href='".$fich.$file."'>
        					<img src='".$fich.$file."' alt='' 
							style='width:100%;'>
 					        </a>
					</div>";
	
			if ($linha >=5 ) {$linha = 0; print "</div><div class='row'>";} 
           }
        }
    }	
	print "</div>";

?>