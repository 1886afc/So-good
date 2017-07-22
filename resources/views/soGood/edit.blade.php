@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading, center" ><h2>Editing {{$recipe->title}}</h2></div>
                        <div class="panel-body">
                            <a href="{{ url('/home') }}">&larr; back</a>
                            @if($saved)
                                <div class="alert alert-success">Saved!</div>
                            @endif
                            <form method="post"
                                  action="{{route('recipes.update', ['id' => $recipe->id])}}" enctype="multipart/form-data">

                                <h4>Title:</h4>
                                <input type="text" name="title" value=" {{$recipe->title}}"/>

                                <h4>Ingredients:</h4>
                                <input type="text" name="ingredients" value=" {{$recipe->ingredients}}"/>

                                <h4>Serings:</h4>
                                <input type="text" name="servings" value="{{$recipe->servings}}"/>

                                <h4>Instructions:</h4>
                                <input type="text" name="instructions" value="{{$recipe->instructions}}"/>

                                <div class="form-group">
                                    <input type="file" name="image" accept="image/*">
                                </div>

                                {{ method_field('PUT') }}
                                {{csrf_field()}}
                                <input type="submit" value="Save"/>
                            </form>
                            <script>
                                setTimeout(function  (){
                                    $(".alert-success").slideUp();
                                }, 2000);

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
