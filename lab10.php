<html>


<body style="background-color:pink; font-size:20px; color:blue;">

<h1 style="text-align:center;">  Definitions <h1>




 <?php
 
 
 
$var= $_GET["key"];
$var=strtoupper($var);
$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); // decode the JSON into an associative array




   
if (array_key_exists($var,$json))
  {
  echo "Definition: " . $json[$var];
  }
else
  {
	 $keys= array_keys($json); 
	  $total = count($keys);
	  
	  
	  
	
	  for($i = 0; $i < $total; $i++)
	  {
	$pos=  strpos($keys[$i],$var);
		if($pos>0)
		{ 
			echo "Word is  :"  .$keys[$i];
			echo "<br>";
			echo "Definition:  " .$json[$keys[$i]];
			echo "<br>";
		}
		
	  }
		if($pos==0)
		{
			echo "Word Doesnot exist";
			
		}
  }






?>
<br>
<br>
<a href ="lab10_html.php">  Back to Search  </a>
</body>


</html>