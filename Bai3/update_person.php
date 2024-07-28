<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('crud_function.php');
    $id=isset($_GET['id']) ? $_GET['id']: "";
    $person=    readPersonById($id);
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name=isset($_POST['name'])? $_POST['name'] : '';
        $gender=isset($_POST['gender'])? $_POST['gender'] : '';
        $day=isset($_POST['day'])? $_POST['day'] : '';
        updatePersons($id, $name, $gender, $day);
    }
    ?>

    <form action="" method="POST">
        Name: <input type="text" name="name" value="<?= htmlspecialchars($person['Name']); ?>"><br>
        Gender:
        <label><input type="radio" name="gender" value="Female" <?= $person['Gender']=='1' ? 'checked':'';?>> Female</label>
        <label><input type="radio" name="gender" value="Male" <?=$person['Gender']=='0' ? 'checked':''; ?>> Male</label><br>
        DOB: <input type="date" name="day" value="<?= htmlspecialchars($person['DateOfBirth']) ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>