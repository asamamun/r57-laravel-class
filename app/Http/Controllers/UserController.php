<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $allUser = User::all();
        // $allUser = User::paginate(10);
        $allUser = User::with('profile')->paginate(10);
        // dd($allUser);
        return view('user.index', ['users' => $allUser]);
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

    public function profiletest($id){
        $duinumberuser = User::find($id);
        $p = new Profile();
        $p->first_name = fake()->firstName();
        $p->last_name = fake()->lastName();
        $p->phone = fake()->phoneNumber();
        $p->address = fake()->address();
        $p->photo = fake()->imageUrl(640, 480, 'animals', true);
        $p->gender = fake()->randomElement(['male', 'female','other']);
        $p->birthday = fake()->date();
        $p->website = fake()->url();
        $p->description = fake()->text(100);
        $p->status = fake()->numberBetween(0, 1);
        $result = $duinumberuser->profile()->save($p);
        dd($result);
        
    }

    public function showuser($uid){
        dd(User::find($uid));
    }

}
