<!DOCTYPE html>
<html>
<head>
	<title></title>



	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>


	<input type="email" name="email" id="username">
<button>Request php page</button>
<p></p>
<script > 
$(document).ready(function () {
	$("button").click(function(){
		var username=$("#username").val();
	
  //this is the syntex of ajax in jquery		
               $.ajax({
               	//by request by get 
              // type: "get",
               //url :"result.php?email="+username,
               //request by post
               type : "post",
               url : "result.php",
               data : {
               	email : username
               },
               success :function(response){

                 $("p").html(response);
               }
           });
	});

});
</script>
</body>
</html>