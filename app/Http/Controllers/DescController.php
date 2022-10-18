<?php

namespace App\Http\Controllers;
use App\Models\Descs;
use Illuminate\Http\Request;

class DescController extends Controller
{
    public function list() {
        return view( 'descs.list', [
            'descsList' => Descs::all()
        ] );
    }

    public function addForm() {
        return view( 'descs.add' );
    }

    public function add() {

        $attributes = request()->validate( [
            'name' => 'required',
            'rate' => 'required',
            'cast' => 'required',
            'info' => 'required'
        ] );

        $descs = new Descs();
        $descs->name = $attributes[ 'name' ];
        $descs->info = $attributes[ 'info' ];
        $descs->rate = $attributes[ 'rate' ];
        $descs->cast = $attributes[ 'cast' ];

        $descs->save();

        return redirect( '/descs/list' )
        ->with( 'message', 'Description has been added!' );
    }

    public function editForm( Descs $descs ) {
        return view( 'descs.edit', [
            'desc' => $descs
        ] );
    }

    public function edit( Descs $descs ) {

        $attributes = request()->validate( [
            'name' => 'required',
            'rate' => 'required',
            'cast' => 'required',
            'info' => 'required'
        ] );

        $descs->name = $attributes[ 'name' ];
        $descs->rate = $attributes[ 'rate' ];
        $descs->cast = $attributes[ 'cast' ];
        $descs->info = $attributes[ 'info' ];
        $descs->save();

        return redirect( '/descs/list' )
        ->with( 'message', 'Description has been edited!' );
    }

    public function delete( Descs $descs ) {
        $descs->delete();

        return redirect( '/descs/list' )
        ->with( 'message', 'Description has been deleted!' );

    }

    public function imageForm( Descs $descs ) {
        return view( 'descs.image', [
            'descs' => $descs,
        ] );
    }

    public function image( Descs $descs ) {

        $attributes = request()->validate( [
            'photo' => 'required|url',
        ] );

        // Storage::delete( $project->image );

        // $path = request()->file( 'image' )->store( 'projects' );

        $descs->photo = $attributes[ 'photo' ];
        $descs->save();

        return redirect( '/descs/list' )
        ->with( 'message', 'Description image has been edited!' );
    }
}
