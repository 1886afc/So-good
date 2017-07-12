@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>add a recipe</h1>

        <form method="post" action="{{route('recipes.store')}}">
            Type of food: <input type="text" name="type"/>
            Title: <input type="text" name="title"/>
            Ingredients: <input type="text" name="ingredients"/>
            Instructions: <input type="text" name="instructions"/>
            Total servings: <input type="text" name="servings"/>
            <input type="submit" value="SEND!!!!! "/>
            {{csrf_field()}}
        </form>
    </div>
@endsection
