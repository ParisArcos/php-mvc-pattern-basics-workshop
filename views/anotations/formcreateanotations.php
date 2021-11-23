<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotations</title>
</head>

<body>

    <form action="index.php?controller=anotations&action=<?php echo isset($_GET['anotationId']) ? "updateAnotation" : "createAnotations" ?>" method="POST">
        <input type="hidden" name="anotationId" value="<?php echo $anotationId ? $anotationId : null ?>">
        <input type="hidden" name="anotations_user_id" value="<?php echo $userId ? $userId : null ?>">
        <div class="form-group">
            <label for="name">Subject</label>
            <select id="subjects_id" name="subjects_id">
                <?php
                if ($subjects) {
                    foreach ($subjects as $subject) {
                        echo "<option value='" . $subject["id"] . "'>" . $subject["subjects_name"] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="last_name">Test</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Test description" value="<?php echo isset($anotation['title']) ? $anotation['title'] : null ?>">
        </div>
        <div class="form-group">
            <label for="grades">Grade</label>
            <input type="grades" class="form-control" id="grades" name="grades" aria-describedby="grades" placeholder="grades" value="<?php echo isset($anotation['grades']) ? $anotation['grades'] : null ?>">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="date" value="<?php echo isset($anotation['date']) ? $anotation['date'] : null ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>