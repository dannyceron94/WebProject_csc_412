/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//weather function
$(document).ready(function()
{
    function weather(){
        var URL = 'https://fcc-weather-api.glitch.me/api/current?lat=37.773972&lon=-122.431297'
//        SF cordinates Latitude and longitude coordinates are: 37.773972, -122.431297.
        $.getJSON(URL,function(data){
            console.log(data);
            updateD(data);
        })
    }
    
    weather();
    
    function updateD(data){
//        object variables from API
        var city = data.name;
        var temp = Math.round(data.main.temp);
        var climate = data.weather[0].description;
        var icon = data.weather[0].icon;
//        updating the html weather data
        $('#city').html(city);
        $('#temp').html(temp);
        $('#climate').html(climate);
        $('#')
        
        
        //weather stuff
    }
    var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
        document.getElementById("date").innerHTML = d.toLocaleDateString();
});

