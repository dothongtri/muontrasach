<?php
// init the image objects
$image1 = new imagick();
$image2 = new imagick();

// set the fuzz factor (must be done BEFORE reading in the images)
$image1->SetOption('fuzz', '2%');

// read in the images
//$image1->readImage("C:\\xampp\\htdocs\\DBandroid\\3.PNG");
$image2->readImage("C:\\xampp\\htdocs\\DBandroid\\dqhc2.jpg");
$image1->readImage("C:\\xampp\\htdocs\\DBandroid\\dqhc.jpg");
// compare the images using METRIC=1 (Absolute Error)
$result = $image1->compareImages($image2, 1);

// print out the result
echo "The image comparison 2% Fuzz factor is: " . $result[1];
?>