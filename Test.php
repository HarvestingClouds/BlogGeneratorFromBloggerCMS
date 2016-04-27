<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$date = "Jan 01, 2016";

$date = new DateTime('Jan 01, 2016');

$dateTime = date('M d, Y', strtotime($date));

echo $dateTime;
        
?>