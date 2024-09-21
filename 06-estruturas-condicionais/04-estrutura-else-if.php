<?php
//Estrutura condicional else-if
$nota = 4;

if($nota >= 7){
    echo "Aluno aprovado! nota: $nota";

}else if (($nota < 7) && ($nota >= 4)){
    echo "Aluno recuperação! nota: $nota";
    
}else {
    echo "Aluno reprovado! nota: $nota";

}

?>