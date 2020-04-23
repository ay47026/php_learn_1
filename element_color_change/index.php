<!DOCTYPE html>
<html>
<head>
	<title>color</title>
</head>
<body style="background-color: pink">


<h1 class="target">neetu yadav</h1>
<h2 class="target">title</h2>
<h1 id="abi" >abhishek yadav</h1>

<div class="div1">
	<div class="div2">
		<div class="div3"><span id="abhiiiii">
			rahul yadav
		</span></div>
	</div>
</div>


<input type="color" name="color" id="color">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script >
  	$(document).ready(function(){

  		// find out the clicked element class or id
        // $(document).click(function(event){
        //   alert(event.target.id+" and "+$(event.target).attr('class'));
        // });


         $(".target").click(function(event){
             var element = event.target;
                 // find out the indexing number of the class
                var in_number = $(element).index();
                alert(in_number);
                // store the index number in the sessionstorage
                sessionStorage.setItem("element_class_index_number",in_number); 
            
        });
          $("#color").on("change",function(){
          	     var color = this.value; 
                var in_number = Number(sessionStorage.getItem("element_class_index_number"));
                var element  = document.getElementsByClassName("target")[in_number];
                element.style.color = color;
               
                sessionStorage.removeItem("element_class_index_number");

            
             
    
                // element.style.color =color;


             });
  	});



  </script>
</body>
</html>