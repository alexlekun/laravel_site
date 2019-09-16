<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use Validator;

class PortfolioController extends Controller
{   

    public function ajaxRequestPost(Request $request){

        $rules = ['name' => 'required',
                  'surname' => 'required',
                  'address' => 'required',
                  'age' => 'required|integer'
                 ];

        $textOfErrors = [ 'name.required' => 'Необходимо ввести своё имя.',
                          'surname.required' => 'Необходимо ввести свою фамилию.',
                          'address.required' => 'Необходимо указать адрес проживания.',
                          'age.required' => 'Укажите свой возраст.',
                          'age.integer' => 'Укажите возвраст числом.'
                        ];

        $validator = Validator::make($request->all(), $rules, $textOfErrors);
                                                  
        if($validator->passes()){

            /* Если необходимо записать данные в БД.

            $guest = new Guest;

            $guest->name = $request->input('name');
            $guest->surname = $request->input('surname');
            $guest->address = $request->input('address');
            $guest->age = $request->input('age'); 

            $guest->save();*/

            return response()->json(['name' => $request->input('name'),
                                     'surname' => $request->input('surname'),
                                     'address' => $request->input('address'),
                                     'age' => $request->input('age')
                                    ]);
        }

        return response()->json(['errors' => $validator->errors()->all()]);       
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
