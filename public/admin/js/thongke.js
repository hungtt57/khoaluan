
           
$( document ).ready(function() {

  
   $.ajax({
      type: "GET",
      dataType: 'JSON',
      url: "/admin/visit_user", // This is the URL to the API
      data: { days: 'morris' }
    })
    .done(function( data ) {
      
             Morris.Bar({
                element: 'hero-bar',
                data: data,
                xkey: 'date_',
                ykeys: ['visits_'],
                labels: ['visits_'],
                hideHover: 'auto',
                barColors: ['#6883a3']
              });
    })
    .fail(function() {
      // If there is no communication between the server, show an error
      alert( "error occured" );
    });

     // Morris.Bar({
     //    element: 'hero-bar',
     //    data: [{date: 'iPhone', hit: 136},{date: 'iPhone 3G', hit: 137}],
     //    xkey: 'date',
     //    ykeys: ['hit'],
     //    labels: ['hit'],
     //    barRatio: 0.4,
     //    xLabelAngle: 35,
     //    hideHover: 'auto',
     //    barColors: ['#6883a3']
     //  });







}); //end document