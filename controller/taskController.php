<?php
  $tasksByUserId = getTasksByUserId();
  $tasksByAssigned = getTasksByAssigned();
  $assignedUserList = getUsers();
  $taskNumber = countTasks();
  $messages = [];

  if(!empty($_POST['deletedTask'])) {
    deleteTask();
    header('Location: /var/www/user_data/ngubanova/me/join-mvc/view/index.php');
  }
  if(!empty($_POST['changedTask'])) {
    changeStatus();
    header('Location: /var/www/user_data/ngubanova/me/join-mvc/view/index.php');
  }
  if(!empty($_POST['addTask'])) {
    addTask();
    header('Location: /var/www/user_data/ngubanova/me/join-mvc/view/index.php');
    $messages[] = 'The task was added!';
  }
  if(!empty($_POST['newAssigned'])) {
    changeAssigned($_POST['newAssigned']);
    header('Location: /var/www/user_data/ngubanova/me/join-mvc/view/index.php');
  }
?>
