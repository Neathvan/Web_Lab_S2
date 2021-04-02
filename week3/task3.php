<!-- Lonh Vanneath M2 -->

<?php 
function sum(int $a, int $b, int $c = null, int $d = null){
    $sum = $a + $b + $c + $d;
    return $sum;
}
echo "2 + 3 = " . sum(2, 3) . "<br>";
echo "2 + 3 + 4 = " . sum(2, 3, 4) . "<br>";
echo "2 + 3 + 4 + 5  = " . sum(2, 3, 4, 5);
?>
