<?php
// usuarios.php
return [
    'usuario1' => password_hash('senha1', PASSWORD_DEFAULT),
    'usuario2' => password_hash('senha2', PASSWORD_DEFAULT),
    // Adicione mais usuários conforme necessário, usando password_hash para segurança.
];
?>
