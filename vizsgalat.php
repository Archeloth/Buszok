<div>
    <table>
        <tr>
            <th>ID</th>
            <th>BuszID</th>
            <th>Dátum</th>
            <th>Megjegyzés</th>
            <th>Engedélyezve</th>
        </tr>
        <?php
            if(isset($_GET['p']) && isset($_GET['id']))
            {
                $id=$_GET['id'];
                require 'kapcsolat.php';
                $sql="SELECT * FROM web_szerviz WHERE buszID=$id";
                $query=mysqli_query($kapcsolat,$sql);
                $vizsgalatok=mysqli_num_rows($query);
                while($sor=mysqli_fetch_array($query))
                {
                    echo '<tr>';
                    echo '<td>'.$sor['id'].'</td>';
                    echo '<td>'.$sor['buszID'].'</td>';
                    echo '<td>'.$sor['datum'].'</td>';
                    echo '<td>'.$sor['megjegyzes'].'</td>';
                    if($sor['engedelyezve'] == 0)
                    {
                        echo '<td>Nem</td>';
                    }
                    else
                    {
                        echo '<td>Igen</td>';
                    }
                    echo '</tr>';
                }
                mysqli_close($kapcsolat);
            }
            else
            {
                header("Location: index.php");
            }
        ?>
    </table>
    <p><?php echo 'A járat vizsgálatainak száma: '.$vizsgalatok; ?></p>
</div>
