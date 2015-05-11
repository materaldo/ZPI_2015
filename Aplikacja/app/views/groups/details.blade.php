@extends('layouts.default')

@section('header')

	{{App::setLocale(Session::get('lang', 'pl'));}}
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <?php
    $editedGroup = Group::find($idG);
    ?>
@stop

@section('content')

<?php

	$gr = Group::find($idG);
	
	echo "<a href=\"http://zpi.dev/group/edit/{{$idG}}\">Edytuj</a>
		<a href=\"http://zpi.dev/group/delete/{{$idG}}\" onclick=\"return confirm('Czy na pewno chcesz usunąć to miejsce z bazy noclegów?')\">Usuń</a><br><br>";
	
	echo "<h4><b>Grupa nr " . $gr->id . "</b></h4>
	<br>Liczba członków:" . $gr->number_of_people . 
	"<br>Środek transportu: " . $gr->mean_of_transport . 
	"<br>Kraj pochodzenia: " . Country::find($gr->id_coun)->country . 
	"<br>Język ojczysty: " . Language::find($gr->id_first_lang)->language .
	/*"<br>Język alternatywny 1: " . Language::find($gr->id_second_lang)->language .
	"<br>Język alternatywny 2: " . Language::find($gr->id_third_lang)->language .
	*/
	"<br><br><h4>Członkowie: </h4>";
		
		$participants=Participant::where('id_gr', '=', $gr->id)->get();
		echo "<form action=\"\"><table>";

		foreach ($participants as $part)
		{			
			echo "<tr>
					<td>
						<input type=\"checkbox\" name=\"participants\" value=\"". $part->id ."\">
					</td>
					<td>"
						. $part->first_name . " " . $part->last_name ."
					</td>
					<td>
						<a href=http://zpi.dev/participant/assign/" . $part->id . ">Przydziel </a>
					</td>
					<td>
						<a href=http://zpi.dev/participant/details/" . $part->id . "> Szczegóły</a>
					</td>
				</tr>";
		}	
	
	echo "</table></form>";
			
?>	

<br>
<a href="http://zpi.dev/group">Powrót do grup</a>
@stop