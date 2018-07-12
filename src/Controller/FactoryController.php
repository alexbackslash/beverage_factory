<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 11-Jul-18
 * Time: 15:25
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class FactoryController
{

    public function homepage(){

        /**
         * @Rout("/")
         */
        return new Response('Ovo je nova stranica u symfony!!!!');
    }

}