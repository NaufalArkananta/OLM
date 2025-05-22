<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Property;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function toggle(Property $property)
    {
        $userId = session('user_id');

        $wishlist = Wishlist::where('user_id', $userId)
            ->where('property_id', $property->id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['status' => 'removed']);
        }

        Wishlist::create([
            'user_id' => $userId,
            'property_id' => $property->id,
        ]);

        return response()->json(['status' => 'added']);
    }
}
