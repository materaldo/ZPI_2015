

@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              			 
<form action = "{{URL::to('/country/add') }}">			 
        <h4><label>Dodaj kraj:<br>
            <input name = "country" id = "country" type = "text" size = "28"
                maxlength = "255" autofocus>
        </label></h4>
        
		<input type = "submit" id="submit" value = "Dodaj">
</form>

@stop