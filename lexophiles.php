<?php


$words = array(
	"A bicycle can't stand alone; it is two tired.",
	"A will is a dead giveaway.",
	"Time flies like an arrow; fruit flies like a banana.",
	"A backward poet writes inverse.",
	"In a democracy it's your vote that counts; in feudalism, it's your Count that votes.",
	"A chicken crossing the road: poultry in motion.",
	"If you don't pay your exorcist you can get repossessed.",
	"With her marriage she got a new name and a dress.",
	"Show me a piano falling down a mine shaft and I'll show you A-flat miner.",
	"When a clock is hungry it goes back four seconds."
	);

echo "<h3>LEXOPHILES (FOR LOVERS OF WORDS):</h3>";

print_r($words[array_rand($words)]);

?>