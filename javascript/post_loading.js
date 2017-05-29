//$(".leaflet-routing-geocoder input").change(function(e){console.info(e);});
var inputs_geocoder = "";

function completeAddr(addr)
{
    console.info(addr);
    console.info(this);
    this.value = addr[0].name;
}

function geocodage(e)
{
    console.info(e);
    console.info(e.path[0]);
    geocoder.geocode(e.path[0].value, completeAddr, e.path[0]);
}

function load_geo_inputs()
{
    inputs_geocoder = $(".leaflet-routing-geocoder input") //document.querySelectorAll(".leaflet-routing-geocoder input");
}

$(window).load(function(){

    load_geo_inputs();

    console.info(inputs_geocoder);

    if (inputs_geocoder[0])
        inputs_geocoder[0].addEventListener('change', geocodage);

        
    if (inputs_geocoder[1])
        inputs_geocoder[1].addEventListener('change', geocodage);


});
