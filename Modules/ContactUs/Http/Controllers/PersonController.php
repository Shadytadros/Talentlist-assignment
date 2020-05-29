<?php

namespace Modules\ContactUs\Http\Controllers;
use Modules\ContactUs\Entities\Person;
use Modules\ContactUs\Emails\Welcome;
use App\Mail\NewUserWelcomeMail;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contactus::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contactus::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        $person = new Person([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone')
        ]);
        $person->save();
        Mail::to($person->email)->send(new NewUserWelcomeMail);
        return Redirect::to('admin');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('contactus::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('contactus::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $person = Person::find($id);
        $person->name =  $request->get('name');
        $person->email = $request->get('email');
        $person->phone = $request->get('phone');
        $person->save();

        return redirect('/admin')->with('success', 'info updated!');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
