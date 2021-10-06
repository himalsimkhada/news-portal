<?php

namespace App\Repositories;

use App\Models\Admin\Poster;
use Illuminate\Support\Facades\Cache;
use App\Contracts\PosterRepositoryInterface;
use App\Http\Requests\PosterRequest;

class PosterRepository implements PosterRepositoryInterface
{
    // Poster Index
    public function indexPoster()
    {
        $posters = config('adminetic.caching', true)
            ? (Cache::has('posters') ? Cache::get('posters') : Cache::rememberForever('posters', function () {
                return Poster::latest()->get();
            }))
            : Poster::latest()->get();
        return compact('posters');
    }

    // Poster Create
    public function createPoster()
    {
        //
    }

    // Poster Store
    public function storePoster(PosterRequest $request)
    {
        Poster::create($request->validated());
    }

    // Poster Show
    public function showPoster(Poster $poster)
    {
        return compact('poster');
    }

    // Poster Edit
    public function editPoster(Poster $poster)
    {
        return compact('poster');
    }

    // Poster Update
    public function updatePoster(PosterRequest $request, Poster $poster)
    {
        $poster->update($request->validated());
    }

    // Poster Destroy
    public function destroyPoster(Poster $poster)
    {
        $poster->delete();
    }
}
