<?php
$M1["m1"]["id"]="modelo 1";
$M1["m1"]["nombre"]="Volvo";
$M1["m1"]["ventas"]="22";
$M1["m1"]["stock"]="15";


$M1["m2"]["id"]="modelo 2";
$M1["m2"]["nombre"]="BMW";
$M1["m2"]["ventas"]="15";
$M1["m2"]["stock"]="13";


$M1["m3"]["id"]="modelo 3";
$M1["m3"]["nombre"]="Saab";
$M1["m3"]["ventas"]="5";
$M1["m3"]["stock"]="2";

$M2["m1"] = array("id" => "modelo1",
				"nombre" => "Volvo",
				"ventas" => 22,
				"stock" => 15);


$M2["m2"] = array("id" => "modelo2",
				"nombre" => "BMW",
				"ventas" => 15,
				"stock" => 12);


$M2["m3"] = array("id" => "modelo3",
				"nombre" => "Saab"
				"ventas" => 5,
				"stock" => 2);


$M3 = array(array("id" => "modelo1",
				"nombre" => "Volvo",
				"ventas" => 22,
				"stock" => 15
	),array("id" => "modelo2",
				"nombre" => "BMW",
				"ventas" => 15,
				"stock" => 12
	),array("id" => "modelo3",
				"nombre" => "Saab"
				"ventas" => 5,
				"stock" => 2));

$coches = array(array("Modelo 0", "Volvo", 22, 18),
				array("Modelo 1", "BMW", 15, 13),
				array("Modelo 2", "Saab", 5, 2),
				array("Modelo 3", "Land Rover", 17, 15));
echo sizeof($coches)."<br>";
echo sizeof($coches[0])."<br>";
for ($i = 0; $i < sizeof($coches) ; $i++) { 
	for ($j = 0; $j < sizeof($coches); $j++){
		if ($coches[$i][2] > 15) {
		echo $coches[$i][$j]."<br>";
		}
	}
	echo "--------------------<br>";
}
?>