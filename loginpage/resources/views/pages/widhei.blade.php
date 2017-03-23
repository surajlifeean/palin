<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
	$(document).on('mousemove',function(e){
	$('#x').html("x:"+e.pageX)
	$('#y').html("y:"+e.pageY)


	var txt1=$(document).width();
	var txt2=$(document).height();
	$('#coords').html(txt1+","+txt2);

	if(e.pageX==0 || e.pageX==txt1-1 || e.pageY==0 || e.pageY==txt2-1)
		alert("cheating not allowed");
   });
	



});

	
</script>
</head>

<body>

 
	<div id="coord">
	  <p id="x"></p>
	  <p id="y"></p>
	  <p id="coords"></p>

	  <p id="co"></p>
	  
	</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


