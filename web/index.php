<link href="style.css" rel="stylesheet" type="text/css">

<h2>Welcome to my Zoo</h2>

<img src="..\picture\zoo.jpg" alt="Zoo" width="500px" hight="300px">

    <?php
    $mysql = new mysqli("db","root","root","zoo");
    $sql = 'SELECT * FROM mammal';

    if ($result = $mysql->query($sql))
    {
        while ($data = $result->fetch_object())
        {
            $mammal[] = $data;
        }
    }
    ?>

<table>
<tr>
    <th>id</th>
    <th>Animals</th>
    <th>Food</th>
    <th>Amount</th>
</tr>
    <?php
    for($i=0; $i < count($mammal); $i++)
    {
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".$mammal[$i]->animal."</td>";
        echo "<td>".$mammal[$i]->food."</td>";
        echo "<td>".$mammal[$i]->amount."</td>";
        echo "</tr>";
    }
    ?>
</table>