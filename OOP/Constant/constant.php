<?php

define('NAMA', 'Josua Sembiring');
echo NAMA;

echo "<br>";

const UMUR = 19;
echo UMUR;

class Coba
{
    const NAMA = 'Josua Sembiring';
}

echo Coba :: NAMA;

ECHO __LINE__;

function Coba()
{
    return __FUNCTION__;
}
