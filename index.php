<?php
echo "tvt:4";
/*$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);*/
$servername = 'mysql-ka.0ec9.hackathon.openshiftapps.com';
$username = 'kang';
$password = 'kangpedometer';
$database = 'pedometer';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
/*
$dbhost = getenv("OPENSHIFT_EXTMYSQL_DB_HOST");
$dbport = getenv("OPENSHIFT_EXTMYSQL_DB_PORT");
$dbuser = getenv("OPENSHIFT_EXTMYSQL_DB_USERNAME");
$dbpwd = getenv("OPENSHIFT_EXTMYSQL_DB_PASSWORD");
$dbname = getenv("OPENSHIFT_EXTMYSQL_DB_NAME");
$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}*/
echo "OK";
echo "tvt2";
?>