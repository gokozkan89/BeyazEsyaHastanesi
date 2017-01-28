<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {

        $portfolyo = [
            [
                "images" => "img/portfolio/1.jpg",
                "title" => "Soğutma Sistemleri"
              
            ],
            [
                "images" => "img/portfolio/2.jpg",
                "title" => "Soğutma Sistemleri"
            ]
            ,
            [
                "images" => "img/portfolio/3.jpg",
                "title" => "Soğutma Sistemleri"
            ]
            ,
            [
                "images" => "img/portfolio/4.jpg",
                "title" => "Soğutma Sistemleri"
            ]
            ,
            [
                "images" => "img/portfolio/5.jpg",
                "title" => "Soğutma Sistemleri"
            ]
            ,
            [
                "images" => "img/portfolio/6.jpg",
                "title" => "Soğutma Sistemleri"
        ]];
        





        return view('welcome', [
            "portfolio" => $portfolyo
        ]);
    }
}