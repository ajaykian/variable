<?php
// initialize errors variable
$errors = "";

// connect to database
$db = mysqli_connect("localhost", "root", "", "todo");

// insert a quote if submit button is cliccked
if (isset($_POST['submit'])) {
  if (empty($_POST['task'])) {
    $errors = "You must fill in the task";
  }else{
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (tasks) VALUES ($tasks)";
    mysqli_query($db, $sql);
    header('location: to-do-list.php');
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <div class="heading">
        <h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
      </div>
      <form method="post" action="to-do-list.php" class="input_form">
        <input type="text" name="task" class="task_form">
        <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
        <?php if (isset($errors)) { ?>
        <p><?php echo $errors; ?></p>
      <?php } ?>
      </form>
  </body>
</html>
