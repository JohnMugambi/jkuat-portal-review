<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require('db/dbconnect.php');
if(!defined('base_url')) define('base_url','http://localhost/jkuat-student-portal/');
date_default_timezone_set('Africa/Nairobi');

 
