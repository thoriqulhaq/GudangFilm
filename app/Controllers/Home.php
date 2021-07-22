<?php

namespace App\Controllers;

use App\Models\gudangFilmModel;

class Home extends BaseController
{
    protected $filmModel;
    protected $category = array();

    public function __construct()
    {
        $this->filmModel = new gudangFilmModel();

        $genre = $this->filmModel->getFilm();
        foreach ($genre as $g) :
            $split = array_map('trim', explode(', ', $g['genre']));
            for ($i = 0; $i < sizeof($split); $i++) {
                array_push($this->category, $split[$i]);
            }
        endforeach;

        $this->category = array_unique($this->category);
    }

    public function index()
    {
        $page = [
            'title' => 'GudangFilm | Home',
            'film' => $this->filmModel->getFilm(),
            'category' => $this->category
        ];

        return view('/pages/index', $page);
    }

    public function more($slug)
    {
        $page = [
            'film' => $this->filmModel->getFilm($slug),
            'title' => 'Movie',
            'category' => $this->category
        ];

        return view('/pages/more', $page);
    }

    public function category($genre)
    {

        $page = [
            'film' => $this->filmModel->getGenre($genre),
            'title' => $genre,
            'category' => $this->category
        ];

        return view('/pages/category', $page);
    }
}
