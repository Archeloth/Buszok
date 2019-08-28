<h3>Meglévő buszútvonal módosítása</h3>
<?php
    if(isset($_POST['buszmodosit']))
    {
        $id=$_GET['id'];
        $indulo=$_POST['indulo'];
        $cel=$_POST['cel'];
        $menetido=$_POST['menetido'];
        $alacsony=$_POST['alacsony'];

        require 'kapcsolat.php';
        $sql='UPDATE web_busz SET indulo="'.$indulo.'", cel="'.$cel.'", menetido="'.$menetido.'", alacsony="'.$alacsony.'" WHERE id="'.$id.'"';
        $query=mysqli_query($kapcsolat,$sql);
        if($query)
        {
            echo '<h5>Sikeres módosítás!</h5>';
        }
        else
        {
            echo '<h5>Sikertelen módosítás!</h5>';
        }
        mysqli_close($kapcsolat);
    }
    if(isset($_GET['p']) && isset($_GET['id']))
    {
        $id=$_GET['id'];
        require 'kapcsolat.php';
        $sql='SELECT * FROM web_busz WHERE id="'.$id.'"';
        $query=mysqli_query($kapcsolat,$sql);
        while($sor=mysqli_fetch_array($query))
        {
            echo '<form action="index.php?p=buszmodosit&id='.$sor['id'].'" method="post">
            <input type="text" name="indulo" value="'.$sor['indulo'].'"><br>
                <input type="text" name="cel" value="'.$sor['cel'].'"><br>
                <input type="number" name="menetido" value="'.$sor['menetido'].'"><br>
                <label for="alacsony">Van alacsony padló?</label><br>
                <select name="alacsony" class="select"><br>
                ';
                if($sor['alacsony']==1)
                {
                    echo '<option value="1" selected>Igen</option>
                         <option value="0">Nem</option>';
                }
                else
                {
                    echo '<option value="1">Igen</option>
                         <option value="0" selected>Nem</option>';
                }
                    echo '
                </select>
                <button type="submit" name="buszmodosit-submit">Módosít</button>
            </form>';
        }
        
                

        mysqli_close($kapcsolat);
    }
?>