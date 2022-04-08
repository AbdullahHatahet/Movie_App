<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /*Http::fake([
        'https://api.themoviedb.org/3/movie/popular' => $this->fakeSingleMovie()
    ])*/

    public function the_main_page_shows_correct_info()
    {
        $respons = $this->get(url('/'));

        $respons -> assertSuccessful();
    }
}