<html>
<?php 
    
    $city =strtolower($_POST['city']);
    
    if($city=='mumbai' or $city=='amritsar' or $city=='ajmer' or $city=='goa' or $city=='kutch' or $city=='jammu' or $city=='manali' or $city=='dharamshala' )
    {
     header("Location: ./$city.html");   
    }
    else if(empty($city))
    {
    	header("Location: ./index.html");
    }
    else
    {
         header("Location: ./sorry.html");
    }
?>

</html>
