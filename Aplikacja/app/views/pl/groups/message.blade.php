@extends('layouts.default')

@section('header')

    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>

@stop

@section('content')
<form method="post" action="http://zpi.dev/index.php/group/messagesender/{{$idG}}">
    <textarea rows="4" cols="50" name="emailText" id="emailText">
            Treść maila
    </textarea>
    <p>
        <input type="submit" id="submit" value="Dodaj">
        <input type="reset" value="Wyczyść">
    </p>
</form>
@stop