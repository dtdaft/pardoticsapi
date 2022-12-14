<?php

include 'ICS.php';

header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename=invite.ics');

$ics = new ICS(array(
  'location' => $_GET['location'],
  'description' => $_GET['description'],
  'X-ALT-DESC;FMTTYPE=text/html' => $_GET['altdescription'],
  'dtstart' => $_GET['date_start'],
  'dtend' => $_GET['date_end'],
  'summary' => $_GET['summary'],
  'url' => $_GET['url']
));

echo $ics->to_string();