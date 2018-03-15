<?php
require_once('codebird/codebird.php');

\Codebird\Codebird::setConsumerKey("rnWMVEEjeGB2RUcTn8ZmkDiWB", "tOCpSeaMG4zwOsuhQhb1eiJjbhA14fMuMInhREV5H4be6bruGN");
$cb = \Codebird\Codebird::getInstance();
$cb -> setToken("971409467878334467-Wrhd1ZnhpXDOezUkTkr6UaDATi2RRQx","HhonpuWl83666EO3FqFRqYZCXReV86b9Im5mryTGg5Jsi");

$params = array(
    'status' => 'Hello World!'
);
$reply = $cb->statuses_update($params);
