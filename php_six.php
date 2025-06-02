class User
{
    function __construct()
    {
        echo "Constructor called<br>";
    }

    function __destruct()
    {
        echo "Destructor called<br>";
    }
}

$user = new User();
echo "Doing some work with the user object<br>";
