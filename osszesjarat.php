<h3>Buszjáratok</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Indulás</th>
        <th>Végállomás</th>
        <th>Menetidő</th>
        <th>Alacsonylétcsős</th>
        <th>#</th>
    </tr>
    <?php
    require 'kapcsolat.php';
    $sql="SELECT * FROM web_busz ORDER BY id";
    $query=mysqli_query($kapcsolat,$sql);
    while($sor=mysqli_fetch_array($query))
    {
        echo '<tr>';
        echo '<td><a href="index.php?p=buszmodosit&id='.$sor['id'].'">'.$sor['id'].'</a></td>';
        echo '<td>'.$sor['indulo'].'</td>';
        echo '<td>'.$sor['cel'].'</td>';
        echo '<td>'.$sor['menetido'].'</td>';
        if($sor['alacsony']==0)
        {
            echo '<td>Nem</td>';
        }
        else
        {
            echo '<td>Igen</td>';
        }
        echo '<td><a href="index.php?p=vizsgalat&id='.$sor['id'].'"><button>ADATOK</button></a></td>';
        echo '</tr>';
    }
    mysqli_close($kapcsolat);
    ?>
</table>