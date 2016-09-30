<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\RandomBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController {
    
    public function indexAction($limit){
           $num = rand(1,$limit);
           return new Response('<html><body>Number: '. $num . '</body></html>');
    }
}

