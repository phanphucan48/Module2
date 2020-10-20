<?php
class MyClass
{
    function __construct()
    {
        echo 'Calling constructor<br/>';
    }

    function some_method()
    {
        echo 'Calling a method<br/>';
    }

    function __destruct()
    {
        echo 'Calling destructor<br/>';
    }
}
