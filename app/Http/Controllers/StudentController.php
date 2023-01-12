<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
    }

    public function pendaftaran(){
        return view('pendaftaran');
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
    public function storePendaftaran(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
            'referensi' => 'required',
        ]);
        Student::create([
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'referensi' => $request->referensi,
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->nisn),
            'is_admin' => 0,
        ]);
        
        // noay = no hp ayah 
        // nobu = no hp ibu

        // $item['password'] = bcrypt($request['password']);

        // user::create($credentials);

        return redirect()->route('cetak_pdf');
    }

    public function pdf(){
        $data = Student::latest()->get()->first();
        return view('cetak_pdf', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
