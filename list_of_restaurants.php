<html>
<head>
<title>List of KL Restaurants</title>
</head>
<body>
<center
<h1>List of KL Restauranrts</h1>
<!--create table structure using HTML first-->
<table border="1">
<tr>
<th>Restaurant ID</th>
<th>Restaurant Name
<th>Address</th>
<th>Phone<th/>
</tr>
          <?php
$serverName = "simplewebtp047005.database.windows.net";
$connectionOptions = array( 
"Database" => "simpleweb",
"Uid" => "simpleweb",
"PWD" => "Simple@web");
//Establishes the connction
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn)
{
die("Error connection: ".sqlsrv_errors());
}
$tsql= "SELECT * FROM [dbo].[restaurant]";
$getResults= sqlsrv_query($conn, $tsql);
if ($getResults == FALSE)
{
die(sqlsrv_errors());
} 
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))   
{
echo "<tr>";
echo "<td>". $row['restaurant_id'] . "</td>";
echo "<td>". $row['restaurant_name'] ."</td>";
echo "<td>". $row['restaurant_address'] . "</td>";
echo "<td>". $row['restaurant_phone'] . "</td>";
echo "</tr>";
}
sqlsrv_free_stmt($getResults);
?>      
          

  
</tables>
</center>
</body>
</html>
