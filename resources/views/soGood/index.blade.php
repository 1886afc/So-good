@extends('../layouts.app')

@section('content')
    <h1>Hello world!</h1>
    <div class="panel-body">
        {{--<h1>Your Recipes</h1>--}}
        {{--@if(({{$recipe['title']}}) === 1)--}}
            {{--@foreach($recipe as $recipes)--}}
                {{--<div class="well">--}}
                    {{--<h3>{{$recipes->title}}</h3>--}}
                    {{--<h4>{{$recipes->servings}}</h4>--}}
                    {{--<h4>{{$recipes->ingredients}}</h4>--}}
                    {{--<p>{{$recipes->instructions}}</p>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--@else--}}
            {{--<p>You have no recipes!</p>--}}
        {{--@endif--}}



        {{--<a href="{{route('recipes.create')}}">Add new recipe</a>--}}
    </div>









    {{--Recipe:--}}
        {{--<a href="{{route('peanutbutters.show', ['id' => $butter->id])}}">{{$butter->name}}</a>--}}
        {{--@if($butter->organic)--}}
            {{--<span class="badge label-success">Organic!</span>--}}
        {{--@else--}}
            {{--<span class="label label-danger">Body pollution.</span>--}}

        {{--<br/>--}}
        {{--<form method="post"--}}
              {{--action="{{route('peanutbutters.destroy', ['id' => $butter->id])}}">--}}
            {{--{{ method_field('DELETE') }}--}}
            {{--{{csrf_field()}}--}}
            {{--<input type="submit" value="x" class="btn btn-danger"/>--}}
        {{--</form>--}}

    {{--<a href="{{route('peanutbutters.create')}}">New PB?</a>--}}

@stop