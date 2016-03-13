<?php
$start = microtime(true);
error_reporting(0);
if (!empty($_GET['view']))
{
  $input = $_GET['view'];
}
$docroot = $_SERVER['DOCUMENT_ROOT'].'/hmhbot/';
$thisFile = basename(__FILE__);;
$title = 'Quote List';
$quotecount=$commandcount=$dupquotes= 0;
$render = '';
$db = new SQLite3('/home/ChronalRobot/handmade.db');
if(!$db)
{
  echo $db->lastErrorMsg();
}
else{
  if(!strtolower($input)=='json'||!strtolower($input)=='api')
  {
    include $docroot.'botheader.php';
  }
  if(strtolower($input)=='cmd')
  {
    //TODO(soul): Finish this
    $render .= '<br />Here\'s a list of my available commands:<br /><table cellpadding="5" class="table"><thead><tr><th width="30%">Command</th><th>Description</th></tr></thead><tbody></tbody></table>';
  }
  elseif(strtolower($input)=='api'||strtolower($input)=='json')
  {
    $quotes = array();
    $results = $db->query('SELECT id, text, timestamp FROM quote ORDER BY timestamp ASC');
    while ($row = $results->fetchArray())
    {
      $quotes[$row['id']] = array('timestamp'	=> $row['timestamp'],
                    'text'		=> $row['text']);
    }
    $db->close();
    echo json_encode($quotes);
  }
  else
  {
    $render .= '</section><table cellpadding="5" class="table table-striped table-hover table-condensed"><thead><tr><th width="10%">ID</th><th width="80%">Quote</th><th width="10%">Timestamp</th></tr></thead><tbody>';
    $results = $db->query('SELECT id, text, timestamp FROM quote ORDER BY timestamp ASC');
    while ($row = $results->fetchArray())
    {
      $quotecount++;
      $render .= '<tr><td width="10%">'. $row['id'] . '</td><td width="50%">'. $row['text'] . '</td><td width="50%">'. date('Y-m-d', $row['timestamp']) . '</td></tr>';
    }
    $render .= '</tbody></table><section class="content">';
    $results = $db->query('SELECT text, COUNT(*) occurrences FROM quote GROUP BY text HAVING occurrences > 1');
    if($results != null)
    {
      while ($row = $results->fetchArray())
      {
        $dupquote++;
      }
    }
    $db->close();
  }
  if(!strtolower($input)=='json'||!strtolower($input)=='api')
  {
    include $docroot.'menu.php';
    echo $render;
    include $docroot.'botfooter.php';
  }
}
?>
