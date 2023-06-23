<?php
if(isset($_GET['date'])) {
  $selectedDate = $_GET['date'];
  $url = 'https://www.nseindia.com/content/historical/DERIVATIVES/yyyy/mmm/foddmmyyyybhav.csv';
  $url = str_replace('yyyy', substr($selectedDate, 0, 4), $url);
  $url = str_replace('mm', substr($selectedDate, 5, 2), $url);
  $url = str_replace('dd', substr($selectedDate, 8, 2), $url);
  
  $data = file_get_contents($url);
  echo $data;
}
?>
