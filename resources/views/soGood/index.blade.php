@extends('../welcome')

@section('content')

    <h1>Hello world!</h1>
    Title: {{$recipes[0]['title']}}


    {{--@foreach($recipes as $rec)--}}
        {{--Recipe:--}}
        {{--<a href="{{route('peanutbutters.show', ['id' => $butter->id])}}">{{$butter->name}}</a>--}}
        {{--@if($butter->organic)--}}
            {{--<span class="badge label-success">Organic!</span>--}}
        {{--@else--}}
            {{--<span class="label label-danger">Body pollution.</span>--}}
        {{--@endif--}}
        {{--<br/>--}}
        {{--<form method="post"--}}
              {{--action="{{route('peanutbutters.destroy', ['id' => $butter->id])}}">--}}
            {{--{{ method_field('DELETE') }}--}}
            {{--{{csrf_field()}}--}}
            {{--<input type="submit" value="x" class="btn btn-danger"/>--}}
        {{--</form>--}}
    {{--@endforeach--}}

    {{--<a href="{{route('peanutbutters.create')}}">New PB?</a>--}}

@stop