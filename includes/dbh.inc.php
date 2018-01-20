<?php 
/***** DATABASE HANDLER CONFIGURATION *****/


/*** USERNAME PASSWORD DATABASE ***/
/** wamp config **/

$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="mood_calendar";



/** https://mysql8.db4free.net/phpMyAdmin config **/

// $dbServerName="db4free.net:3307";
// $dbUserName="akashraj9828";
// $dbPassword="idkmypassword";
// $dbName="akashraj9828";

$conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
echo mysqli_error($conn);

}
/*** events DATABASE ***/
/** wamp config **/

$events_dbServerName="localhost";
$events_dbUserName="root";
$events_dbPassword="";
$events_dbName="mood_calendar_events";

/** https://mysql8.db4free.net/phpMyAdmin config **/
// $events_conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

$events_conn=mysqli_connect($events_dbServerName,$events_dbUserName,$events_dbPassword,$events_dbName);
