<!-- Lonh Vanneath M2 -->
<?php 
$array = array(2, 3, 4, 6, 7, 9, 11, 20); 
print_r (array_filter($array, "arrow")); 
function arrow($array) 
{ 
    if($array%2 !=0) 
       return FALSE; 
    return TRUE;  
} 

  
?>