<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
echo "Hallo $vorname $nachname";
?>

<?php
$username = $_POST["username"];
$passwort = $_POST["passwort"];

if($username=="Nils" AND $passwort=="php-einfach")
{
    echo "Zugriff erlaubt";
}
else
{
    echo "Zugriff fehlgeschlagen";
}
?>

<?php
$username = $_POST["username"];
$passwort = $_POST["passwort"];

$pass = sha1($passwort);

if($username == "Nils" AND $pass=="89cfb96efc4c673ec04899ca63f5ae9b83af43d1")
{
echo "Herzlich Willkommen";
}
else
{
echo "Login Fehlgeschlagen";
}
?>