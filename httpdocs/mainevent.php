<? 
	//Iclude in header
	$siteId = 607;
	$showEmptyRows = false;
	require_once '/var/www/shared/calendarincludes/calendar.php';
	$eventsData = getEventsData(array("num"=>1));
?>

<? foreach ($eventsData["events"] as $event) { ?>
	<div class="event__preview <? if (!isset($event["imageUrl"])) { ?>event__preview--noimage<? } ?>" itemscope itemtype="http://data-vocabulary.org/Event">
		<h3 itemprop="summary"><?= $event["event_name"] ?></h3>
		<p class="event__description--short"><?= substr(strip_tags($event["event_desc"]),0 ,150)?>...</p>
		<? if (isset($event["imageUrl"])) { ?>
			<img src="<?= $event["imageUrl"] ?>" alt="<?= $event["event_name"] ?>" class="event__image">
		<? } ?>
		<a href="#" class="js-event-trigger-expand">
	</div>
	<div class"event__expanded js-event-expanded">
		<p class="event__description--long"><?= $event["event_desc"] ?></p>
	</div>
<? } ?>