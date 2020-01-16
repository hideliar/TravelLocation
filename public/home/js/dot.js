$(document).ready(function() {
var valSelectLocaltion = $("#stage").attr("value");
        //    console.log(valSelectLocaltion);
          $("#stage option[value='"+valSelectLocaltion+"']").prop("selected",true);
          $.getJSON('/api/location?province_id='+valSelectLocaltion+'', function(lc) {
             console.log(lc);
             $( lc.data.data ).each(function( index,datalc ) {
              let locations = [
                [datalc.latitude, datalc.longitude],
              ]
              let markers = locations.map(function(location) {
              return new map4d.Marker({
                position: [location[0], location[1]],
                icon: new map4d.Icon(32, 32, "img/marker_2-512.png"),
                anchor: new map4d.Point(0.5, 1.0),
              })
              })
              let cluster = new map4d.MarkerClusterer(markers, {radius: 150})
              cluster.setMap(map)
            });
          });
});