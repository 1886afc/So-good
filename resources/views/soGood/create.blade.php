@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>add a recipe</h1>

        <form method="post" action="{{route('recipes.store')}}">
            Type of food: <input type="text" name="type"/>
            Title: <input type="text" name="title"/>
            Ingredients: <input type="text" name="ingredients"/>
            Instructions: <input type="text" name="instructions"/>
            Total servings: <input type="text" name="servings"/>
            <input type="submit" value="SEND!!!!! "/>
            {{csrf_field()}}
        </form>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading, center" ><h3>Create a new recipe {{Auth::user()->name}}!</h3></div>

                    <div class="panel-body">
                        <form class="form-horizontal"  method="post" action="{{route('recipes.store')}}">
                            <fieldset>

                                <div class="form-group">
                                    <label for="text" class="col-lg-2 control-label">Type of food</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="type" placeholder="Please enter the type of food" aria-describedby="basic-addon1">
                                        {{csrf_field()}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="text" class="col-lg-2 control-label">Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title" placeholder="Name of recipe" aria-describedby="basic-addon1">
                                        {{csrf_field()}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="text" class="col-lg-2 control-label">Servings</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="servings" placeholder="Number of Servings" aria-describedby="basic-addon1">
                                        {{csrf_field()}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Ingredients</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="2" name="ingredients" id="textArea"></textarea>
                                        {{csrf_field()}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Instructions</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" name="instructions" id="textArea"></textarea>
                                        {{csrf_field()}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit {{csrf_field()}}</button>

                                    </div>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
