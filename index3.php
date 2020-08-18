<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Pin-Crack</title>
</head>
<body>
<h1>Crack md5 for 4 digit pin</h1>
<pre>

<?php
$goodtext = "Not found";
    // If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // This is our alphabet
$txt = "0123456789";
$show = 15;

for($i=0; $i<strlen($txt); $i++ ) {
    $ch1 = $txt[$i];   // The first of two characters
    for($j=0; $j<strlen($txt); $j++ ) {
        $ch2 = $txt[$j];   // The first of two characters
        for($k=0; $k<strlen($txt); $k++ ) {
            $ch3 = $txt[$k];   // The first of two characters
            for($l=0; $l<strlen($txt); $l++ ) {
                $ch4 = $txt[$l];   // The first of two characters
                $pin=$ch1.$ch2.$ch3.$ch4;
                $pinhash = hash('md5', $pin);
                if ($pinhash == $md5 ) {
                    $goodtext = $pin;
                    break;   // Exit the inner loop
                }
            }
          }
        }
      }
  }

print $md5." is ".$goodtext."<br>";
?>
</pre>

</body>
</html>
