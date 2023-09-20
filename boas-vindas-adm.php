<?php
/*
* @author: Julia Kuroishi
* @wordpress-plugin
* nome do plugin: boas vindas adm
+ descrição: exibe mensagem de boas vindas ao adm 
*/
// primeiro vamos criar a função em php
function boas_vindas_adm(){
    echo '<p> Bem-vindo, adm. Eu sou um novo plugin </p>';
}

add_action('admin_notices','boas_vindas_adm');
?>
