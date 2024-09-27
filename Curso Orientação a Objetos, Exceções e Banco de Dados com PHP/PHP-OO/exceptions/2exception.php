<?php
function validarUsuario(array $usuario)
{
if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
    //utilizando exception
    throw new Exception("Campos obrigatórios não foram preenchidos!\n");
}

return true;

}


$usuario = [
    'codigo' => 1,
    'nome' => 'Rafael Morales',
    'idade' => 57,

];

$status = false;
try {
    $status = validarUsuario($usuario);

} catch(Exception $e) {//pegando a exception
    echo $e->getMessage();
    
} finally {
    echo "Status da Operação: " .(int)$status;
    die();
}







?>