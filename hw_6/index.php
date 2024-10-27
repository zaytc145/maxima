<?php
require __DIR__ . '/vendor/autoload.php';

use Zayts\Hw6\DB\Database;

$userId = $_GET['user_id'];

$user = \Zayts\Hw6\Models\User::find($userId);
$tasks = \Zayts\Hw6\Models\Task::all();

$tasksHtml = "";
foreach ($tasks as $task) {
    $tasksHtml = "
        <ul>
           <li>
           <a>$tasks->name</a>
           <form method='post' action='src/deleteTask.php'><button>delete</button></form>
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
       <a href='http://127.0.0.1:9000/createTask.php'>create task</a>
       <div style='border: 1px solid black; padding: 5px'>
           $tasksHtml
       </div>
     </body>
   </html>";