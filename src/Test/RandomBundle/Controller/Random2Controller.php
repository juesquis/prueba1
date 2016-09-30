<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\RandomBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class Random2Controller {
    
    public function indexAction($n1,$n2){
           $num = rand($n1,$n2);
           return new Response('<html><body>Number: '. $num . '</body></html>');
    }
}

