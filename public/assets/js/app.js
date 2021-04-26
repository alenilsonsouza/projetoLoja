$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: maxslider,
      values: slidervalues,
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });

    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    $("#filter-area").find('input').on('change', function() {
      $('#filter-area form').submit()
    })

  } );