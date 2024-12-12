<?php
function bacaData() {
    $file = 'data.json';
    if (!file_exists($file)) {
        file_put_contents($file, '[]');
    }
    $data = file_get_contents($file);
    return json_decode($data, true);
}

function simpanData($data) {
    $file = 'data.json';
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}
?>
