<?php
session_start();

require_once(__DIR__ . '/env.php');
require_once(__DIR__ . '/Database.php');
require_once(__DIR__ . '/imageLogic.php');

const WEEK = [
    '日', '月', '火', '水', '木', '金', '土',
];
