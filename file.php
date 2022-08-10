<?php

/*
MODOS DE CRIAÇÃO DE ARQUIVO

w   //ABRE O ARQUIVO SOMENTE PARA ESCRITA
    //COLOCA O PONTEIRO NO COMEÇO DO ARQUIVO
    //DIMINUI O TAMANHO DO ARQUIVO PARA ZERO (APAGA TODO O COTEÚDO)
    //SE O ARQUIVO NÃO EXISTIR ELE TENTA CRIÁ-LO
w+  //ABRE O ARQUIVO PARA ESCRITA E LEITURA
    //COLOCA O PONTEIRO NO COMEÇO DO ARQUIVO
    //DIMINUI O TAMANHO DO ARQUIVO PARA ZERO (APAGA TODO O COTEÚDO)
    //SE O ARQUIVO NÃO EXISTIR ELE TENTA CRIÁ-LO

r   //ABRE O ARQUIVO SOMENTE PARA LEITURA
    //COLOCA O PONTEIRO NO INICIO DO ARQUIVO
    //RETORNA ERRO SE O ARQUIVO NÃO EXISTIR E NÃO TENTA CRIÁ-LO
r+  //ABRE O ARQUIVO PARA LEITURA E ESCRITA
    //COLOCA O PONTEIRO NO INICIO DO ARQUIVO
    //RETORNA ERRO SE O ARQUIVO NÃO EXISTIR E NÃO TENTA CRIÁ-LO

a   //ABRE O ARQUIVO SOMENTE PARA ESCRITA
    //COLOCA O PONTIRO NO FINAL DO ARQUIVO
    //SE O ARQUIVO NÃO EXISTIR TENTA CRIÁ-LO
a+  //ABRE O ARQUIVO PARA ESCRITA E LEITURA
    //COLOCA O PONTIRO NO FINAL DO ARQUIVO
    //SE O ARQUIVO NÃO EXISTIR TENTA CRIÁ-LO

x   //ABRE O ARQUIVO SOMENTE PARA ESCRITA
    //COLOCA O PONTEIRO NO FINAL DO ARQUIVO
    //SE O ARQUIVO JA EXISTE A CHAMDA DA FUNÇÃO fopen()
    //IRÁ RETORNAR UM ERRO E_WARNING
    //SUPORTADA NO PHP 4.3.2 OU SUPERIOR
x+  //ABRE O ARQUIVO PARA ESCRITA E LEITURA
    //COLOCA O PONTEIRO NO FINAL DO ARQUIVO
    //SE O ARQUIVO JA EXISTE A CHAMDA DA FUNÇÃO fopen()
    //IRÁ RETORNAR UM ERRO E_WARNING
    //SUPORTADA NO PHP 4.3.2 OU SUPERIOR


 */

$nomeDoArquivo = "teste.txt";

$arquivo = fopen($nomeDoArquivo,'a+'); //CRIAR E ABRIR O ARQUIVO

fwrite($arquivo,'ESTA É UMA PARTE DO ARQUIVO.' . "\r\n"); //GRAVAR DADOS NO ARQUIVO

fclose($arquivo); //FECHA O ARQUIVO


//EXIBE TODO CONTEÚDO DO ARQUIVO
//echo(file_get_contents($nomeDoArquivo));



//PERCORRE LINHA POR LINHA DO ARQUIVO
$contents = file($nomeDoArquivo);
$cont = 0;
foreach ($contents as $linha) {
  echo('linha '.$cont.' ->' . $linha . "\n");
  $cont ++;
}

 ?>
