<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class MotorcycleController extends AbstractController
{
  /**
   * @Route("/chili/homepage")
   */
  public function motorcycleList()
  {
    $request = Request::createFromGlobals();

    return $this->render('chili/homepage.html.twig', [
      'begin' => $request->query->get('s') ?? 0,
      'page' => 3,
      'max' => 6,
      'a' => $request,
      'motorcycles' => [
        [
          'motorcycle' => 'F 200 GS',
          'brand' => 'BMW',
          'stock' => 1,
          'img' => '317d7e83-7056-406f-9231-3cb77400a458_1.jpg',
          'km' => '12600',
          'year' => '2016'
        ],
        [
          'motorcycle' => 'DS',
          'brand' => 'ZERO',
          'stock' => 2,
          'img' => '1200x-1.jpg',
          'km' => '1000',
          'year' => '2018'
        ],
        [
          'motorcycle' => '450 SX-F',
          'brand' => 'KTM',
          'stock' => 0,
          'img' => '2018-KTM-450SX-F-motorcycle--Motorcycle-200661613-7b369a66937409af5f199cacd9ca74de.jpg',
          'km' => '9000',
          'year' => '2017'
        ],
        [
          'motorcycle' => 'CBR 100RR Fireblade',
          'brand' => 'Honda',
          'stock' => 1,
          'img' => '4904041-0-18576691.jpg',
          'km' => '36000',
          'year' => '2015'
        ],
        [
          'motorcycle' => 'Street Rod 500',
          'brand' => 'Harley Davidson',
          'stock' => 2,
          'img' => '7630431-0-44601691.jpg',
          'km' => '34000',
          'year' => '2016'
        ],
        [
          'motorcycle' => 'Ace Scrambler',
          'brand' => 'CMC',
          'stock' => 0,
          'img' => 'Ace+Scrambler+2015+10.jpg',
          'km' => '66000',
          'year' => '2015'
        ],
        [
          'motorcycle' => 'Monster',
          'brand' => 'Ducati',
          'stock' => 1,
          'img' => 'hqdefault.jpg',
          'km' => '12000',
          'year' => '2018'
        ]
      ]
    ]);
  }
}