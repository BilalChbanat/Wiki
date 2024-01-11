<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="http://localhost:8000/updateActionTag?id=<?= $tag['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $tag['id'] ?>" id="name" class="form-control" required>
        <input type="text" name="name" value="<?php echo $tag['name'] ?>">
        <button type="submit">Update</button>
    </form>

</body>

</html>