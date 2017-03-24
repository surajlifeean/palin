
<!-- Latest compiled and minified CSS -->

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{!!Html::style('css/select2.css')!!}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



</head>

<body>








<?php

$arr=array("AL","WY");

print_r($arr);
	echo "<br>";
  ?>



<select class="js-example-basic-multiple" multiple="multiple">


  <option value="AL">Alabama</option>
  
  <option value="WY">Wyoming</option>

  <option value="Wk">cheening</option>

  <option value="Wz">fanting</option>
 
</select>


















</body>



















<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
crossorigin="anonymous"></script>

  {!!Html::script('js/select2.js')!!}

<script type="text/javascript">
$(document).ready(function() {
  $(".js-example-basic-multiple").select2();


});

  var $exampleMulti = $(".js-example-programmatic-multi").select2();


$('select').val({!! json_encode($arr) !!}).trigger("change");

</script>




