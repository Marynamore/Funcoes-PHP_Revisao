<?php

# definindo a contante chamada PI e seu valor.
define('PI', 3.14159265359);
# definindo a contante chamada DIR e seu valor.
define('DIR', 'c:\\xampp\\htdocs\\');

# imprimindo o valor da constante chammada PI
echo PI . '<br>';
#imprimindo o valor da constante chamada DIR
echo DIR . '<br>';

# outra forma de imprimir o valor da constante chamada PI.
echo constant('PI') .'<br>';
# outra forma de imprimir o valor da constante chamada DIR 
echo constant('DIR');
