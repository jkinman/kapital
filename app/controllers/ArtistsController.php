<?php

class ArtistsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $artists = Artist::all();
        return View::make( 'artists.index', array( 'artists' => $artists ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $artist = new Artist;

        return View::make( 'artists.create' , array( 'artist' => $artist ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //

        $artist = Artist::create( Input::all() );
        return Redirect::to( 'artists/' . $artist['id'] );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        // return( 'artist with id '.$id );
        $artist = Artist::find( $id );
        return( var_dump($artist));
        return View::make( 'artists.show' , array( 'artist' => $artist ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}