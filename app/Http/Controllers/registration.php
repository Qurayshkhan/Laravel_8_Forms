<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class registration extends Controller
{
    function showform(){
        print_r('Get_Method');
        return view('registration');
    }
    function signup(Request $request){
        print_r('POST Method');
        echo '<br>';
        return redirect('olddata')->withInput();
    //   dd($request);
    //  print_r($request->all());
    //   print_r($request->input('name'));
    //   echo '<br>';
    //   print_r($request->input('email'));
    //   echo '<br>';
    //   print_r($request->input('password'));
    //   echo '<br>';
    // print_r($request->name);
    // print_r($request->email);
    // print_r($request->password);
// if ($request->has('name')) {
//     print_r($request->input('name'));
// }
// if ($request->has(['name','email'])) {
//     print_r($request->input('name'));
//     print_r($request->input('email'));
//     print_r($request->input('password'));
// }
// if ($request->hasAny(['name','email'])) {
//     print_r($request->input('name'));
//     print_r($request->input('email'));
//     print_r($request->input('password'));
// }
// if ($request->filled(['name','email'])) {
//     print_r($request->input('name'));
//     print_r($request->input('email'));
//     print_r($request->input('password'));
// }
// if ($request->missing(['name1','email1'])) {
//     print_r('inside missing');
//     print_r('name 1');
// }
$request->flash();
//$request->flashOnly('name');
$request->flashOnly(['name','email']);
print_r($request->old('name'));
print_r($request->old('email'));
        return view('registration');
    }
}
