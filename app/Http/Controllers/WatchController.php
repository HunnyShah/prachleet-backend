<?php

namespace App\Http\Controllers;
Use App\Models\Watchs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchController extends Controller
{
    //
    // $descs = DB::table('watchs')
    //         ->leftJoin('descs', 'watchs.descs_id', '=', 'descs.id')->where('watchs.watch_id','=', auth()->watch()->id)
    //         ->get();
    public function list() {
        return view( 'watchs.list', [
            'watchList' => Watchs::all()
        ] );
    }

    public function addForm() {
        return view( 'watchs.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'name' => 'required'
        ] );

        $watch = new Watchs();
        $watch->name = $attributes[ 'name' ];
        $watch->save();

        return redirect( '/watchs/list' )
        ->with( 'message', 'Movie has been added!' );
    }

    public function editForm( Watchs $watch ) {
        return view( 'watchs.edit', [
            'watch' => $watch
        ] );
    }

    public function edit( Watchs $watch ) {

        $attributes = request()->validate( [
            'name' => 'required'
        ] );

        $watch->name = $attributes[ 'name' ];
        $watch->save();

        return redirect( '/watchs/list' )
        ->with( 'message', 'Movie has been edited!' );
    }

    public function delete( Watchs $watch ) {
        $watch->delete();

        return redirect( '/watchs/list' )
        ->with( 'message', 'Movie has been deleted!' );

    }

    public function imageForm( Watchs $watch ) {
        return view( 'watchs.image', [
            'watch' => $watch,
        ] );
    }

    public function image( Watchs $watch ) {

        $attributes = request()->validate( [
            'photo' => 'required|url',
        ] );

        // Storage::delete( $project->image );

        // $path = request()->file( 'image' )->store( 'projects' );

        $watch->photo = $attributes[ 'photo' ];
        $watch->save();

        return redirect( '/watchs/list' )
        ->with( 'message', 'Movie image has been edited!' );
    }
}
