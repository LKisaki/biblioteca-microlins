<div id="emprestimo">
    <form class="form form-inline">
    <label>Livros</label>
    <select name="livros" id="livros">

        <?php
        $select = myslqi_query($con, "select * from livros ")or die(mysqli_error($con));
        while ($sql = mysqli_fetch_assoc($select)) {
                ?>
           <option value="<?php echo $sql['titulo'] ?>"><?php echo $sql['titulo'] ?></option>
           <?php
             }
        ?>
    </select>


    </form>
</div>