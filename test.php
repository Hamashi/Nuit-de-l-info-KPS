<?php
	
	$url_sentiment = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
	$url_languages = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/languages';
	$url_phrases = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/keyPhrases';
	$url_wiki = 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=';
	
	$data_languages = '
			{
			  "documents": [
				{
				  "id": "string",
				  "text": "' . $_GET['text'] . '"
				}
			  ]
			}
		';
		
	$data_phrases = '
			{
				"documents": [{
					"language": "en",
					"id": "1",
					"text": "' . $_GET['text'] . '"
				}]
			}
		';
	
	if(isset($_GET['text']) && !empty($_GET['text'])) {	
		
		// test langue
		$options = array(
			'http' => array(
				'header'  => "Ocp-Apim-Subscription-Key: 1e607a57b4f044c5a9268643c48780a9\r\nContent-type: application/json\r\nAccept: application/json\r\n",
				'method'  => 'POST',
				'content' => $data_languages
			)
		);
		
		$context  = stream_context_create($options);		
		$result = file_get_contents($url_languages, false, $context);		
		$final_result = json_decode($result);
		
		if($final_result->documents[0]->detectedLanguages[0]->name != "English") {
			echo "Hey I'm sorry I don't speak " . $final_result->documents[0]->detectedLanguages[0]->name . " yet, only English.";
			exit;
		}
		
		// test sujet		
		$text = explode(" ", $_GET['text']);
		
		include 'key_words.php';
		
		foreach($text as $key => $value) {
			foreach($key_words as $word1 => $boolean) {
				if(strcasecmp($value, $word1) == 0) {
					$key_words[$word1] = 1;
				}
			}
		}
		
		include 'analyse.php';
		
		/*foreach($text as $i => $key) {
			echo $i.' '.$key;
		}*/
	}
	
	
?>