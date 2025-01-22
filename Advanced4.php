<!-- Create a To Do List Page.  -->
<?php
// بدء الجلسة لتخزين المهام في الجلسة
session_start();

// إذا تم إرسال المهمة عبر نموذج الإضافة، نقوم بإضافتها إلى الجلسة
if (isset($_POST['task']) && !empty($_POST['task'])) {
    $task = $_POST['task'];
    
    // إذا كانت الجلسة تحتوي على المهام، نضيف المهمة الجديدة إليها
    if (isset($_SESSION['tasks'])) {
        $_SESSION['tasks'][] = $task;
    } else {
        // إذا كانت الجلسة لا تحتوي على مهام، نقوم بإنشاء مصفوفة جديدة
        $_SESSION['tasks'] = array($task);
    }
}

// إذا تم حذف مهمة، نقوم بإزالتها من الجلسة
if (isset($_GET['delete'])) {
    $taskIndex = $_GET['delete'];
    
    // إزالة المهمة من الجلسة باستخدام دالة unset
    unset($_SESSION['tasks'][$taskIndex]);
    // إعادة ترتيب المصفوفة بعد الحذف
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <div class="container">

        <form action="Advanced4.php"method="POST">
            <input type="text" name="task"required />
            <button type="submit">Add Task</button>
        </form>
        <?php if (isset($_SESSION['tasks']) && count($_SESSION['tasks'])>0):?>
            <ul>
                <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                    <li>
                        <?php echo htmlspecialchars($task); ?>
                        <a href="?delete=<?php echo $index; ?>" class="deleteBtn">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No tasks yet!</p>
        <?php endif; ?>
    </div>

</body>
</html>


<!--  anoher soulion//<?php
session_start();
if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
}
if (isset($_POST['todo']) && !empty($_POST['todo'])) {
    $_SESSION['list'][] = ($_POST['todo']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h2>To-Do List</h2>
    <form action="" method="POST">
        <input type="text" name="todo" placeholder="Enter a task" required>
        <input type="submit" value="Add to List">
    </form>
    <ul>
        <?php
        foreach ($_SESSION['list'] as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</body>
</html> -->