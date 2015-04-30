<?php namespace App\Http\Controllers;


use Request;
use App\Http\Controllers\Controller;
use App\Contact;


class ContactController extends Controller {



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return all of our Contacts from database
        return response()->json(Contact::all());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // setup our backend validator
        $validator = \Validator::make(
            [
                'name' => Request::input('name'),
                'phone' => Request::input('phone')

            ],

            [
                'name' => 'required|min:4|max:30|string',
                'phone' => 'required|digits_between:8,30'
            ]
        );

        if($validator->passes()) {
            Contact::create(array(
                'name'  => Request::input('name'),
                'phone' => Request::input('phone')
            ));

            return response()->json(array('success' => true));

        } else {

            return response()->json(array('success' => false));
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        return response()->json(array('success' => true));
    }



    // keeping things simple for now
    // we're not using functions update, show, edit, create in this API
}