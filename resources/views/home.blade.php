@extends('layouts.app')

<style>

    .recipe {
       background-color: #9b8a30;
    }
</style>

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading, center" ><h3>Welcome Back!  {{Auth::user()->name}}</h3>
                    <a href="{{route('recipes.create')}}">Add new recipe</a>
                </div>

                <div class="panel-body">
                    <h1>Your Recipes</h1>

                    @foreach($recipe as $recipes)
                        @if(($recipes->user_id)===Auth::user()->id)
                        <div class="well recipe">

                            <div class="row">
                               <div class="col-md-4 col-sm-4 ">
                                    <img style="width: 100%" src="/storage/recipe_images/{{$recipes->image}}">
                               </div>

                                <div class="col-md-8 col-sm-8 ">
                                    <h3> <a href="{{route('recipes.show',['id'=>$recipes->id])}}"> <b>{{$recipes->title}}</b></a> </h3>
                                    <h4> <b>Servings:</b> {{$recipes->servings}}</h4>
                                    <h4> <b>ingredients:</b> {{$recipes->ingredients}}</h4>
                                    <p> <b>Instructions:</b> {{$recipes->instructions}}</p>
                                    {{--<form method="post"--}}
                                    {{--action="{{route('recipes.destroy', ['id' => $recipes->id])}}">--}}
                                    {{--{{ method_field('DELETE') }}--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<input type="submit" value="delete" class="btn btn-danger"/>--}}
                                    {{--</form>--}}
                                </div>
                            </div>


                        </div>
                        @else

                        @endif


                    @endforeach







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
