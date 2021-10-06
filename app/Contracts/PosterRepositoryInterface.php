<?php

namespace App\Contracts;

use App\Models\Admin\Poster;
use App\Http\Requests\PosterRequest;

interface PosterRepositoryInterface
{
    public function indexPoster();

    public function createPoster();

    public function storePoster(PosterRequest $request);

    public function showPoster(Poster $Poster);

    public function editPoster(Poster $Poster);

    public function updatePoster(PosterRequest $request, Poster $Poster);

    public function destroyPoster(Poster $Poster);
}
