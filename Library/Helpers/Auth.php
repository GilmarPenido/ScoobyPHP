<?php

namespace Helpers;

class Auth
{
    /**
     * Metodo construtor que valida o login ou redireciona para o logout
     */
    public function __construct()
    {
        
        if (
            isset($_SESSION['id'])
            and !empty($_SESSION['id'])
            and isset($_SESSION['statusLog'])
            and !empty($_SESSION['statusLog'])
            and $_SESSION['statusLog'] === true
        ) {
            Session::sessionTokenGenerate();
            if(!empty($_SESSION['ownerSession'])){
                Session::sessionTokenValidade();
            }
            return true;
        } else {
            $_SESSION['id'] = null;
            $_SESSION['statusLog'] = false;
            return Redirect::redirectTo('home');
        }
    }
}
