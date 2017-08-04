@extends('../layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading, center" ><h3>Welcome to So Good</h3>

                    </div>

                    <div class="panel-body">
                        <h1>All the recipes</h1>

                        @foreach($recipe as $recipes)

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
                                            <h5>Created: {{$recipes->created_at}}</h5>

                                        </div>
                                    </div>


                                </div>


                        @endforeach







                    </div>
                </div>
            </div>
        </div>
    </div>


@stop