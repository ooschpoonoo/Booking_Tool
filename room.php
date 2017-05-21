<?php include('header.php');?>
<link rel='stylesheet' href='calendar/fullcalendar.css' />
<script src='calendar/lib/jquery.min.js'></script>
<script src='calendar/lib/moment.min.js'></script>
<script src='calendar/fullcalendar.js'></script>

<div id="content">

<p> Room Page</p>

<div id='calendar'></div>

</div>
<?php include('footer.php');?>

<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
		header: {
				left: 'prev,next,today',
				center: 'title',
				right: 'month, agendaDay'
		},
		weekends: false,
		defaultView: 'agendaDay',
		minTime: '07:00:00',
		maxTime: '19:00:00',
		height: 750,
		timeFormat: 'hh:mm a',
		events: {
				url: 'fetchBookings.php',
				type: 'POST', // Send post data
				error: function(e) {
					alert('There was an error while fetching events.' + e.reponseText);
				}
			},

		dayClick: function(date, jsEvent, view) {
			if(view.name === "month"){
				$('#calendar').fullCalendar('gotoDate',date);
				$('#calendar').fullCalendar('changeView', 'agendaDay');
			}
		}
		
		
    })

});
</script>