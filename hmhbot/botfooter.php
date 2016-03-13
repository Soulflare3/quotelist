<font style=\"color:#DDDDDD\"><center><h6>
Thrown together by <a href="https://twitter.com/Dustin_Specht" target="_blank">Dustin</a> and <a href="https://twitter.com/soulflare3" target="_blank">Robert</a> for <a href="http://twitch.tv/handmade_hero" target="_blank">#handmade_hero</a><br />
<a href="https://github.com/Chronister/ChronalRobot" target="_blank">hmh_bot</a> + <a href="http://getbootstrap.com" target="_blank">Bootstrap</a> + PHP + SQLite
<br />Hosted at <a href="https://www.digitalocean.com/?refcode=4d47e6cfd0d6" target="_blank">DigitalOcean</a>. Code contributions welcome @ <a href="https://github.com/Soulflare3/quotelist" target="_blank">Github</a>
</h6></center></font>

<?php
error_reporting(0);
$fmtime = filemtime($thisFile);
$end = microtime(true);
$creationtime = ($end - $start);
if ($fmtime)
{
  echo "<font style=\"color:#DDDDDD\"><center><h6>Last modified " . date ("F d, Y H:i:s", $fmtime)." EST<br />Render time ". number_format($creationtime,4)."s</h6></center></font>";
}
?>
</section>
</div>
</body>
</html>
