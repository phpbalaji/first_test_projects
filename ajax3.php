<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','project');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM book_mast WHERE book_id = '".$q."'";
//ECHO $sql;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>book_id</th>
<th>book_name</th>
<th>isbn_no</th>
<th>cate_id</th>
<th>aut_id</th>
<th>pub_id</th>
<th>dt_of_pub</th>
<th>pub_lang</th>
<th>no_page</th>
<th>book_price</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['book_id'] . "</td>";
    echo "<td>" . $row['book_name'] . "</td>";
    echo "<td>" . $row['isbn_no'] . "</td>";
    echo "<td>" . $row['cate_id'] . "</td>";
    echo "<td>" . $row['aut_id'] . "</td>";
    echo "<td>" . $row['pub_id'] . "</td>";
    echo "<td>" . $row['dt_of_pub'] . "</td>";
    echo "<td>" . $row['pub_lang'] . "</td>";
    echo "<td>" . $row['no_page'] . "</td>";
    echo "<td>" . $row['book_price'] . "</td>";
    

    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>