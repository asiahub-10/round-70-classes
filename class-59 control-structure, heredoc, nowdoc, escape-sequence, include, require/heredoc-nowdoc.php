<?php

$name = "Raju";
echo <<<HEREDOC
    $name is a good boy.

    <p>While PHP is perfectly capable of interpolating variables representing scalar data types,
    you’ll find that variables representing complex data types such as arrays or objects
    cannot be so easily parsed when embedded in an statement.</p>

    New line started.
HEREDOC;

echo "<br>---------------<br>";

echo <<<'NOWDOC'
    $name is a good boy.

    <p>While PHP is perfectly capable of interpolating variables representing scalar data types,
    you’ll find that variables representing complex data types such as arrays or objects
    cannot be so easily parsed when embedded in an statement.</p>

    New line started.
NOWDOC;


?>
