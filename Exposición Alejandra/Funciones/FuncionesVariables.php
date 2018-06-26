<?php
#Si se llama a una variable que tiene paréntesis anexos a ella, PHP buscará una función con el valor que tiene dicha variable,
#e intentará ejecutarla. Se utilizan entre otras cosas para implementar callbacks.
function saludar(){
    echo "Hola que tal" . "<br>";
}

function despedirse($despedida = '')
{
    echo "Nos vemos otro día, $despedida" . "<br>";
}

function decirEsto($esto){
    echo $esto;
}

$miFuncion = 'saludar';
$miFuncion(); // Llama a saludar(). Devuelve: Hola que tal
echo "<hr>";

$miFuncion = 'despedirse';
$miFuncion('hasta luego'); // Llama a despedirse(). Devuelve: Nos vemos otro día, hasta luego
echo "<hr>";

$miFuncion = 'decirEsto';
$miFuncion('Esto es lo que digo');// Llama a decirEsto(). Devuelve: Esto es lo que digo
