<?php
$config[ 'navbar' ] = 'inverse';
$f = fopen( "config.ini", "w" );
foreach ( $config as $name => $value )
{
    fwrite( $f, "$name = \"$value\"\n" );
}

fclose( $f );
?>