<?php 
/* 
  para executar o codigo, colocar no shell:
  php prof/aula01.php
*/
// "print" - Escreve na tela
echo "Hello World!\n";
echo (10+20);
echo "\n";
echo 20-30;
echo "\n";
// Declaração de variáveis
$a = 40;
$b = 50;

//Operações Básicas
$soma = $a+$b;
$subtracao = $b-$a;
$multiplicacao = $a*$b;
$divisao = $b/$a;

echo "Soma: ".$soma."\n";
echo "Subtração: ".$subtracao."\n";
echo "Multiplicação: ".$multiplicacao."\n";
echo "Divisão: ".$divisao."\n";

// Operadores de incremento
$a += 5;
echo $a."\n";
$b -= 8;
echo $b."\n";
$a++;
echo $a."\n";
$b--;
echo $b."\n";

// String - vulgo Texto
$nome = "Ingrid Liana";
$idade = "27";
echo $idade .= " anos";
echo "\n";
#Comentário

// Estruturas condicionais
// IF

$data = getdate();

if ($data["weekday"] == "Friday"){
    echo "Sextou!";
}else{
    echo "Não é sexta, que triste.";
}

echo "\n";
echo "Kirana está tentando escalar uma árvore, será que ela terá sucesso?\n";
$d20 = rand(1,20);
// A kirana é bem forte, então com mais de 10, ela passa
echo $d20."\n";
/* 
    == igual
    >  maior
    <  menor
    >= maior ou igual
    <= menor ou igual
    != diferente
*/

if ($d20==20){
    echo "Kirana da um salto a partir do chão, e cai no topo da árvore, no meio do caminho, consegue colher algumas frutas.";
} else if ($d20>=10){
    echo "Kirana conseguiu subir tranquilamente sobre a árvore, e agora tem uma vista ampla de todo o ambiente.\n";
}else if($d20==1){
    echo "Kirana cai vergonhosamente no chão, e um galho da árvore se quebra sobre sua cabeça, e ela desmaia na hora.";
}else{
    echo "Kirana escorrega no meio do caminho, e não consegue subir, caindo de bunda no chão.\n";
}
echo "\n";

// Mais de um valor dentro de uma uma variável
// Lista = Vetor = Array
$habilidades[] = "Super Pulo";
$habilidades[] = "Punhos Gigantes";

echo $habilidades[0]."\n";
echo $habilidades[1]."\n";

$habilidades[5] = "Punhos Pistol";

echo $habilidades[5];

$entrada; //0, 1, 5
// Dependendo do valor da entrada, o personagem libera um ataque diferente.
echo "\n";
$entrada = readline("Escolha uma habilidade: ");
if ($entrada == 0){
    echo $habilidades[0]."\n";
}else if ($entrada == 1){
    echo $habilidades[1]."\n";
}else if ($entrada == 5){
    echo $habilidades[5]."\n";
}else{
    echo "Você ainda não aprendeu essa habilidade, vá estudar!\n";
}
    
?>