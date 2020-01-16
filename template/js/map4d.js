let map = null;
$(document).ready(function() {    
    var valSelectLocaltion = $("#stage").attr("value");
    //    console.log(valSelectLocaltion);
    $("#stage option[value='"+valSelectLocaltion+"']").prop("selected",true);
    $.getJSON('/api/city?province_id='+valSelectLocaltion+'', function(cityid) {
      $( cityid.data.data ).each(function( index,cityid ) {
      
        // console.log(cityid.latitude);
      map = new map4d.Map(document.getElementById("yourmapid"),
      {
        center: [cityid.latitude,cityid.longitude],
        zoom: 12,
        geolocate: true,
        controls :true,
        tilt: 0,
        controlOptions: map4d.ControlOptions.BOTTOM_RIGHT,
         accessKey: "98fd21346d83bee24dc734231f7609c9"
      }
    )
    });
  });
});
