<html>  
<head>
<title>GPA CALCULATOR </title>
</head>
<body>  
<form method="post">  
Grade 1:  
<input type="text" name="g1" />  
Credit 1  
<input type="number" name="c1" /><br>  
Grade 2:  
<input type="text" name="g2" />  
Credit 2  
<input type="number" name="c2" /><br>  
Grade 3:  
<input type="text" name="g3" />  
Credit 3  
<input type="number" name="c3" /><br>  
Grade 4:  
<input type="text" name="g4" />  
Credit 4  
<input type="number" name="c4" /><br>  
Grade 5:  
<input type="text" name="g5" />  
Credit 5  
<input type="number" name="c5" /><br>  
Grade 6:  
<input type="text" name="g6" />  
Credit 6  
<input type="number" name="c6" /><br>
 Grade 7:  
<input type="text" name="g7" />  
Credit 7   
<input type="number" name="c7" /><br> 
 Grade 8:  
<input type="text" name="g8" />  
Credit 8  
<input type="number" name="c8" /><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $g[1] = $_POST['g1'];  
        $c[1] = $_POST['c1'];
		
		$g[2] = $_POST['g2'];  
        $c[2] = $_POST['c2'];
		
		$g[3] = $_POST['g3'];  
        $c[3] = $_POST['c3'];
		
		$g[4] = $_POST['g4'];  
        $c[4] = $_POST['c4'];
		
		$g[5] = $_POST['g5'];  
        $c[5] = $_POST['c5'];
		
		$g[6] = $_POST['g6'];  
        $c[6] = $_POST['c6'];
		
		$g[7] = $_POST['g7'];  
        $c[7] = $_POST['c7'];
		
		$g[8] = $_POST['g8'];  
        $c[8] = $_POST['c8'];
	
for ($z=1;$z<=8;$z++){	
	if ($g[$z]=="O"){
			$g[$z]=10;
	}
	if ($g[$z]=="A+"){
			$g[$z]=9;
	}
	if ($g[$z]=="A"){
			$g[$z]=8;
	}
	if ($g[$z]=="B+"){
			$g[$z]=7;
	}
	if ($g[$z]=="B"){
			$g[$z]=6;
	}
	if ($g[$z]=="C"){
			$g[$z]=5;
	}
	if ($g[$z]=="P"){
			$g[$z]=4;
	}
	
}
$grade=0;
		for($q=1;$q<=8;$q++){
			$grade+=$g[$q]*$c[$q];
	}
$credit=0;
		for($w=1;$w<=8;$w++){
			$credit+=$c[$w];
	}
$gpa=$grade/$credit	;
	
	echo "Your GPA is: ".$gpa;   
}  
?>  
</body>  
</html>  