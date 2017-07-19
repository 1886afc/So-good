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
                            <h4>Ingredients: {{$recipe->ingredients}}</h4>
                            <h4>Servings: {{$recipe->servings}}</h4>
                            <p>Instructions: {{$recipe->instructions}}</p>
                            <a class="btn btn-primary" href="{{route('recipes.edit', ['id' => $recipe->id])}}">Edit</a>
                            <form method="post"
                                  action="{{route('recipes.destroy', ['id' => $recipe->id])}}">
                                {{ method_field('DELETE') }}
                                {{csrf_field()}}
                                <input type="submit" value="delete" class="btn btn-danger"/>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection