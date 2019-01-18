<?php

/*
    Plugin name: meu plugin
    Plugin uri:
    Descriptio: llalalaalal
    Version: 1.0
    Author: Fabio
    Author uri:
    License: GPLv2 or later    
*/

defined( 'ABSPATH' ) or die( 'Aqui não bruxão' );

class MeuPlugin
{
    //methods
    function __construct($arg)
    {
        echo $arg;
    }
}

if ( class_exists( 'MeuPlugin' ) ) {
    $meuPlugin = new MeuPlugin( 'PHP né amigo, agora vai dar boa' );
}