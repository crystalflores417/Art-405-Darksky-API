<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/22.3964,-114.1095/?exclude=hourly?lang=es?';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

  //Feels like
  $temp = $forecast['currently']['temperature']; 
  
  if($temp < 50){
  	$feels = 'It\'s Cold Outside';
  } else{
  	$feels = 'It\'s Nice Outside';
  }