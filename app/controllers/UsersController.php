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

    public function logout() {
        Auth::logout();
        Session::flash( 'message', 'logged out' );
        return Redirect::to('/');
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();

        return View::make( 'user.index', array( 'users' => $users->toArray() ));
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

        // echo $assetObj;

        return View::make( 'user.create' , array( 'user' => $user, 'artists' => $artists ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $data = Input::all();
        $data['password'] = Hash::make( $data['password'] );
        if( empty($data['artist_id'])) {
            $data['artist_id'] = 0;
        }

        $newUser = new User( $data );

        $newUser->save();
        // $assetObj = new Asset;
        // $assetObj->title = 'test';
        // $assetObj->summary = 'test';
        // $assetObj->type = 'test';
        // $assetObj->url = 'http://';
        // $assetObj->artist_id = $newUser['artist_id']; //Auth::user()->id;
        // $assetObj->save();

        // // store the image and write an entry in the asset table
        // if (Input::hasFile('picture')) {
        //     // check if the directory is there
        //     if( !file_exists( base_path() . '/assets' )) {
        //         mkdir( base_path() . '/assets' );
        //     }
        //     if( !file_exists( base_path() . '/assets/users/' )) {
        //         mkdir( base_path() . '/assets/users' );
        //     }
        //     if( !file_exists( base_path() . '/assets/users/' . $newUser['id'] )) {
        //         mkdir( base_path() . '/assets/users/' . $newUser['id'] .'/' );
        //     }
        //     // build the file name for the picture ASSET_ID-USER_ID
        //     $fileName = base_path() . '/assets/users/' . $newUser['id'] .'/' . 'profile.jpg';
        //     Input::file('picture')->move( base_path() . '/assets', $fileName );
        // }


        // return View::make( 'user.create' , array( 'user' => $user, 'artists' => $artists ));

        return View::make( 'user.show', array( 'user' => $newUser, 'artists' => Artist::all()->lists( 'name' ) ))->with( 'flash', 'SUCCESS! User was created' )   ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show( $id )
    {
        // get data
        $user = User::findOrFail( $id );
        return View::make( 'user.show', array( 'user' => $user ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit( $id )
    {
        $artists = Artist::all()->lists( 'name' );

        // throws a 404 if not found SWEET
        $user = User::findOrFail( $id );
        return View::make( 'user.edit' , array( 'user' => $user, 'artists' => $artists ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( $id )
    {
        $artists = Artist::all()->lists( 'name' );
        // throws a 404 if not found SWEET
        $user = User::findOrFail( $id );
        
        $newVals = Input::all();

        $user->email    = $newVals['email'];
        $user->password = $newVals['password'];
        $user->admin    = $newVals['admin'];
        $user->name     = $newVals['name'];
        $user->bio      = $newVals['bio'];
        $user->facebook_url = $newVals['facebook_url'];
        $user->twitter_url  = $newVals['twitter_url'];

        $user->save();    
        return View::make( 'user.show' , array( 'user' => $user, 'artists' => $artists ));
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
