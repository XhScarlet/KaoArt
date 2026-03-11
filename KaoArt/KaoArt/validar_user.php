<?php
echo "Validando usuario...";

$username = $_POST['username'];
$password = $_POST['password'];

// echo "Usuário: " . $username . "<br>";
// echo "Senha: " . $password . "<br>";


 if ($username === 'NewTec' && $password === 'Senha1234') {
        echo "<br>Login bem-sucedido!";
 }
?>