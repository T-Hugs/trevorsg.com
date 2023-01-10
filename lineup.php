<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Lineup</title>
	<style>
		p{margin:0;padding:0}
	</style>
</head>
<body>
	
<?php

date_default_timezone_set('America/New_York');

$now = new DateTime();

$leadDate = new DateTime('2022-05-21 16:00:00');
$secondDate = new DateTime('2022-05-22 16:00:00');
$thirdAndFourthDate = new DateTime('2022-05-23 16:00:00');
$viceAndSkipDate = new DateTime('2022-05-24 16:00:00');

$leadInterval = $leadDate->diff($now);
$secondInterval = $secondDate->diff($now);
$thirdAndFourthInterval = $thirdAndFourthDate->diff($now);
$viceAndSkipInterval = $viceAndSkipDate->diff($now);

$leadStr = !$leadInterval->invert ? 'marc' : 'available in ' . $leadInterval->format("%a days, %h hours, %i minutes, %s seconds"); 
$secondStr = !$secondInterval->invert ? 'cam' : 'available in ' . $secondInterval->format("%a days, %h hours, %i minutes, %s seconds"); 
$thirdStr = !$thirdAndFourthInterval->invert ? 'andrew' : 'available in ' . $thirdAndFourthInterval->format("%a days, %h hours, %i minutes, %s seconds"); 
$fourthStr = !$thirdAndFourthInterval->invert ? 'trevor' : 'available in ' . $thirdAndFourthInterval->format("%a days, %h hours, %i minutes, %s seconds"); 
$viceStr = !$viceAndSkipInterval->invert ? 'marc' : 'available in ' . $viceAndSkipInterval->format("%a days, %h hours, %i minutes, %s seconds");
$skipStr = !$viceAndSkipInterval->invert ? 'trevor' : 'available in ' . $viceAndSkipInterval->format("%a days, %h hours, %i minutes, %s seconds"); 
	
?>
<p style="margin-bottom: 20px"><strong>may 24 lineup. Check back at 4pm.</strong></p>
<p>lead: <?=$leadStr?></p>
<p>second: <?=$secondStr?></p>
<p>third: <?=$thirdStr?></p>
<p>fourth: <?=$fourthStr?></p>

<p style="margin-top: 20px">vice: <?=$viceStr?></p>
<p>skip: <?=$skipStr?></p>

<p style="margin-top: 20px"><em>Note: if anyone is out of town, order stays the same but without the out of town player.</em></p>

</body>
</html>
