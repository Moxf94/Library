<?php
public function connectToDatabase()
{
$link = mysqli_connect("localhost","root","root", "test_db");

if ($link == false)
{
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
}

$sql = 'SELECT * FROM users';


if($result = $link->query($sql))
{
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["author"] . "</td>";
        echo "<td>" . $row["book"] . "</td>";
        echo "<td>" . $row["genre"] . "</td>";
        echo "</tr>";
    }

     
}
?>