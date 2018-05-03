<?php




echo "<br>";
echo "Explicar en espa�ol los operadores aritm�ticos, de asignaci�n, comparaci�n,"
. " incremento y decremento, l�gicos, de cadena y de array.";

echo "<br>";
echo"Operadores de incremento";
$n=5; echo "variable \$n=5.<br/>";
echo "\$n++ * 2 = ".$n++ * 2;
echo "<br/>ahora \$n = $n<br/>";
$n=5;echo "Igualamos de nuevo \$n=5 <br/>";
echo "++\$n * 2 = ".++$n *2;
echo "<br/>ahora \$n = $n";
echo "<br>";
/* 'Los operadores de incremento, aumentan o disminuyen en un n�mero entero el valor de la variable a la que afectan.

Existe un operador de incremento ++ y un operador de decremento -- los cuales aumentan o disminuyen respectivamente en una unidad el valor de la variable a la que se aplican.

por ejemplo si tenemos la variable $n=5 y le aplicamos el operador de incremento:

++$n;

El valor de $n ahora ser� 6.

Pero si despu�s le aplicamos el operador de decremento:

--$n;

El valor de $n volver� a ser 5.

Estos operadores podemos ponerlos antes o despu�s de la variable, es decir podemos poner ++$n o $n++.
El resultado puede ser distinto ya que si est� unido a otra operaci�n, al ponerlo delante primero se incrementa y luego se opera, mientras que si se pone detr�s primero se opera, y luego se incrementa.*/


echo "<br>";
echo"Operadores de LOGICOS";
echo "<br>";

$x = 25;
$y = 10;

$z = $x + $y;
echo "$z\n";
echo "<br>";

$z = $x - $y;
echo "$z\n";
echo "<br>";

$z = $x * $y;
echo "$z\n";
echo "<br>";

$z = $x / $y;
echo "$z\n";
echo "<br>";

$z = $y * $y * $x;
echo "$z - 1250\n";
echo "<br>";

/*Los operadores de asignaci�n compuestos constan siempre de dos partes, la primera indica una operaci�n aritm�tica, y la segunda es el signo igual (=). Se realiza la operaci�n indicada con las dos variables y el valor resultante se aplica a la primera variable. Por ejemplo si tenemos las variables $a=5 y $b=3 le aplicamos el operador "suma y asignaci�n":

$a+=$b;

El resultado ser� igual que si hubieramos escrito:

$a=$a+$b;

Es decir, tras realizar la suma, el valor de la primera variable toma el valor de la suma. El resultado en este caso es que $a ser� igual a 8. La variable $b sigue conservando su valor inicial.

Al igual que con la suma podemos realizar la operaci�n con la resta, la multiplicaci�n, la divisi�n, y el operador m�dulo (resto de la divisi�n), y tambi�n el operador .= que puede emplearse tambi�n para a�adir m�s texto a variables de cadena de texto.

La lista de los operadores de asignaci�n compuestos es la siguiente:

$a+=$b : suma de $a y $b y el resultado cambia el valor de $a
$a-=$b : resta de $a y $b y el resultado cambia el valor de $a
$a*=$b : multiplicaci�n de $a y $b y el resultado cambia el valor de $a
$a/=$b : divisi�n de $a y $b y el resultado cambia el valor de $a
$a%=$b : m�dulo de $a y $b y el resultado cambia el valor de $a
$a.=$b : concatenaci�n de $a y $b y el resultado cambia el valor de $a
En las expresiones con la palabra clave echo no hace falta que el segundo t�rmino de la operaci�n sea una variable, puede ser un n�mero directamente , o un texto si se utiliza el operador .*/



echo "<br>";
echo"Operadores de comparacion  ";
echo "<br>";

$var1 = 12;
$var2 = "12 gatos";
// Aqu� PHP considera una comparaci�n num�rica
echo $var1 ==  $var2; // resultado Verdadero
echo $var1 !=  $var2; // resultado Falso
echo $var1 === $var2; // resultado Falso

$var1 = "12";
$var2 = "12 gatos";
// Aqu� PHP considera una comparaci�n de cadenas
echo $var1 ==  $var2; // resultado Falso
echo $var1 !=  $var2; // resultado Verdadero
echo $var1 === $var2; // resultado Falso

// Ternario (esta evaluaci�n da TRUE)
($var1 != $var2) ? ($var1 = "ES CIERTO") : ($var1 = "ES FALSO");
echo $var1;           // resultado ES CIERTO

echo '   $A == $B   igual a             la respuesta es �verdadera� si $A es igual a $B ';
echo "<br>";
echo '   $A != $B   no igual a          la respuesta es �verdadera� si $A no es igual a $B';
echo "<br>";
echo '   $A > $B    mayor que           la respuesta es �verdadera� si $A es mayor que $B';
echo "<br>";
echo '   $A < $B    menor que           la respuesta es �verdadera� si $A es menor que $B';
echo "<br>";
echo '   $A >= $B   mayor o igual que   la respuesta es �verdadera� si $A es mayor o igual que $B';
echo "<br>";
echo '   $A <= $B   menor o igual que   la respuesta es �verdadera� si $A es menor o igual que B';


echo "<br>";
echo "<br>";
echo"Operadores de decremento  ";
echo "<br>";

$a = true;
$b = false;

if($a && $b) {
    echo '$a y $b son los dos verdaderos';
} else {
    echo 'o uno de $a o $b son falsos, o los dos son falsos';
}

echo "<br>";

echo "<br>";
echo "<br>";
echo"Operadores de CADENA  ";
echo "<br>";

$saludo = "Adsi ";
$nombre = "DesarrolloWeb.com";

echo $saludoCompleto = $saludo . $nombre; // vale "Adsi DesarrolloWeb.com"

echo "<br>";
echo ' "Los operadores l�gicos sirven para realizar operaciones l�gicas, valga "
. "la redundancia. Son operaciones que al final van a devolver un "s�" o un "
        . ""no", positivo o negativo. Se usan en combinaci�n con los operadores"
        . " de comparaci�n cuando la expresi�n de la condici�n lo requiere. "';



echo "<br>";
echo "<br>";
echo"Operadores de array ";
echo "<br>";
echo "<br>";

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Uni�n de $a y $b
echo "Uni�n de \$a y \$b: \n";
var_dump($c);

$c = $b + $a; // Uni�n de $b y $a
echo "Uni�n de \$b y \$a: \n";
var_dump($c);

$a += $b; // Uni�n de $a += $b es $a y $b
echo "Uni�n de \$a += \$b: \n";
var_dump($a);

echo "<br>";
echo "<br>";
echo 'La uni�n de matrices ($a + $b) se realiza de la siguiente manera: '
. 'se incluyen todos los elementos de la matriz de la izquierda m�s los '
    . 'elementos de matriz de la derecha que tengan claves no existentes '
        . 'en la primera matriz. Por lo tanto, las claves repetidas no se incluyen.';