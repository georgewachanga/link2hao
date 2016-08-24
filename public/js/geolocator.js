/**
 * Created by GEORGE on 8/16/2016.
 *
 * this is to help locate a property to high accuracy, we target a 20 m accuracy for each property
 *
 */


function geoFindMe(){
    var output = document.getElementById('out');

    if(!navigator.geolocation){
        output.innerHTML = "<p>Geolocator is not supported by your browser";
        return;
    }

    function success(position)
    {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        output.innerHTML = "<p>Latitude is " + latitude + "degrees <br>Longitude is "+ longitude + "degrees</p>";

        var img = new Image();
        img.src = "https://maps.googleapis.com/maps/api/staticmap?centre=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";
        output.appendChild(img);
    };

    function error(){
        output.innerHTML = "<p>Locating...</p>";
    };

    navigator.geolocation.getCurrentPosition(success, error);
}