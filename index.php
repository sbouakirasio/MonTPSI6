<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require'Personne.php';
        require 'repertoire.php';
        $a = new Personne("max", "10", "max@gmail.com", "0646453162 ");
        $b = new Personne("sam", "9", "sam@gmail.com", "0623549874 ");
        $c = new Personne("ze", "8", "ze@gmail.com", "0658457814 ");
        $r = new repertoire(array($a,$b,$c));
        $r->afficherRepertoire();
        ?>
    </body>
</html>
