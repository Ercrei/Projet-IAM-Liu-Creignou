<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/12/2015
 * Time: 09:05
 */
include('libs/maLibSQL.pdo.php');
$device = $_REQUEST["device"];
SQLInsert("INSERT INTO akeru_device (device) VALUES ('$device')");