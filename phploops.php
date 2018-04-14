<?php
$cars=array
('bmw' => array('modal1' => 'b1','modal2' =>'b2','modal3' =>'b3'),
'tata' => array('modal1' => 't1','modal2' => 't2','modal3' =>'t3'),
'maruti' => array('modal1' => 'm1','modal2' => 'm2','modal3' =>'m3'));


foreach ($cars as $carBrand => $modals) {

	foreach ($modals as $modal => $modalName) {
 echo 'car brand Name is '.$carBrand.' and car modal is '.$modalName." <br>";
	}
}
 
 

?>