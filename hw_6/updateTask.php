<?php
require __DIR__ . '/vendor/autoload.php';

$isAuth = \Zayts\Hw6\Auth::check();
if (!$isAuth) {
    return redirect("/login.php");
}

$taskId = $_GET['task_id'];

$user = \Zayts\Hw6\Auth::user();
$tasks = \Zayts\Hw6\Models\Task::find($taskId);

echo "<html lang='ru'>
     <body>
       <h1>Update</h1>
       <form method='post' action='src/Tasks/update.php?task_id=$taskId'>
       <div>
            <label for='title'>title</label>
           <input id='title' type='text' name='title' placeholder='Enter title' value='$tasks->title'>
        </div>
       <div>
            <label for='description'>description</label>
           <input id='description' name='description' placeholder='Enter description' value='$tasks->description'>
        </div>
        <button type='submit'>Update</button>
       </form>
     </body>
   </html>";
