<?php

error_reporting(0);

if(! $xml = simplexml_load_file('http://transfer.aoehost.de/recruiting-test/musicmoz.releases.xml')) {
	echo 'unable to load XML file from Web';
} else if (! $xml = simplexml_load_file('musicmoz.releases.xml')) {
	echo 'unable to load XML file from File System';
} else {
	echo 'XML file loaded successfully from file system', "\n\n";
	echo 'Generating a list of releases with more than 10 tracks and a release date before 01/01/2001 from Input XML File.', "\n\n";
}

$total = 0;

$outputxml = new DOMDocument('1.0', 'UTF-8');
$xmlRoot = $outputxml->createElement("matchingReleases");
$xmlRoot = $outputxml->appendChild($xmlRoot);


$query = $xml->xpath('/musicmoz/category/item');
while(list( , $node) = each($query)) {

	$datum = $node->releasedate;
	$title = $node->title;
	$title = str_replace("&aacute;", "a", $title);
	$tracks = $node->tracklisting;
	$anzahl = 0;

	foreach ($tracks->children() as $child) {
		$anzahl = $anzahl+1;
	}

	$ydate = substr($datum, 0, 4);
	$dateint = (int)$ydate;

	if($dateint < 2001 && $dateint != 0){

		if($anzahl > 10){
			$outputstring = "processing: Release Date: ". $datum. " Tracks: ". $anzahl. " Titel: ". $title;
			$outputstring = substr($outputstring, 0, 66);
			$outputstring = $outputstring."...". "\n";
			echo $outputstring;
			usleep(29200);
			
			$total = $total +1;
			
			$currentTrack = $outputxml->createElement("release");
			$currentTrack = $xmlRoot->appendChild($currentTrack);
			
			$currentTrack->appendChild($outputxml->createElement('name',$title));
			$currentTrack->appendChild($outputxml->createElement('trackCount',$anzahl));
		}
	}
}


echo $total, "\n";

htmlspecialchars($outputxml, ENT_XML1, 'UTF-8');

$outputxml->save('worldofmusic.xml');


//---------------------------------------------------------------------------------------------------------------------------

/*
http://stackoverflow.com/questions/4961906/when-to-implement-and-extend
http://php.net/manual/en/keyword.extends.php

https://jadendreamer.wordpress.com/2011/05/13/php-tutorial-learning-oop-class-basics-extending-classes/
*/



class fruit
{
	//here are the attributes of our class
	var $name;
	var $color;
	var $size;
	var $sweet;
	var $clean;
	var $washed;


	function fruit($name)
	{
		//this is a default constructor. It always has the same name
		//as the class. Whenever we
		//make a fruit object this function is automatically called
	
		$this->name = $name; //we automatically give this fruit its name
		$this->clean = False; //our fruit always needs to be washed first
		$this->washed = 0; //we haven�t washed it any times yet
	}
	
	//but we want to be able to set other things about the fruit
	function setColor($color)
	{
		$this->color = $color;
	}
	
	function setSize($size)
	{
		$this->size = $size;
	}
	
	function setSweet($sweet)
	{
		$this->sweet = $sweet;
	}
	
	//lets make a way to wash our fruit
	function wash()
	{
		$this->clean = True; //our fruit is clean now
		$this->washed++; //we�ve washed our fruit one more time
	}
	
	//we want to eat our fruit now
	function eat()
	{
		if (!$this->clean)
			echo "You should always wash your $this->color $this->name first!!!";
	
			if ($this->clean && $this->washed < 2)
				echo "You�re eating a dull looking piece of $this->name...";
	
				if ($this->clean && $this->washed >= 2)
					echo "You're eating a shiny piece of $this->color $this->name!";
	
					if (!$this->clean && $this->washed >= 2)
						echo "Your $this->name is shiny but you probably should wash it first.";
	
						if ($this->sweet)
							echo "This fruit is sweet.";
							else
								echo "This fruit is classified as a vegetable!";
	}
	
	//we can make a shine function, that washes the surface of the fruit as well
	function shine()
	{
		$this->washed++;
	}
	} //end of our class
	
	//let's make an orange
	$orange = new fruit("Orange");
	$orange->setSize("small");
	$orange->setColor("orange");
	$orange->setSweet(True);
	
	//now we'll make a watermelon
	$fruit = new fruit("Watermelon");
	$fruit->setSize("large");
	$fruit->setColor("green");
	$fruit->setSweet(True);
	
	//last but not least we'll make a tomato (which is also a fruit!)
	$veggie = new fruit("Tomato");
	$veggie->setSize("medium");
	$veggie->setColor("red");
	$veggie->setSweet(False);
	
	echo "Washing my $orange->name.";
	$orange->wash();
	
	echo "<br>Eating my $veggie->size $veggie->name.";
	$veggie->eat();
	
	echo "<br/>Washing my $orange->name again.";
	$orange->wash();
	
	echo "<br/>Shining my $fruit->size $fruit->name.";
	$fruit->shine();
	
	echo "<br/>Eating my $fruit->name.";
	$fruit->eat();
	
	echo "<br/>Eating my $orange->size $orange->name.";
	$orange->eat();
	
	//let's see what the structure of our objects looks like
	//this is useful when you're trying to find or fix a problem
	
	print_r($orange);
	echo "<br/><br/>";
	
	print_r($fruit);
	echo "<br/><br/>";
	
	print_r($veggie);
	echo "<br/><br/>";















