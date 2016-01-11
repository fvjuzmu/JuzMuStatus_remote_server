<?
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$basePath = $_SERVER['DOCUMENT_ROOT'] . "/juzmustatus/";
$file = $basePath . 'juz_status.txt';
$status = "?";

$fp = fopen($file, 'w');

if(array_key_exists("status", $_REQUEST))
{
  switch($_REQUEST['status'])
  {
    case 0:
      $status = 0;
      break;
    case 1:
      $status = 1;
      break;
    default:
      $status = "?";
      break;
  }
}

// Write the contents to the file
fwrite($fp, $status);
fclose($fp);
?>
