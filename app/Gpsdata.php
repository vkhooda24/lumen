<?php 

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
 
 class Gpsdata extends Model
 {
     
     protected $fillable = ['routename', 'routebus', 'lat', 'long'];
     
 }