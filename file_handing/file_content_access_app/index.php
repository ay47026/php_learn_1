<!DOCTYPE html>
<html>
<head>

	<title>lichu framwork</title>
	    <meta lang="en-us">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       	<meta name="keywords" content="web design, web development, portfolio, search engine optimization, graphic design, website redesign, logo design  " />

		<meta name="description" content="Website Design ,Website Development , Responsive web design , Mobile website design , Website Redesign , best portfolio ,">

		<meta name="author" content="Abhishek yadav">
		<meta charset="utf-8">
		<link rel="shortcut icon" href="images/ti2.jpg" type="image/x-icon" />

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

<div class="jumbotron">
	<h2 class="text-center">my file app</h2>
	<div class="row p-0 m-0">
		<div class="col-md-2 p-3 border">
		<button class="w-100 btn btn-dark py-2 mb-3 tab" start="0" end="1">HOME</button>
		<button class="w-100 btn btn-dark py-2 mb-3 tab" start="3" end="4">COURSEE</button>
        <button class="w-100 btn btn-dark py-2 mb-3 tab" start="6" end="7">ABOUT</button>
		<button class="w-100 btn btn-dark py-2 mb-3 tab" start="9" end="10">CONTACT</button>
		<button class="w-100 btn btn-dark py-2 mb-3 tab" start="12" end="13">TERMS $ COND</button>
		</div>
<div class="col-md-10 p-3 border result">
		<h4>my homepage</h4>
		<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
	</div>
	
</div>




<!-- script links -->
 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<script>
	
	$(document).ready(function(){
	$(".tab").each(function(){
		$(this).click(function(){
			var start = $(this).attr("start");
			var end = $(this).attr("end");
			
			$.ajax({
                type :"POST",
                url : "result.php",
                data :{
                	start :start,
                	end :end
                },
                beforeSend : function(){
                	$(".result").html("please wait....")
                }
                success : function(response){
                	
                	$(".result").html(response);
                }
			});
		});
	});
	});
</script>
</body>
</html>