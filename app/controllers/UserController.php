<?php

class UserController extends BaseController {

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

        $user = new User;

        // return View::make( 'user.create' );
        return View::make( 'user.create' )->with( 'user', $user );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        $newUser = Input::all();
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