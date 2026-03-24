<?php
class Conexao
{/*unit do Delphi (datamodulo)*/
    /*Delphi FDConnection Lazarus ZeosConnection*/
    private static $dbname = "olojinha";
    private static $host = "127.0.0.1"; //"localhost"
    private static $user = "root";
    private static $pass = "";
    private static $con = null;

    public function __construct()
    {
        throw new \Exception('Not implemented');
    }

    public static function conectar()
    {
        if(null === self::$con)/*= (1 igual é recebe := dentro do PHP) == (2 iguais é igual sem diferenciar os caracteres) === (3 iguais é igual com diferenciamento dos caracteres)
        $nome1 = 'Ricardo';
        $nome2 = 'ricardo';
        if($nome1 == $nome2) nessa condição todos são igual
        if($nome1 === $nome2) nessa condição todos são diferentes pois um começa com letra maiuscula
        */
            {

            }
    }
}
