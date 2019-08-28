<div>
    <h3>Új vizsgálat rögzítése</h3>

    <?php
        if(isset($_POST['ujvizsgalat-submit']))
        {
            $buszID=$_POST['buszID'];
            $datum=$_POST['datum'];
            $megjegyzes=$_POST['megjegyzes'];
            $engedelyezve=$_POST['engedelyezve'];

            require 'kapcsolat.php';
            $sql='INSERT INTO web_szerviz (buszID, datum, megjegyzes, engedelyezve) VALUES ("'.$buszID.'","'.$datum.'","'.$megjegyzes.'","'.$engedelyezve.'")';
            $query=mysqli_query($kapcsolat,$sql);
            if($query)
            {
                echo '<h5>Sikeres felvétel!</h5>';
            }
            else
            {
                echo '<h5>Sikertelen felvétel!</h5>';
            }
            mysqli_close($kapcsolat);
        }
    ?>

    <form action="index.php?p=ujvizsgalat" method="post">
        <select name="buszID" class="select"><br>
            <?php
                require 'kapcsolat.php';
                $sql="SELECT id FROM web_busz";
                $query=mysqli_query($kapcsolat,$sql);
                while($sor=mysqli_fetch_array($query))
                {
                    echo '<option value="'.$sor['id'].'">'.$sor['id'].'</option>';
                }
            ?>
        </select>
        <input type="date" name="datum" placeholder="Dátum"><br>
        <input type="text" name="megjegyzes" placeholder="Megjegyzés"><br>
        <label for="engedelyezve">Engedélyezve?</label><br>
        <select name="engedelyezve" class="select"><br>
            <option value="1">Igen</option>
            <option value="0">Nem</option>
        </select>
        
        <button type="submit" name="ujvizsgalat-submit">Felvesz</button>
    </form>
</div>