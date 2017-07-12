@extends('../welcome')

@section('content')
    <h1>Hello world!</h1>
        @foreach($recipes as $rec)
            {{--@if ($rec->user_id = Auth::user()->id)--}}
            <div class=container>
                <ul>
                    <li>
                        Title: {{$rec['title']}}
                    </li>
                    <li>ingredients: {{$rec['ingrediants']}}</li>
                    <li>instructions: {{$rec['instructions']}}</li>
                    <li>servings: {{$rec['servings']}}</li>




                </ul>
            </div>
            {{--@endif--}}
        @endforeach
    <a href="{{route('recipes.create')}}">Add new recipe</a>







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