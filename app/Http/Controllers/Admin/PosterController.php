<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Poster;
use Illuminate\Http\Request;
use App\Http\Requests\PosterRequest;
use App\Http\Controllers\Controller;
use App\Contracts\PosterRepositoryInterface;

class PosterController extends Controller
{
    protected $posterRepositoryInterface;

    public function __construct(PosterRepositoryInterface $posterRepositoryInterface)
    {
        $this->posterRepositoryInterface = $posterRepositoryInterface;
        $this->authorizeResource(Poster::class, 'poster');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.poster.index', $this->posterRepositoryInterface->indexPoster());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.poster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PosterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PosterRequest $request)
    {
        $this->posterRepositoryInterface->storePoster($request);
        return redirect(adminRedirectRoute('poster'))->withSuccess('Poster Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        return view('admin.poster.show', $this->posterRepositoryInterface->showPoster($poster));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        return view('admin.poster.edit', $this->posterRepositoryInterface->editPoster($poster));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PosterRequest  $request
     * @param  \App\Models\Admin\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(PosterRequest $request, Poster $poster)
    {
        $this->posterRepositoryInterface->updatePoster($request, $poster);
        return redirect(adminRedirectRoute('poster'))->withInfo('Poster Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        $this->posterRepositoryInterface->destroyPoster($poster);
        return redirect(adminRedirectRoute('poster'))->withFail('Poster Deleted Successfully.');
    }
}
