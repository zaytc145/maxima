<?php

echo "<html lang='ru'>
     <body>
       <h1>Login</h1>
       <form method='post' action='src/login.php'>
       <div>
            <label for='email'>email</label>
           <input id='email' type='text' name='email' placeholder='Enter email'>
        </div>
       <div>
            <label for='password'>password</label>
           <input id='password' type='password' name='password' placeholder='Enter password'>
        </div>
        <button type='submit'>Login</button>
       </form>
     </body>
   </html>";
