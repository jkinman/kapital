<?php

class BlogsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return View::make( 'blogs.index' )->with( 'blogs', $blogs );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $blog = new Blog();
        return View::make( 'blogs.create', compact( 'blog' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // throw the contents of the form into a new record
        $newObj = Input::all();
        $newObj['user_id'] = Auth::user()->id;

        $newEntry = Blog::create( $newObj );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail( $id );
        return View::make( 'blogs.show', array( 'blog' => $blog ));
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