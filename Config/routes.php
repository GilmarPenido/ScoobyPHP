<?php
require_once 'vendor/autoload.php';
$route = [];

/**
 * --------------------------
 * EXEMPLO DE ROTAS
 * --------------------------
 * Ao criar uma rota passa-se um arrai chamado $route, com o padrão desejado
 * para a rota e atribuido a ele, passa-se a rota existente onde ele irá
 * substituir. $route['/open'] = '/action/open'.
 * 
 * *****************************
 * EXEMPLO DE ROTA SEM PARAMETOS
 * 
 * $route['/'] = '/home';
 * $route['/ops'] = '/failure';
 * $route['/ops/404'] = '/404';
 * 
 * *****************************
 * 
 * --------------------------
 * ROTAS COM PARAMETROS
 * --------------------------
 * Para passar parametros em uma rota, cria-se a rota $route[''],
 * ao final da url da rota coloca-se url/{param-1}/{param-2}...
 * e ao atribuir a url correspondente aquela rota, coloca-se url/:param-1/:param-2...
 * findo parecido com este modelo.
 * 
 * ******************************
 * EXEMPLO DE ROTA COM PARAMETROS
 * 
 * $route['/action/{parametro-1}/{parametro-2}/{paramtro-3}/{etc...}'] = '/controller/action/:parametro-1/:parametro-2/:paramtro-3/:etc...';
 * 
 * ******************************  
 */

//Rotas sem autenticação
$route['/'] = '/home';
$route["/back"] = "/home";
$route["/login"] = "/user/index";
$route["/register"] = "/user/register";
$route['/new-user'] = '/user/saveUser';
$route['/make-login'] = '/user/login';
$route["/exit"] = "/user/exit";
$route["/passwordRescue"] = "/user/passwordRescue";

//Rotas Autenticadas
if(Helpers\Auth::authValidation()){
    $route['/dashboard'] = '/user/loged';
    $route['/delete-user/{id}'] = '/user/deleteUser/:id';
}
