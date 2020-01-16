  $(document).ready(function() {
  
     // $("#driver").click(function(event){
        $.getJSON('/api/city', function(jd) {
          
           console.log(jd);
           $( jd.data.data ).each(function( index,value ) {
              // console.log(JSON.parse(value.title).vi); 
               //$('#stage').append('<p>ID : ' + value.id + '</p>');
               // if(JSON.parse(value.title).vi != "Việt Nam"){ 
               $('#stage').append('<option value="' + value.id + '">' + JSON.parse(value.title).vi + '</option>'); 
           });
        });
     });