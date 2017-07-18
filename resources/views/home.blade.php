@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading, center" ><h3>Welcome Back!  {{Auth::user()->name}}</h3></div>

                <div class="panel-body">
                    <h1>Your Recipes</h1>

                    @foreach($recipe as $recipes)
                        @if(($recipes->user_id)===Auth::user()->id)
                        <div class="well">
                            <h3> <a href="{{route('recipes.show',['id'=>$recipes->id])}}">{{$recipes->title}}</a> </h3>
                            <h4>{{$recipes->servings}}</h4>
                            <h4>{{$recipes->ingredients}}</h4>
                            <p>{{$recipes->instructions}}</p>
                            <p>{{$recipes->user_id}}</p>
                        </div>
                        @else
                            <p>You have no recipes!</p>
                        @endif
                    @endforeach




                    <a href="{{route('recipes.create')}}">Add new recipe</a>
            </div>
        </div>
    </div>
</div>
@endsection
