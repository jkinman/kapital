<?php

class UsersController extends BaseController {

    /**
     * Show login form
     *
     * @return Response
     */
    public function loginForm()
    {
        return View::make( 'user.login' );
    }

    /**
     * do auth work here
     *
     * @return Response
     */
    public function login()
    {
        // call to auth on the users table

        // create our user data for the authentication
        $userData = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt( $userData )) {
            return Redirect::to('home');
        }
        else {
            Session::flash( 'message', 'login failed' );
            return Redirect::to('superSecretLogin');
        }
    }



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();

        return View::make( 'user.index', array( 'users' => $users ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $artists = Artist::all()->lists( 'name' );
        $user = new User;

        echo $assetObj;


        return View::make( 'user.create' , array( 'user' => $user, 'artists' => $artists ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $newUser = Input::all();
        $newUser['password'] = Hash::make( $newUser['password'] );

        $assetObj = new Asset;
        $assetObj->title = 'test';
        $assetObj->summary = 'test';
        $assetObj->type = 'test';
        $assetObj->url = 'http://';
        $assetObj->artist_id = Auth::user()->id;
        $assetObj->save();

        // store the image and write an entry in the asset table
        if (Input::hasFile('picture')) {
            $assetObj = new Asset;
            // $fileName = $assetObj
            Input::file('picture')->move( base_path() . '/assets', $fileName );
        }

        print_r( $newUser  );

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