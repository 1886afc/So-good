@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading, center" ><h2>You're About to Make something Awesome!</h2></div>

                    <div class="panel-body">
                        <div class="well">
                            <h3> {{$recipe->title}}</h3>
                            <img style="width: 100%" src="/storage/recipe_images/{{$recipe->image}}">
                            <br> <br>
                            <h4>Ingredients: {{$recipe->ingredients}}</h4>
                            <h4>Servings: {{$recipe->servings}}</h4>
                            <p>Instructions: {{$recipe->instructions}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection