<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPage()
    {
        return view('layouts.frontend');
    }
    public function Contactus()
    {
      return view('Pages.Contact_us');
    }
    public function Aboutus()
    {
      return view('Pages.About_us');
    }
    public function Pizza()
    {
      return view('Pages.Pizza');
    }
    public function Noodles()
    {
      return view('Pages.Noodles');
    }
    public function Juice()
    {
      return view('Pages.Juice');
    }
    public function Hamburger()
    {
      return view('Pages.Hamburger');
    }
    public function Cupcake()
    {
      return view('Pages.Cupcake');
    }
    public function Login()
    {
      return view('Auth.Login');
    }
    public function Register()
    {
      return view('Auth.Register');
    }
    public function Los_mayas_vegetable()
    {
      return view('Pages.Los-mayas-vegetable');
    }
    public function Chickens_los_mayas()
    {
      return view('Pages.Chickens-los-mayas');
    }
    public function Peas_noodles_los()
    {
      return view('Pages.Peas-noodles-los');
    }
    public function los_berry_beboppin()
    {
      return view('Pages.los-berry-beboppin');
    }
    public function Berry_bunch_beboppin()
    {
      return view('Pages.Berry-bunch-beboppin');
    }
    public function Breakfast_of_champions()
    {
      return view('Pages.Breakfast-of-champions');
    }
    public function Bushels_of_fun()
    {
      return view('Pages.Bushels-of-fun');
    }
    public function Cooking_up_a_storm()
    {
      return view('Pages.Cooking-up-a-storm');
    }
    public function Trix_is_for_kids()
    {
      return view('Pages.Trix-is-for-kids');
    }
    public function The_sweet_fruits_of_summer()
    {
      return view('Pages.The-sweet-fruits-of-summer');
    }
    public function  Milk_it_does_a_baby_good()
    {
      return view('Pages.Milk-it-does-a-baby-good');
    }
    public function  Food_Fight_and_mommy_lost()
    {
      return view('Pages.Food-Fight-and-mommy-lost');
    }
    public function  Just_a_little_bit_corny()
    {
      return view('Pages.Just-a-little-bit-corny');
    }
    public function   Finger_lickin_good()
    {
      return view('Pages.Finger-lickin-good');
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
