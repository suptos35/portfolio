<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<div style="display: flex;">
                <form name="update" action="update.php" method="POST">
                    <input type="number" name="id" placeholder="id" required>
                    <input type="text" name="degree" placeholder="degree" required>
                    <input type="text" name="institute" placeholder="institute" required>
                    <input type="text" name="year" placeholder="year" required>
                    <input type="submit" value="Update" name="update">
                    <input type="submit" value="insert" name="insert">
                </form>

</div>

<a href="index.php"> <button>portfolio</button></a>
</body>
</html>