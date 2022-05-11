<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP BASIC COURSE</title>
	<!----------Bootstrap link -------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!---------css link------>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">PHP <span class="text-info">COURSE</span></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-----------PHP Heading-------------->
<h1 class="text-center text-info">PHP Basic Course </h1>
<div class="border border-info w-75 mx-auto bg-info rounded">
	<h1 class="text-center text-white mb-5">PHP FUNDAMENTAL OUTLINE</h1>
	<ol>
		<li>comment</li>
		<li>variable</li>
		<li>echo/ print</li>
		<li>data type</li>
		<li>string</li>
		<li>number</li>
		<li>const</li>
		<li>math</li>
		<li>constant</li>
		<li>operator</li>
		<li>if else .. elseif</li>
		<li>switch</li>
		<li>loop</li>
		<li>function</li>
		<li>Array</li>
		<li>super global</li>
	</ol>
</div>

<!------------php comment------------>
<div class="container-fluid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-5 mt-3 ">
	<!--------php comment--------->
<div class="card bg-warning " >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Commnet</span>(/* code .........*/) </h4>
	<p>we can write single line comment using (//code ....) double slash.
		we can write multiple line code using start with(slash start/* ) end with (slash star */) </p>
  </div>
</div>

<!----------php variable-------->
<div class="card bg-warning" >
  <img src="images/variable.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body mt-4">
	  <h4><span class="text-danger">Variable</span>($any name) </h4>
	<p>variable start with $ we can write variable using $anyName</p>
	<h3>$name = "Hello Bro"; <br> echo $name</h3>
  </div>
</div>

<!---------------php echo / print----------------->
<div class="card bg-warning">
  <img src="images/echo-print.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Echo</span>/ Print </h4>
	<p>echo can take two or more variable or variable value. On the other hand print can take one or single value or variable</p>
	<h3><span class="text-danger">Echo</span> "My name is sanjoy","Im form Banglasesh"</h3>
	<h3><span class="text-danger">Print </span>can take single variable or value</h3>
  </div>
</div>
<!----------data type -------------->
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Data Type</span> </h4>
	<ol>
		<li>String:  echo "I love php"; </li>
		<li>Integer menas fullNumber forExample 10, 20, 50;</li>
		<li>Integer: $a = 10; echo $a;</li>
		<li>Float: $a = 10.6; echo $a</li>
		<li>Boolean: $a = true; echo $a</li>
		<li>Array: $name = array("Rahim", "Karim","Simul"); var_dump($name)</li>
		<li>Object :  class className{ function functionNameOne() { return "Hello php"}; function functionNameTwo() {echo $this -> functionNameOne}} $anyName = new className(); $anyName ->functionNameTwo();</li>
		<li>Null: $dream = null; var_dump($dream)</li>

	</ol>
  </div>
</div>
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Components</span> </h4>
	<p>components are start with with define()function <strong>Syntax:</strong>define("name", "value", case-sensitive) <br>
	<b>Example</b> Syntax: define("Madaripur", "Sayed Abul Hossain College", true); <br>
	echo Madaripur;
</p>
<b><mark>const using global</mark> <br>
		<span>define("name", "Sanjoy Kundu", true)</span> <br>
		<span>function  functionName(){ return name;} functionName()</span>
</b>
  </div>
</div>
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Operator</span> </h4>
	<ol>
		<li>Arithmetic Operator (+, - , * /, %, **)</li>
		<li>Assignment Operator(+=, -=, *=, /=, *=, *==, %=)</li>
		<li>Comparison Operator(==, ===, !=, !==, <, >. >=, =<)</li>
		<li>Increment or Decrement (++, --)</li>
		<li>Logical Operator(and &&, or||, !, xor)</li>
		<li>String Operator</li>
		<li>Array Operator</li>
	</ol>
	<div class="bg-info p-2 w-100">
		<h5 class="text-danger text-center">Arithmetic Operator</h5>
		<div class="mt-2">
			$a = 10; <br>
			$b = 30; <br>
			$add = $a + $b; <br>
			$sub = $a - $b; <br>
			$multi = $a * $b; <br>
			$divi= $b / $a; <br>
			$modulas = $b % $a; <br>
			$expon = $a ** $b; <br>
			<mark>echo $add output is 40</mark><br> <br>
			<mark>echo $sub output is 20</mark> <br> <br>
			<mark> echo $multi output is 300</mark> <br> <br>
			<mark> echo $divi output is 3</mark> <br> <br>
			<mark> echo $modulus output is 0 </mark> <br> <br>
			<mark> echo $expon output is 10<sup>30</sup> </mark> <br> <br>
		</div>
	</div>
  </div>
  <!-----------Assignment Operator-------->
  <div class="bg-primary text-white p-2 mt-5">
	  <h5 class="text-warning text-center">Assignment Operator</h5>
	  <div>
		  $add= 20; <br>
		  $sub = 50;  <br>
		  $multi = 10; <br>
		  $div = 40; <br>
		  $expon = 3; <br>
		  $modu = 10; <br>
		  <br>
		  <hr>
		  $add += 10; <br>
		  echo $add; <br>
		  ouput = 20+ 10 = 30; <br>
		  <hr>
		  <br>
		  $sub -= 10; <br>
		  echo $sub; <br>
		  oupu  is = 50 - 10 = 40 <br>
		  <hr>
		  <br>
		  $multi *= 10; <br>
		  echo $multi; <br>
		  output is 10 * 10 = 100 <br>
		  <hr>
		  <br>
		  $div /= 10; <br>
		  echo $div; <br>
		  output is = 40 /10 = 4; <br>
		  <hr>
		  <br>
		  $expon **= 3; <br>
		  echo $expon; <br>
		  output is 3 *3 *3 = 27; <br>
		  <hr>
		  <br>
		  $mdou = %= 5; <br>
		  echo $modu; <br>
		  output = 10/5 = 0; <br>
		  <hr>  <br>
 </div>
  </div>
  <!-----------------Comparison Operator-------------->
  <div class="bg-primary p-2 mt-5">
	  <h5 class="text-white text-center">Comparison Operator</h5>
	  <div class=" text-white p-2">
		  $x = 10; <br>
		  $y = 40; <br>
		  var_dump($x == $y) <br>
		  output is false <br>
		  <hr>
		  <br>
		  $x = 20; <br>
		  $y = 40; <br>
		  var_dump($x !== $y); <br>
		  output is false; <br>
		  <hr>
		  <br>
		  $x = 50; <br>
		  $y = 40; <br>
		  var_dump($x > $y); <br>
		  output is true <br>
		  <hr>
		  <br>
		  $x = 50; <br>
		  $y = 40; <br>
		  var_dump($x < $y); <br>
		  output is false <br>
		  <hr>
		  <br>
	</div>
	</div>
		<!-------------- increment or decrement ----------------->
		<div class="bg-info mt-3">
			<h5 class="text-center text-white">Increment and Decrement</h5>
			<div>
				There are two type of increment. there are  
				<ol>
					<li>pre Increment(++$variable)</li>
					<li>post decrement(--$variable)</li>
				</ol>
				<ol>
					<li>post Increment ($variable++)</li>
					<li>post decrement ($variable--)</li>
				</ol>
				<br>
				<hr>
				<br>
				<h4>Pre increment($var ++)</h4>
				$number1 = 40; <br>
				$number2 = 50; <br>
				$increment = ++$number1; <br>
				echo $increment; <br>
				output is 41; <br> <br>
				<hr>
				<h4>Pre decrement($var --)</h4>
				$number1 = 40;  <br>
				$pre_decrement = --$number1; <br>
				echo $pre_decrement; <br>
				output is  39; <br>

				<hr>
				<br>
				<h4>Post Increment (++$var)</h4>
				<p>post increment first return variable value then added 1 by 1</p>
				$number1 = 10; <br>
				$post_increment = $number1 ++; <br>
				echo $post_increment; <br>
				output is 10; <br>
				<hr>
				<h4>Post decrement (-- $var)</h4>
				<p>post decrement first return present variable and then decrease the value form present value</p>
				$number2 = 20; <br>
				$post_decrement = --$number2; <br>
				echo $post_decrement; <br>
				output is 20; <br>
				<hr>
				<br>
		</div>
		</div>
		<!-------------- Logical Operator------------->
		<div class="bg-success mt-3 ">
			<h5 class="text-center text-white">Logical Operator(and, or, not, xor)<h5>
			<div class="text-white">
				$a = 40; <br>
				$b = 20; <br>
				if($a ==40 && $b ==20){ <br>
					echo  "You are pass"; <br>
				}else{ <br>
					echo "You are fail" <br>
				} <br>
				output You are pass <br>
				<hr>
				 <br>
			$c = 100; <br>
			$d = 90; <br>
			if($c !== $d){ <br>
				echo "Your  result doesn't match"; <br>
			} <br>
			else{ <br>
				echo "You are pass"; <br>
			} <br>
			output is Your result is doesnt match; <br> <hr> <br>
			<P>xor define that when we can see our result is true then we will be gate false value other wise when result will be false will be true then we will be get true value </P>
			$a = 100; <br>
			$b = 30; <br>
			if($a ==200 b== 30){ <br>
				echo "You are write"; <br>
			} <br>
			else{<br/>
			echo "You are wrong"; <br>
			} <br>
			output is you are wite; <br>
			<hr>
			<br>
		</div>
		</div>
		<!------------ string ------------>
		<div class="bg-info mt-3 ">
		<h4 class="text-center text-white">String Operator</h4>
		<div>
			<h4>Concatination with string</h4>
			$name = "I am Sanjoy Kundu"; <br>
			$form = "Im form Bangladesh"; <br>
			echo $name .$form; <br>
			output is i am Sanjoy Kundu. Im form Bangladesh; <br> 
			<hr>
			<br>
			<h6>Concatination Assignment Operator </h6>
			$name = "HM Milon"; <br>
			$Occupation = "Student"; <br>
			$name .= $Occupation; <br>
			echo $name; <br>
			output is HM Milon Student <br>
			<hr>
			 <br>

		</div>
		</div>

		<!----------------Array Operator--------------->
		<div class="bg-primary mt-3">
			<h4 class="text-center text-primary">Array Operator</h4>
			<p>Array are written with key and vaue , key and value are written into <div class="text-white p-3">
			string with this sign (=>)</p>
			<mark>Sytax: ("key" => "value")</mark> <br>
			$country = array ( <br>
				"name" => "Bangladesh", <br>
				"capital" => "Dhaka", <br>
				"Religion" => "Hindu, Muslim" <br>
			); <br>
			$country2 = array( <br>
				"name" => "India", <br>
				"capital" => "Delli" <br>
			); <br>
			var_dump($country + $country2); <br>
			<br> <hr>
			</div> 
		</div>

		<div class="bg-info p-1 mt-3">
			<!-----------Indential Operator --------->
			<h4 class="text-white text-center">Indential Operator (===)</h4>
			<div >
			$a = array( <br>
			"country" = "Bangladesh", <br>
			"capital" = "Dhaka" <br>
			);
			$b = array( <br>
			"country" => "Bangladesh",
			"capital" => "Dhaka"	 
			); <br>
			$var_dump($a === $b) <br>
			<b>Result will be show True </b> <br>
			cause variable $a and variable $b all value is same , <br>
			if value is diffenent then output is false; <br>
			<hr>
			<br>
			<h5 class="text-center ">Different Value </h5>
			$e = array( <br>
			"color" = "Blue", <br>
			"address" = "Dhaka" <br>
			); <br>
			$f = array( <br>
			 "color" = "red", <br>
			 "address" = "Madaripur" <br>
			  ) <br>
			  var_dump($e === $f); <br>
			  Result will be false cause var $e and $var f  value are not same; <br>
			  <hr>
			  <h4>Not Indential Operator (!==)</h4>
			  $g = array( <br>
			 	"a" = "apple" <br> 
			  ); <br>
			  $h = array( <br>
			 	$b = "Banana" <br> 
			  ); <br>
			  var_dump($g !== $h); <br>
			  <b>Output is true</b> caus variable $g and variable $y are not same value; <br>
			  <hr>
		</div>
</div>
<div class="bg-primary mt-4 p-2">
	<h5 class="text-center">Conditional Statement</h5>
	<div class="text-white">
		<h5>if and else</h5>
		$x = 10; <br>
		if($x > 20) { <br>
		echo "10 is bigger this 20"; <br>
		} <br>
		else{ <br>
		echo "10 is smaller than 20"; <br>
		} <br>
		<b>Ouptu is 10 is smaller than 20</b> <br>
		<hr> <hr>
		<h5 class="text-center">if , else and elseif</h5>
		$number = 50; <br>
		if($number > 60){ <br>
			echo "50 is bigger than 60"; <br>
		} <br>
		elseif($number > 70){ <br>
		echo "50 is bigger than 70" <br>
		} <br>
		else{ <br>
		echo "50 is smaller than 60 and 70"; <br>
		} <br>
		<b>Output is 50 is smaller than 60 and 70</b> <br>
		<hr>

	</div>
</div>
<!---------- switch ------------->
		<div class="bg-info mt-3 p-3">
			<h5 class="text-center text-white">switch</h5>
			<div>
				$favteam = "Bangladesh"; <br>
				switch($favTeam){ <br>
					case "Bangladesh": <br>
					echo "Your favoureite team is Bangladesh"; <br>
					break; <br>
					<br>
					
					case "India" : <br>
					echo "Your favourite team is India"; <br>
					break; <br>
					<br>
					case "Australia" : <br>
						echo "Your favourite team is Australia"; <br>
						break; <br>
						<br>
						default : <br>
						echo "You dont like cricket"; <br>
					} <br>
						<br>
						<b>Output  your favourite team is bangladesh</b> <br>
						<hr> 
						<br>
			</div>
		</div>
		<!----------------While loop-------------->
		<div class="bg-danger mt-3">
			<h5 class="text-center"> While Loop</h5>
			<div class="p-3 text-white" >
			first set initial value  <br/>
			then write while condition <br>
			and then echo and set increment or decrement value; <br>
				$a = 2; <br>
				while($a <= 10){ <br/>
					echo "The number is ".$a; <br>
					$a++; <br>
				} <br>
				<b>Output is 1 to 10</b>
				<br>
				 <hr>
				 <!---------for loop----------->
				 <h5 class="text-center">For Loop</h5>
				 <div class="bg-primary p-3">
					 for($i = 0; $i <= 10; $i++){ <br/>
						echo "The number is ". $i; <br>
					}
				 </div>
				 <!--------foreach loop----------->
				 <div class="bg-info mt-3">
					 <h5>Foreach loop</h5>
					 <p>Foreach fuction use only array </p>
					 <div class="p-3">
						 $names = array("sumon", "kiron", "mala", "Rifat"); <br>
						 foreach($names as $name){ <br>
							echo "My name is ".$name.'<>' ; <br>
						}
					 </div>
				 </div>
			</div>
		</div>

		<!-------------function-------------->













		
	</div>
</div>


<?php 
	$favTeam = "Bangladesh";
	switch($favTeam){
		case "Bangladesh":
			echo "Your Favourite team is Bangladesh";
			break;

		case "India":
			echo "Your favourite team is India";
			break;

		case "Australia":
			echo "Your favourite team  is Australia";
			break;

			default :
			echo "You dont like Cricket";
	}

?>

<?php 
	$a = 1;
	while($a <= 10){
		echo "The number is ".$a.'<br/>';
		$a++;
	}

?>

<?php 
	for($i = 0; $i<= 10; $i++){
		echo $i.'<br/>'; 
	}

?>

<?php 
	$names = array("sumon", "kiron", "mala", "emon");
	foreach($names as $name){
		echo "My name is ".$name.'<br/>';
	}

?>





<!---------js link---------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>