<?php

    $str = "Esta e uma string muito grande, ela tem varios caracteres";

    /* Saída:
    E
s
t
a

e

u
m
a

s
t
r
i
n
g

m
u
i
t
o

g
r
a
n
d
e
,

e
l
a

t
e
m

v
a
r
i
o
s

c
a
r
a
c
t
e
r
e
s
    */

    for($i = 0; $i < strlen($str); $i++) {
       echo "$str[$i] <br>"; 
    }

?>