<?php

    $host        = "host=localhost";
    $port        = "port=5432";
    $dbname      = "dbname=Destco";
    $credentials = "user=postgres password=admin";

    $db = pg_connect("$host $port $dbname $credentials");
    if (!$db) {
        echo "Error : Koneksi database Gagal !!!<hr>";
    }



function rupiah($param)
{
    return number_format($param, 0, ",", "." );
}

function acakangka($chars)
{
    $letters = '123456789012345678901234567890';
    return substr(str_shuffle($letters), 0, $chars);
}

function acakhuruf($chars)
{
    $letters = 'qwertyuiopasdfghjklzxcvbnm
                QWERTYUIOPASDFGHJKLZXCVBNM
                qwertyuiopasdfghjklzxcvbnm
                QWERTYUIOPASDFGHJKLZXCVBNM';
    return substr(str_shuffle($letters), 0, $chars);
}