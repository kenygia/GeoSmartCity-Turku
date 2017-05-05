
	
$(function() { 
//making sliders show values and setting max and min
//gender slider
   	 $( "#ageslider" ).slider({
      range: "min",
      min: 10,
      max: 90,
      value: 10,
      slide: function( event, ui ) {
        $( "#age" ).val( ui.value );
      }
    });
   	 $( "#age" ).val( $( "#ageslider" ).slider( "value" ) );
//distance slider
		$("#distanceslider").slider({
		range: "min",
		min: 0,
		max: 50,
		value: 0,
		slide: function(event, ui){
			$("#distance").val( ui.value );
			}
		});
		$( "#distance" ).val( $( "#distanceslider" ).slider( "value" ) );
//getting values from radiobuttons
    $("#msgbox").hide();
    $("input:radio[name=gender]").click(function() {
	    var value = $(this).val();
	    $("#gender").val(value);
	});
	$("input:radio[name=occupation]").click(function() {
	    var value2 = $(this).val();
	    $("#occupation").val(value2);
	});
//Sending data trough AJAX
$('#form1').submit(function(){

		$.ajax({

			type:'post',
			dataType:'json',
			url:$(this).attr('action'),
			data:$(this).serialize(),
			success:message
			})
		return false;
	});

	function message(data) {
		alert(data);
		$('#message').text('View poll results');
		resetForm($('#form1'));
	}
	function resetForm($form) {
    $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
	$('#distanceslider').slider({value:0});
	$('#ageslider').slider({value:0});
	$( "#age" ).val( $( "#ageslider" ).slider( "value" ) );
	$( "#distance" ).val( $( "#distanceslider" ).slider( "value" ) );
	$( "#male" ).prop('checked', true);
	$( "#other" ).prop('checked', true);
	$( "#occupation" ).prop('checked', true);
}
 });


