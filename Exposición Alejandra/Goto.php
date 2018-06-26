<?php
//El operador goto puede ser usado para saltar a otra sección en el programa.

//Ejemplo sencillo
goto a;
echo 'Foo';

a:
echo 'Bar <br>';

//Se puede ver como se puede saltar fuera del ciclo
for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
        if($j==17) goto end;
    }
}
echo "i = $i";
end:
echo 'j alcanzó 17';

//Lanza error puesto que esta queriendo saltar dentro de un ciclo y esto no esta permitido
goto loop;
for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
        loop: echo "string";
    }
}
echo "$i = $i";
