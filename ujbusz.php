<div>
    <h3>Új buszjárat rögzítése</h3>

    <?php
    if(isset($_POST['ujbusz-submit']))
    {
        $id=$_POST['id'];
        $indulo=$_POST['indulo'];
        $cel=$_POST['cel'];
        $menetido=$_POST['menetido'];
        $alacsony=$_POST['alacsony'];
        require 'kapcsolat.php';
        $sql='INSERT INTO web_busz VALUES ("'.$id.'","'.$indulo.'","'.$cel.'","'.$menetido.'","'.$alacsony.'")';
        $query=mysqli_query($kapcsolat,$sql);
        if($query)
        {
            echo '<h5>Sikeres felvétel!</h5>';
        }
        else
        {
            echo '<h5>Sikertelen felvétel!</h5>';
        }
    }
    ?>

    <form action="index.php?p=ujbusz" method="post">
        <input type="number" name="id" placeholder="ID"><br>
        <input type="text" name="indulo" placeholder="Induló állomás"><br>
        <input type="text" name="cel" placeholder="Célállomás"><br>
        <input type="number" name="menetido" placeholder="Menetidő"><br>
        <label for="alacsony">Van alacsony padló?</label><br>
        <select name="alacsony" class="select">
            <option value="1">Igen</option>
            <option value="0">Nem</option>
        </select>
        <button type="submit" name="ujbusz-submit">Felvesz</button>
    </form>
</div>