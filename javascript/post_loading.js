//$(".leaflet-routing-geocoder input").change(function(e){console.info(e);});
var inputs_geocoder = "";

/**
 * changer the input value by the string addr
 * @param addr 
 */
function completeAddr(addr)
{
    console.info(addr);
    console.info(this);
    this.value = addr[0].name;
}

/**
 * wrapper to use the L.Control.Geocoder.google.geocode
 * @param e  
 */
function geocodage(e)
{
    console.info(e);
    console.info(e.path[0]);
    geocoder.geocode(e.path[0].value, completeAddr, e.path[0]);
}

/**
 * initialize the var inputs_geocoder
 */
function load_geo_inputs()
{
    inputs_geocoder = $(".leaflet-routing-geocoder input") //document.querySelectorAll(".leaflet-routing-geocoder input");
}

/**
 * add the event to do the geocoder when the input as his value change
 * 
 */
function post_loading(){

    load_geo_inputs();

    console.info(inputs_geocoder);

    if (inputs_geocoder[0])
        inputs_geocoder[0].addEventListener('change', geocodage);

        
    if (inputs_geocoder[1])
        inputs_geocoder[1].addEventListener('change', geocodage);


}

$(window).load(post_loading);

$(window).change(post_loading);