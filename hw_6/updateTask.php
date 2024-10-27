<?php

echo "<html lang='ru'>
     <body>
       <h1>Update</h1>
       <form method='post' action='src/Tasks/update.php'>
       <div>
            <label for='title'>title</label>
           <input id='title' type='text' name='title' placeholder='Enter title'>
        </div>
       <div>
            <label for='description'>description</label>
           <input id='description' name='description' placeholder='Enter description'>
        </div>
        <button type='submit'>Update</button>
       </form>
     </body>
   </html>";
