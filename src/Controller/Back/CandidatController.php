<?php
/**
 * Created by PhpStorm.
 * User: Mahdi
 * Date: 18/07/2018
 * Time: 17:13
 */

namespace App\Controller\Back;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CandidatController extends Controller
{

    public function index() {
        $this->getDoctrine();

        return $this->render()
    }

}