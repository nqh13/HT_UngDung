<!DOCTYPE html>
<html>
<head>
    <title>Food List</title>
</head>
<body>
    <h1>Food List</h1>

    <h2>Add Food</h2>
    <form action="index.php?action=add" method="POST">
        <input type="text" name="name" placeholder="Food Name" required>
        <input type="text" name="description" placeholder="Food Description" required>
        <input type="submit" value="Add">
    </form>

    <h2>Food List</h2>
    <ul>
        <?php foreach ($foods as $food): ?>
            <li>
                <?php echo $food['name']; ?> - <?php echo $food['description']; ?>
                <a href="index.php?action=edit&id=<?php echo $food['id']; ?>">Edit</a>
                <a href="index.php?action=delete&id=<?php echo $food['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>