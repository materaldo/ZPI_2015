﻿@extends('layouts.default')

@section('header')
	
	{{App::setLocale(Session::get('lang', 'pl'));}}
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	
@stop

@section('content')
              
Nie masz uprawnień do tej strony

@stop