<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/12/2015
 * Time: 09:05
 */
include('libs/maLibSQL.pdo.php');
$data=$_REQUEST["data"];
$device = $_REQUEST["device"];
SQLInsert("INSERT INTO akeru_data (idData,data) VALUES (NULL ,'$data')");
