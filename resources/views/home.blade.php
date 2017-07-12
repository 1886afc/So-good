@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading, center" ><h3>Welcome Back!  {{Auth::user()->name}}</h3></div>

                <div class="panel-body">

                    <h1>Hello world!</h1>
                    {{--@foreach($recipe as $rec)--}}
                        {{--@if ($rec->user_id = Auth::user()->id)--}}
                        {{--<div class=container>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--Title: {{$rec['title']}}--}}
                                {{--</li>--}}
                                {{--<li>ingredients: {{$rec['ingrediants']}}</li>--}}
                                {{--<li>instructions: {{$rec['instructions']}}</li>--}}
                                {{--<li>servings: {{$rec['servings']}}</li>--}}




                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                    <a href="{{route('recipes.create')}}">Add new recipe</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
