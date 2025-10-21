<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['username']        = 'Heroku';
        $data['last_login']      = date('Y-m-d H:i:s');
        $data['list_pendidikan'] = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function signup(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'     => 'required|max:10',
            'email'    => ['required', 'email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);

        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;
        return view('signup-success', $pageData);

    }

    public function redirectTo($tujuan)
    {
        $tujuan = strtolower(string: $tujuan);
        if ($tujuan === 'login') {
            return redirect()->route(route: 'auth.index');
        } elseif ($tujuan === 'belanja') {
            return redirect()->away(path: 'https://www.tokopedia.com');
        } else {
            return redirect()->route(route: 'home')->with(key: 'info', value: 'Selamat Datang.');
        }
    }
}
