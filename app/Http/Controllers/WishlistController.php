<?php

namespace App\Http\Controllers;
Use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    //
    public function list()
    {
        // $events=Wishlist::with('getMovies')->get();
        // error_log($events);
        // Log::error($events);
        $users = DB::table('wishlists')
            ->leftJoin('watchs', 'wishlists.watch_id', '=', 'watchs.id')->where('wishlists.user_id','=', auth()->user()->id)
            ->get();
        return view('wishlist.list', [
            'wishlist' => $users
        ]);

    }

    public function add() {

        $attributes = request()->validate( [
            'userid' => 'required',
            'watchid' => 'required'
        ] );
        
        $exists = Wishlist::where(['user_id'=> auth()->user()->id,
        'watch_id'=> $attributes[ 'watchid' ]])
        ->get();

        if(is_null($exists)) {

        $wish = new Wishlist();
        $wish->user_id = $attributes[ 'userid' ];
        $wish->watch_id = $attributes[ 'watchid' ];
        $wish->save();
        // $user = User::find($attributes[ 'userid' ]);
        // $watch = Watch::find($attributes[ 'watchid' ]);	 
        // $userContactInfo->user()->associate($user)->save();

        return redirect( '/watchs/list' )
        ->with( 'message', 'Movie added to Wishlist!' );
        }
        // return redirect( '/watchs/list' )
        // ->with( 'message', 'Movie already exists in wishlist!' );
    }

    public function delete( Wishlist $wishlist ) {

        // $wishlist = Wishlist::find($id);
        $wishlist->delete();

        return redirect( '/wishlist/list' )
        ->with( 'message', 'Movie has been Removed!' );

    }
}
