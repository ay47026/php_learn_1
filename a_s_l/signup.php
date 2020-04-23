<!DOCTYPE html>
<html>
<head>
	<title>a_signup</title>
	    <script src="https://kit.fontawesome.com/e8019bc349.js"></script>
<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
<form>
	<fieldset>
     <legend>sign up</legend>

    <label for="fullname">fullname</label><br>
<input type="text" required="required" name="fullname" id="fullname"><br>
<label for="email">email</label><br>
<input type="email" required="required" name="email" id="email"><span id="massage"></span><br>
<label for="password">password</label><br>
<input type="password" required="required" name="password" id="password"><br>
<button type="submit" id="submit" name="submit" disabled="disabled" >sign up</button>
<span id="s-massage"></span>


	</fieldset>

</form>


<script>
	
	$(document).ready(function(){
      $("#email").on("change",function(){

      	 $.ajax({
           type : "POST",
           url :"result.php",
           data : {
           	email : $(this).val()
           },
           beforeSend : function(){
                     $("#massage").html("<i class='fa fa-spinner fa-spin'></i>")
           },
           success : function(response){
           	//trim() is used for the trim the void space in string which is comes from php page response
           	if(response.trim() == "user already exist"){
                    $("#massage").html("exist");
                     $("#submit").attr("disabled","disabled");
           	}else{

                    $("#massage").html(" not exist");
                     $("#submit").removeAttr("disabled");
           	}
           	
           }
       });
      });
      $("form").submit(function(e){
      	e.preventDefault();
         $.ajax({
             type : "POST",
             url :"register.php",
             data :{
                     fullname:$("#fullname").val(),
                     password:$("#password").val(),
                     email:$("#email").val(),
             },
              beforeSend : function(){
                     $("#s-massage").html("<i class='fa fa-spinner fa-spin'></i>")
           },
             success : function(response){
             	$("#s-massage").html(response);
             }
         });
      });


	});
</script>

</body>
</html>