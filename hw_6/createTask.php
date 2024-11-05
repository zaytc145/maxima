<?php

require __DIR__ . '/vendor/autoload.php';


$isAuth = \Zayts\Hw6\Auth::check();
if (!$isAuth) {
    return redirect("/login.php");
}

echo "<html lang='ru'>
     <body>
       <h1>Create</h1>
       <form method='post' action='src/Tasks/create.php'>
       <div>
            <label for='title'>title</label>
           <input id='title' type='text' name='title' placeholder='Enter title'>
        </div>
       <div>
            <label for='description'>description</label>
           <input id='description' name='description' placeholder='Enter description'>
        </div>
        <button type='submit'>Create</button>
       </form>
     </body>
   </html>";
