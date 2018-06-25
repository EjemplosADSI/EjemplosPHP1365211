<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expocicion</title>
</head>
<body>
    
<?php
echo "<h1>Introduccion</h1>";


$un_bool = TRUE;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número entero

echo gettype($un_bool); // imprime: boolean
echo "<br>";
echo gettype($un_str);  // imprime: string
echo "<br>";
// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
    $un_int += 4;
    echo "numero =$un_int ";
}



//--------------------------------------------------------------------------------------------------------------------------------

echo "<h1>booleano</h1>";
$foo = True; // asigna el valor TRUE a $foo
$accion= "mostrar_version";
$mostrar_separadores = true;
// == es un operador que comprueba la
// igualdad y devuelve un booleano
if ($accion == "mostrar_version") {
    echo "La versión es 1.23";
}

// esto no es necesario...
if ($mostrar_separadores == TRUE) {
    echo "<hr>\n";
}

// ...porque se puede escribir simplemente:
if ($mostrar_separadores) {
    echo "<hr>\n";
}
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

//Numeros enteros Integers

echo "<h1>Enteros</h1>";
$a = 1234; // número decimal
$a = -123; // un número negativo
$b = 0123; // número octal (equivale a 83 decimal)
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
$a = 0b11111111; // número binario (equivale al 255 decimal)

$número_grande = 2147483647;
var_dump($número_grande);    
echo "<br>";                // int(2147483647)
echo $b;
echo "<br>";
$número_grande = 2147483648;
var_dump($número_grande);                    // float(2147483648)

$millón = 1000000;
$número_grande =  50000 * $millón;
echo "<br>";
var_dump($número_grande);                    // float(50000000000)
echo "<h1>Float</h1>";
//se pueden iniciar de cualquiera de las siguientes formas
$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;
echo $a;
echo "<br>";
//El tamaño de un 'float' depende de la plataforma, aunque un valor común consiste en un máximo de ~1.8e308 
//con una precisión de aproximadamente 14 dígitos decimales (el formato de 64 bit del IEEE). 
$a = 1.23456789;
$b = 1.23456780;
$épsilon = 0.00001;

if(abs($a-$b) < $épsilon) {
    echo "true";
}
echo "<h1>Cadenas de caracteres</h1>";

//PHP solo admite un conjunto de 256 caracteres Un string puede llegar a alcanzar hasta 2 GB de tamaño (2147483647 bytes máximo). 
//entrecomillado simple
echo 'Esto es una cadena sencilla' .$épsilon.' <br>';
//doble
echo "hola: \"texto\"\t \t \t \t \t \t $épsilon hola2";


echo "<h1>Arrays</h1>";
//Un array puede ser creado con el constructor del lenguaje array(). Éste toma cualquier número de parejas clave => valor como argumentos. 
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
//Si varios elementos en la declaración del array usan la misma clave, sólo se utilizará la última, siendo los demás sobrescritos.
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
echo "<br>";
var_dump($array);
//Los arrays de PHP pueden contener claves integer y string al mismo tiempo ya que PHP no distingue entre arrays indexados y asociativos. 
//Es posible especificar la clave sólo para algunos elementos y excluir a los demás: 
    echo "<br>";
$array = array("foo", "bar",  "hello", 54 => "world",5 => "world" , "world");
var_dump($array);
echo "<br>";
echo "<h1>Iterables</h1>";
//Iterable es un seudotipo introducido en PHP 7.1. Acepta cualquier array u objeto que implemente la interfaz 
function foo(iterable $iterable) {
    echo "<pre>";
    foreach ($iterable as $valor) {
        // ...
        var_dump($valor);
    } 
    echo "</pre>";
}
foo($array);
foo("texto");
?>


</body>
</html>