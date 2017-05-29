//$(".leaflet-routing-geocoder.input").change(function(e){console.info(e);});
//$(".leaflet-routing-geocoder input").change(function(e){completeAddr();});
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
    inputs_geocoder = document.querySelectorAll(".leaflet-routing-geocoder input");
}

$(window).load(function(){

    load_geo_inputs();

    console.info(inputs_geocoder);

    if (inputs_geocoder[0])
        inputs_geocoder[0].addEventListener('change', function(e) {
            console.info(e);
            console.info(e.path[0]);
            geocoder.geocode(inputs_geocoder[0].value, completeAddr, inputs_geocoder[0]);
        });

    if (inputs_geocoder[1])
        inputs_geocoder[1].addEventListener('change', function(e) {
            console.info(e);
            geocoder.geocode(inputs_geocoder[1].value, completeAddr, inputs_geocoder[1]);

        });


});
