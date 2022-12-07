<?php
$im = imagecreatefromjpeg("IMG1635881607.jpg");
$rgb = imagecolorat($im, 5, 5);

$colors = imagecolorsforindex($im, $rgb);
echo $colors['red']+"\n";
echo $colors['green']+"\n";
echo $colors['blue'];
$searchColor = imagecolorclosest($im, $colors['red'], $colors['green'], $colors['blue']);
$searchColor= imagecolorsforindex($im,$searchColor);
echo "\n" +$searchColor['red'];
echo "\n" +$searchColor['green'];
echo "\n" +$searchColor['blue'];
?>