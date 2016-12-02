<?php
	
	function make_seed() {
	  list($usec, $sec) = explode(' ', microtime());
	  return (float) $sec + ((float) $usec * 100000);
	}
	
	if($key_words["how"] == 1 && $key_words["are"] == 1 && $key_words["old"] == 1 && $key_words["you"] == 1) {
		echo "I'm 42 years old.";
	}
	else if($key_words["how"] == 1 && $key_words["are"] == 1 && $key_words["you"] == 1) {
		echo "I'm fine thank you.";
	}
	else if($key_words["what"] == 1 && $key_words["is"] == 1 && $key_words["your"] == 1 && $key_words["name"] == 1) {		
		echo "My name is Génie de Pétra.";
	}
	else if($key_words["where"] == 1 && $key_words["am"] == 1 && $key_words["I"] == 1) {		
		echo "You are on our 404 webpage ! Hm... I guess you're lost then.";
	}
	else if(($key_words["help"] == 1 && $key_words["me"] == 1) || $key_words["help"] == 1) {		
		echo "You can go to a safe place here : <a href=\"http://www.google.com/\">SAFE PLACE</a>";
	}
	else if(($key_words["hi"] == 1 || $key_words["hey"] == 1 || $key_words["hello"] == 1 || $key_words["morning"] == 1 || $key_words["evening"] == 1)) {		
		echo "Hey there";
	}
	else if($key_words["bye"] == 1) {		
		echo "Good bye, I hope you enjoyed our chat !";
	}
	else if(($key_words["introduce"] == 1 && $key_words["yourself"] == 1) || ($key_words["who"] == 1 && $key_words["are"] == 1 && $key_words["you"])) {		
		echo "";
	}
	else if($key_words["joke"] == 1) {
		srand(make_seed());
		$var = rand(1,5);
		echo "Sure : ";
		switch($var) {
			case 1:
				echo "Can a kangaroo jump higher than a house? Of course, a house doesn’t jump at all.";
			break;
			case 2:
				echo "My dog used to chase people on a bike a lot. It got so bad, finally I had to take his bike away.";
			break;
			case 3:
				echo "How do you tell that a crab is drunk? It walks forwards.";
			break;
			case 4:
				echo "What goes up and down but never moves? ... The stairs!";
			break;
			case 5:
				echo "I used to think the brain was the most important organ. Then I thought, look what’s telling me that.";
			break;
		}
		echo " Ha ha ha.";
	}
	else if((	$key_words["wiki"] == 1 || $key_words["wikipedia"] == 1 || $key_words["internet"] == 1 || $key_words["google"] == 1 || $key_words["web"] == 1) ||
				$key_words["can"] == 1 && $key_words["you"] == 1 && $key_words["tell"] == 1 && $key_words["me"] == 1 && $key_words["more"] == 1 && $key_words["about"]) {				
		
		// test langue
		$options = array(
			'http' => array(
				'header'  => "Ocp-Apim-Subscription-Key: 1e607a57b4f044c5a9268643c48780a9\r\nContent-type: application/json\r\nAccept: application/json\r\n",
				'method'  => 'POST',
				'content' => $data_phrases
			)
		);
		
		$context  = stream_context_create($options);		
		$result = file_get_contents($url_phrases, false, $context);		
		$final_result = json_decode($result);
		
		$quit = 1;
		$word = "";
		foreach($final_result->documents[0]->keyPhrases as $key => $value) {
			$quit = 1;
			foreach($dico as $word1 => $boolean) {
				if(strcasecmp($value, $word1) == 0) {
					$quit = 0;
					break;
				}
			}
			
			if($quit == 1) {
				$word = $value;
				break;		
			}
		}		
		echo "Yes of course, here is what i found on Wikipedia for $word : ";
		
		// rechercher on wiki// test langue
		$result = file_get_contents($url_wiki . $word);
		$final_result2 = json_decode($result);
		
		foreach($final_result2->query->pages as $k) {
			echo "$k->extract";
		}
	}
	else {
		echo "Sorry I didn't understand.";
	}

?>