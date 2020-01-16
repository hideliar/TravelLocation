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
          var valSelectLocaltion = $("#stage").attr("value");
        //    console.log(valSelectLocaltion);
          $("#stage option[value='"+valSelectLocaltion+"']").prop("selected",true);
          $.getJSON('/api/location?province_id='+valSelectLocaltion+'', function(lc) {
             console.log(lc);
             $( lc.data.data ).each(function( index,datalc ) {
               // console.log(JSON.parse(datalc.title).vi);
               // console.log(JSON.parse(datalc.tags).vi);
               // console.log(datalc.address);
               $svg = '<svg fill="#8f8f8f" stroke="none" viewBox="0.093443203 0 11.2125 12" height="20" stroke-linecap="round" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(1.308119, 0.5)"><path d="M1.51262719,7.70621739 L4.35698656,10.8804348 L7.19464281,7.7133913 L7.19339008,7.71338972 L7.19473219,7.7133913 C7.92626656,6.93382609 8.37895094,5.85486957 8.37895094,4.66304348 C8.37895094,2.2856087 6.57804469,0.358695652 4.35707594,0.358695652 C2.13566031,0.358695652 0.335200937,2.2856087 0.335200937,4.66304348 C0.335200937,5.85127862 0.785019976,6.92716844 1.51271674,7.7062175 Z"></path><ellipse fill="#fff" cx="4.35885934" cy="4.665061" rx="1.78932809" ry="1.91499996"></ellipse></g></svg>';
               // console.log($svg);
               // $('#search-data').append('<li>'+JSON.parse(datalc.title).vi+'</li>');
               // $('#search-data').append('<li>'+datalc.address+'</li><br>');
               $('#search-data').append('<div class="data" id="data" address1="'+datalc.latitude+'" address2="'+datalc.longitude+'"><a href="javascript:fun('+datalc.latitude+','+datalc.longitude+')"><div class="name">'+JSON.parse(datalc.title).vi+'</div><div class="address">'+$svg+'<span>'+datalc.address+'</span></div></a></div>');
             });
          });
       });
    });