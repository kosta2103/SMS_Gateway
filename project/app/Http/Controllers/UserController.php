<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Role::create(['name' => 'student']);
        //Role::create(['name' => 'professor']);        
        //User::create(['name' => 'Kosta', 'surname' => 'Samardzic', 'email' => 'kosta@gmail.com', 'password' => 'kosta123', 'role_id' => 1]);
        //User::create(['name' => 'Nikola', 'surname' => 'Samardzic', 'email' => 'nikola@gmail.com', 'password' => 'kosta123', 'role_id' => 2]);
        //Student::create(['id' => 1, 'index_number' => 561, 'year_enrolled' => 2015, 'mobile_number' => '0698288758', 'verification_code' => '123ds']);
        //DB::table('users')->insert(['name' => 'Nikola', 'surname' => 'Samardzic', 'email' => 'nikola@gmail.com', 'password' => 'kosta123', 'role_id' => 2]);        
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
