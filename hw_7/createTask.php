<?php
$userId = $_GET['user_id'];

echo "<html lang='ru'>
     <body>
       <h1>Create</h1>
       <form method='post' action='src/Tasks/create.php?user_id=$userId'>
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
