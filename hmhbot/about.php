<?php
$start = microtime(true);
error_reporting(0);
$thisFile = basename(__FILE__);;
$title = "About";
include $_SERVER['DOCUMENT_ROOT'].'/hmhbot/botheader.php';
?>

<p>
  Tip: access this site by using !quotelist in chat.
</p>
<p>
  Problems with this website? Questions? Contact @soulflare3 on <a href="https://twitter.com/soulflare3" target="_blank">Twitter</a>, <a href="https://github.com/soulflare3" target="_blank">Github</a>, or <a href="http://www.twitch.tv/soulflare3/profile" target="_blank">Twitch</a>
</p>
<p>
  <a href="https://handmadehero.org/" target="_blank">Handmade Hero</a> is a project where <a href="http://mollyrocket.com/casey/about.html" target="_blank">Casey Muratori</a> writes an entire game and the engine that powers it live, weeknights on <a href="http://twitch.tv/handmade_hero" target="_blank">Twitch</a>
</p>
<p>
  <a href="https://github.com/Chronister/ChronalRobot" target="_blank">hmh_bot</a> is a <a href="http://willie.dftba.net/" target="_blank">ircbot</a> project for Handmade Hero. This website allows viewers to access parts of the bot's database, or even download a copy to play with on their own.
</p>
<br /><br />
<?php
include $_SERVER['DOCUMENT_ROOT'].'/hmhbot/menu.php';
include $_SERVER['DOCUMENT_ROOT'].'/hmhbot/botfooter.php';
?>
