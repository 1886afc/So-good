<?php

namespace App\Http\Controllers;

use App\recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $recipe = Recipe::all();
//        return view('SoGood.index')->with('recipes', $recipe);
        return view( 'soGood.index', [ 'recipe' => recipe::all() ] );


    }

    public function home()
    {
//        $recipe = Recipe::all();
//        return view('SoGood.index')->with('recipes', $recipe);
        return view( 'home', [ 'recipe' => recipe::all() ] );


    }


    public function about(){
        return view('soGood.about');
    }

    public function contact(){
        return view('soGood.contact');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soGood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new recipe();
        $new->type = $request->get('type');
        $new->title = $request->get('title');
        $new->ingredients = $request->get('ingredients');
        $new->instructions = $request->get('instructions');
        $new->servings = $request->get('servings');
        $new->user_id = Auth::user()->id;
        $new->save();

//        return redirect( route( 'home' ) );
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = recipe::find( $id );

        return view( 'soGood.show', [ 'recipe' => $recipes ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipes = recipe::find( $id );
        $saved         = \request()->get( 'saved', false );

        return view( 'soGood.edit', [ 'recipe' => $recipes, 'saved' => $saved ] );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $thisRecipe       = recipe::find( $id );
        $thisRecipe->title = $request->get( 'title' );
        $thisRecipe->ingredients = $request->get( 'ingredients' );
        $thisRecipe->servings = $request->get( 'servings' );
        $thisRecipe->instructions = $request->get( 'instructions' );
        $thisRecipe->save();

        return redirect( route( 'recipes.edit',
            [ 'id' => $id, 'saved' => true ] ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipes = recipe::find( $id );
        $recipes->delete();

        return redirect('home');
    }
}
