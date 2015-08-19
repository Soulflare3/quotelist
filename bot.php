<?php
$start = microtime(true);
error_reporting(0);
if (!empty($_GET["view"]))
{
	$input = $_GET["view"];
}
$thisFile = basename(__FILE__);;
$title = "Quote List";
$quotes = 0;
$commands = 0;
include 'hmhbot/botheader.php';
$render = "";


if(strtolower($input)=="cmd")
{
	$render .= "<br />Here's a list of my available commands:<br /><table cellpadding=\"5\" class=\"table\"><thead><tr><th width=\"30%\">Command</th><th>Description</th></tr></thead><tbody></tbody></table>";
}
else
{
	$db = new SQLite3('/home/ChronalRobot/handmade.db');
	if(!$db)
	{
		echo $db->lastErrorMsg();
	}
	$prerender .= "</section><table cellpadding=\"5\" class=\"table table-striped table-hover table-condensed\"><thead><tr><th width=\"10%\">ID</th><th width=\"80%\">Quote</th><th width=\"10%\">Timestamp</th></tr></thead><tbody>";

	$results = $db->query('SELECT id, text, timestamp FROM quote ORDER BY timestamp ASC');
	while ($row = $results->fetchArray())
	{
		$quotes++;
		$prerender .= "<tr><td width=\"10%\">". $row['id'] . "</td><td width=\"50%\">". $row['text'] . "</td><td width=\"50%\">". date('Y-m-d', $row['timestamp']) . "</td></tr>";
	}
	$prerender .= "</tbody></table><section class=\"content\">";
	$db->close();
	$render .= $prerender;
}
include 'hmhbot/menu.php';
echo $render;
include 'hmhbot/botfooter.php';
?>

