<?php

function redirect($path)
{
    header("Location: http://127.0.0.1:9000" . $path);
}
