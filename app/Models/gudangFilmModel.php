<?php

namespace App\Models;

use CodeIgniter\Model;

class gudangFilmModel extends Model
{
    protected $table = 'film';
    protected $dateFormat = 'date';

    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } else {
            return $this->where(['slug' => $slug])->first();
        }
    }

    public function getGenre($genre)
    {
        return $this->like(['genre' => $genre])->get()->getResult();
    }
}
