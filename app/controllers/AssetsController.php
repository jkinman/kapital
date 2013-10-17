<?php

class AssetsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all assets
        $assets = Asset::all();
        return View::Make( 'assets.index', compact( 'assets' ));
        // return View::make( 'blogs.create', compact( 'blog' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        echo( 'create' );
        die();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $data = Input::all();

        $asset = new Asset;
        if( !empty( $data['user_id'] )) {
            $asset->user_id     = $data['user_id'];
            $user = User::find( $data['user_id'] );
            $asset->artist_id     = $user->artist_id;

        }
        if( !empty( $data['artist_id'] )) {
            $asset->artist_id     = $data['artist_id'];
        }
        $asset->url         = $data['url'];
        if( !empty( $data['type'] )) {
            $asset->type     = $data['type'];
        }
        $asset->save();
        return( 'ok' );
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