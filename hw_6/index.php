<?php
require __DIR__ . '/vendor/autoload.php';

$userId = $_GET['user_id'];

$user = \Zayts\Hw6\Models\User::find($userId);
$tasks = \Zayts\Hw6\Models\Task::all();

$tasksHtml = "";
foreach ($tasks as $task) {
    $tasksHtml = "
        <ul>
           <li style='display: flex; justify-content: space-between'>
           <a href='updateTask.php?user_id=$userId&task_id=$task->id'>$task->title</a>
           <form method='post' action='src/Tasks/delete.php?user_id=$userId&task_id=$task->id'><button type='submit'>delete</button></form>
           </li> 
        </ul>
    " . $tasksHtml;
}

echo "<html lang='ru'>
     <body>
       <div style='border: 1px solid black; padding: 5px; margin-bottom: 10px'>
        <h1>Имя: $user->first_name</h1>
        <h1>Фамилия: $user->last_name</h1>
        <h1>Email: $user->email</h1>
       </div>
       <a href='createTask.php?user_id=$userId'>create task</a>
       <div style='border: 1px solid black; padding: 5px'>
           $tasksHtml
       </div>
     </body>
   </html>";