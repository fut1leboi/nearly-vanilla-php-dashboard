<div class="container">
    <form action="index.php?method=<?=isset($_GET['id']) ? "updateStudent&id=" . $_GET['id'] : 'newStudent'?>" method="POST">
        <div class="form-group">
            <input required type="input" value="<?=$first_name ?? ''?>" placeholder="Имя" name="first_name" id="number" class="form-control mt-3">
            <input required type="input" value="<?=$second_name ?? ''?>" placeholder="Фамилия" name="second_name" id="number" class="form-control mt-2">
            <input required type="input" value="<?=$last_name ?? ''?>"  placeholder="Отчество" name="last_name" id="number" class="form-control mt-2">

        </div>
        <div class="form-group">
            <input required type="number" value="<?=$birth_year ?? ''?>"  placeholder="Год рождения" name="birth_year" id="number" class="form-control mt-2">
            <input required type="number" value="<?=$course ?? ''?>" placeholder="Курс" name="course" id="number" class="form-control mt-2">
            <input required type="input" value="<?=$group_name ?? ''?>" placeholder="Группа" name="group_name" id="number" class="form-control mt-2">
            <input required type="number" value="<?=$entrance_year ?? ''?>" placeholder="Год поступления" name="entrance_year" id="number" class="form-control mt-2">
        </div>
        <button type="submit" class="btn btn-primary mt-3"><?=isset($_GET['id']) ? 'Редактировать' : 'Добавить'?></button>
    </form>
</div>