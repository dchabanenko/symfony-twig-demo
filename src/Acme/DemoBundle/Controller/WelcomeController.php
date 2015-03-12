<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */


        return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array('rooms' => $this->provide()));
    }

    public function aboutAction()
    {
        return $this->render('AcmeDemoBundle:Welcome:about.html.twig', array());
    }

    public function viewAction($id)
    {
        $flats = $this->provide();
        $flat = $flats[$id];
        $loop = ['index' => $id];
        return $this->render('AcmeDemoBundle:Welcome:room.html.twig', array('room' => $flat, 'loop' => $loop));
    }

    private function provide()
    {
        return [
            [
                'img' => 'property_1.jpg',
                'price' => 500,
                'href' => 'aaaa.html',
                'caption' => 'Fuisque dictum tortor at purus libero',
                'description' => '2 kitchens, 2 bed, 2 bath...',
                'size' => 288,
            ],
            [
                'img' => 'property_2.jpg',
                'price' => 600,
                'href' => 'bbbb.html',
                'caption' => 'Some Other caption with lots of letters, letters, letters, letters, letters, letters, letters...',
                'description' => '3 kitchens, 6 bed, 8 bath...',
                'size' => 666,
            ],
            [
                'img' => 'property_3.jpg',
                'price' => 600,
                'href' => 'cccc.html',
                'caption' => 'Fuisque dictum tortor at purus libero slfdkjsdflkjsfd ',
                'description' => '2 kitchens, 2 bed, 2 bath...',
                'size' => 788,
            ],
            [
                'img' => 'property_1.jpg',
                'price' => 500,
                'href' => 'aaaa.html',
                'caption' => 'Fuisque dictum tortor at purus libero',
                'description' => '2 kitchens, 2 bed, 2 bath...',
                'size' => 288,
            ],
            [
                'img' => 'property_2.jpg',
                'price' => 600,
                'href' => 'bbbb.html',
                'caption' => 'Fuisque dictum tortor at purus libero',
                'description' => '3 kitchens, 6 bed, 8 bath...',
                'size' => 666,
            ],
            [
                'img' => 'property_3.jpg',
                'price' => 600,
                'href' => 'cccc.html',
                'caption' => 'Fuisque dictum tortor at purus libero slfdkjsdflkjsfd ',
                'description' => '2 kitchens, 2 bed, 2 bath...',
                'size' => 788,
            ],
        ];
    }
}
