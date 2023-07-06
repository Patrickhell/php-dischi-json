<?php
$stringDisksData = file_get_contents('./database/data.json');

header('Content-Type: application/json');
echo ($stringDisksData);
