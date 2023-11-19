<?php function reverses(int $num): int
{

    $rev = strrev((string) $num);

    if ($rev[-1] === "-") {
        $curr = substr($rev, 0, (strlen($rev) - 1));
        $rev = "-" . $curr;
    }
    return (int) $rev;
}

