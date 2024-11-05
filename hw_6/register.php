<?php
require __DIR__ . '/vendor/autoload.php';

$isAuth = \Zayts\Hw6\Auth::check();
if ($isAuth) {
    return redirect("/index.php");
}

echo "<html lang='en'>
     <body>
       <h1>Register</h1>
       <form method='post' action='src/register.php'>
          <div>
            <label for='firstName'>First name</label>
           <input id='firstName' type='text' name='firstName' placeholder='Enter first name'>
        </div>
           <div>
            <label for='lastName'>Last name</label>
           <input id='lastName' type='text' name='lastName' placeholder='Enter last name'>
        </div>
       <div>
            <label for='email'>email</label>
           <input id='email' type='text' name='email' placeholder='Enter email'>
        </div>
       <div>
            <label for='password'>password</label>
           <input id='password' type='password' name='password' placeholder='Enter password'>
        </div>
        <button type='submit'>register</button>
       </form>
     </body>
   </html>";
