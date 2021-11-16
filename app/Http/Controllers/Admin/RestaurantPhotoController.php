<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantPhotoController extends Controller
{
    
    public function index($id)
    {
        $restaurant_id = $id;
        return view('admin.restaurants.photos.index', compact('restaurant_id'));
    }

    public function save(Request $request, $id)
    {

        foreach($request->file('photos') as $photo) {

            $newNome = sha1($photo->getClientOriginalName()).uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images'), $newNome);

            $restaurant = Restaurant::find($id);
            $restaurant->photos()->create([
                'photo' => $newNome
            ]);

            flash()->success('Upload de fotos realizado com sucesso.');
            return redirect()->route('restaurant.photo', ['id' => $id]);
        }
    }
}
