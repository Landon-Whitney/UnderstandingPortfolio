<?php

//example 1
$q = filter_input(INPUT_GET, 'value');
$answer = "";

$w3schools = "This text was brought to you by AJAX.";
$how_often = "The range for normal poop varies from several times a day to once every three days but the average person poops once a day. As long as your poop is a good consistency (soft and smooth, without being watery) and you do not feel any long term discomfort before or after, there is no reason to think you are not pooping enough.";
$colon_cleaning = "Although proponents of cleanses suggest that a cleanse can help dislodge waste from the colon walls, thereby removing potential toxins, there is no scientific evidence that this claim is true. In fact, most doctors would not recommend a colon cleanse and many suggest that damage a cleanse can cause to a colon is much more real than the claimed benefit.";
$floating_poop = "Poop floats because there is enough gas (flatulence) to make it bouyant. Floating poop itself is not indicative of health problems but in some cases can be a sign of gastroinstestinal infection or of malabsorption. If you have a fever, dizziness, or are losing weight rapidly, seek help from a doctor.";
$probiotics = "Probiotics are the micro-organisms that can be considered good for your intestinal health. A normal, healthy person has bacteria in the large intestine. Certain illnesses and antibiotics can diminish these bacterial numbers and then allow for the colonization of more harmful bacteria. In theory eating foods with probiotics can improve digestional health by 
promoting good strains of bacteria over adverse strains. Unfortunately, the science for probiotics is still very rocky. Only some strains of bacteria can survive the acid environment of the stomach to even reach the large intestine. Most yogurts do not naturally contain strains that can reach the large intestine undigested. And then, the bacterial strains need to thrive 
in the large intestine's anaerobic conditions to make a lasting difference. Most probiotics contain only aerobic bacteria. And finally, the bacteria in probiotics make up a very small part of a normal large intestine's ecosystem. Most of the beneficial bacterial strains are not contained in probiotics. That said, can aerobic probiotics contained in some yogurts and fermented foods be benefical? Yes, absolutely. However, to 
contribute to intestinal health, probiotics like these must be taken continually, preferentially with meals. In one study, probiotics stabilized the stool of patients with irritable bowel syndrome by 50%, helping to prevent both constipation and diarrhea.";

if ($q !== "") {
	if ($q == "w3schools") {
		$answer = $w3schools;
	}
	else {
		switch ($q) {
	 	case "how_often":
	 		$answer = $how_often;
	 		break;
	 	case "cleaning_colon":
	 		$answer = $colon_cleaning;
	 		break;
	 	case "floating_poop":
	 		$answer = $floating_poop;
	 		break;
	 	case "probiotics":
	 		$answer = $probiotics;
	 		break;
	 	default:
			break;
		}
	}
	echo $answer;
} 
//example 2
if(filter_input(INPUT_GET, 'name') !== null){
	$carname = filter_input(INPUT_GET, 'name');
	$carmake = filter_input(INPUT_GET, 'make');
	$carmodel = filter_input(INPUT_GET, 'model');
	$caryear = filter_input(INPUT_GET, 'year');
	$carmileage = filter_input(INPUT_GET, 'mileage');
	
	$car = array("name" => $carname, "make" => $carmake, "model" => $carmodel, "year" => $caryear, "mileage" => $carmileage);


	if ($carlot == null) {
		$carlot = [];
	}

	array_push($carlot, $car);
	
	/*$cartxt = "";
	$arrlength = count($carlot);
	for($i = 0; $i < $arrlength; $i++) {
		$cartxt += $carlot[$i]["name"] + "&#39s " + $carlot[$i]["year"] + " " + $carlot[$i]["make"] + " " + $carlot[$i]["model"] + " has " + $carlot[$i]["mileage"] + " miles on it." + "</br>";
	}*/
	echo json_encode($carlot);
}
//else {
	//$answer = "System Failure";
	//echo $answer;
//}
	

?>