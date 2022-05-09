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
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Commnet</span>(/* code .........*/) </h4>
	<p>we can write single line comment using (//code ....) double slash.
		we can write multiple line code using start with(slash start/* ) end with (slash star */) </p>
  </div>
</div>
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Commnet</span>(/* code .........*/) </h4>
	<p>we can write single line comment using (//code ....) double slash.
		we can write multiple line code using start with(slash start/* ) end with (slash star */) </p>
  </div>
</div>
<div class="card bg-warning" >
  <img src="images/comment.jpg" class="card-img-top w-100" alt="..." >
  <div class="card-body">
	  <h4><span class="text-danger">Commnet</span>(/* code .........*/) </h4>
	<p>we can write single line comment using (//code ....) double slash.
		we can write multiple line code using start with(slash start/* ) end with (slash star */) </p>
  </div>
</div>

<!---------------------------->

</div>








<!---------js link---------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>