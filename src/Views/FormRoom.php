<div class="container">
    <form action="index.php?method=<?=isset($_GET['id']) ? "updateRoom&id=" . $_GET['id'] : 'newRoom'?>" method="POST">
        <div class="form-group">
            <input required value="<?=$number ?? ''?>" type="number" placeholder="Номер кабинета" name="number" id="number" class="form-control mt-3">
            <input required value="<?=$capacity ?? ''?>" type="number" placeholder="Вместительность" name="capacity" id="number" class="form-control mt-2">
            <input required value="<?=$pc_amount ?? ''?>" type="number" placeholder="Количество ПК" name="pc_amount" id="number" class="form-control mt-2">

        </div>
        <div class="form-group">
            <input required value="<?=$type ?? ''?>" type="input" placeholder="Тип" name="type" id="number" class="form-control mt-2">
            <input required value="<?=$responsible_person ?? ''?>" type="input" placeholder="Заведующий" name="responsible_person" id="number" class="form-control mt-2">
        </div>
        <button type="submit" class="btn btn-primary mt-3"><?=isset($_GET['id']) ? 'Редактировать' : 'Добавить'?></button>
    </form>
</div>