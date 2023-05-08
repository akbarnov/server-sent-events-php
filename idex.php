<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Connection: keep-alive");

// $time = date('r');
// echo "data: {$time}\n\n";
// flush();
$i = 0;
while ($i < 30) {
    // $counter++;
    $i++;

    echo "event: message\n";
    echo "data: Counter: {$i}\n\n";
    // echo "data: Counter: {$counter}\n\n";

    ob_flush();
    flush();

    sleep(1);
}
?>