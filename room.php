<?php include('header.php');?>

<meta charset='utf-8' />
<link href='calendar/lib/fullcalendar.min.css' rel='stylesheet' />
<link href='calendar/lib/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='calendar/scheduler.min.css' rel='stylesheet' />
<script src='calendar/lib/moment.min.js'></script>
<script src='calendar/lib/jquery.min.js'></script>
<script src='calendar/lib/fullcalendar.min.js'></script>
<script src='calendar/scheduler.min.js'></script>
<script>

	$(function() { // document ready

		$('#calendar').fullCalendar({
			schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives', //demo licence
			editable: true,
			height: 750,
			minTime: '07:00:00',
			maxTime: '19:00:00',
			
			editable: false,
			weekends: false,
			timeFormat: 'hh:mm a',
			eventRender: function(event, element, view) {
				if(view.type == 'month') {
					$(element).css("display", "none");
				} else {
				// Do nothing
				}
			},
			dayClick: function(date, jsEvent, view) {
				if(view.name === "month"){
					$('#calendar').fullCalendar('gotoDate',date);
					$('#calendar').fullCalendar('changeView', 'timelineDay');
				}else if(view.name ==="timelineDay"){
				//	alert('Day alerts');
				}
			},
			header: {
				left: 'today prev,next',
				center: 'title',
				right: 'timelineDay,month'
			},
			defaultView: 'timelineDay',
			views: {
				timelineThreeDays: {
					type: 'timeline',
					duration: { days: 3 }
				}
			},
			resourceAreaWidth: '20%',
			resourceColumns: [
				{
					group: true,
					labelText: 'Building',
					field: 'building'
				},
				{
					labelText: 'Room',
					field: 'title'
				},
				{
					labelText: 'Occupancy',
					field: 'occupancy'
				}
			],
			resources: {
				
				url: 'fetchBuildings.php',
				type: 'POST', // Send post data
				error: function(e) {
					alert('There was an error while fetching events.' + e.reponseText);
				}
				
				/*
				{ id: '10', building: 'C4', title: 'Auditorium A', occupancy: 40 },
				{ id: '12', building: 'C4', title: 'Auditorium B', occupancy: 40, eventColor: 'green' },
				{ id: '8', building: 'C4', title: 'Auditorium C', occupancy: 40, eventColor: 'orange' },
				{ id: '7', building: 'C4', title: 'Auditorium D', occupancy: 40},
				{ id: 'e', building: 'PC356', title: 'Auditorium E', occupancy: 40 },
				{ id: 'f', building: 'PC356', title: 'Auditorium F', occupancy: 40, eventColor: 'red' },
				{ id: '11', building: 'PC356', title: 'Auditorium G', occupancy: 40 }*/
			},

			events:
			{
				url: 'fetchBookings.php',
				type: 'POST', // Send post data
				error: function(e) {
					alert('There was an error while fetching events.' + e.reponseText);
				}
				
			}
			
			
			
			
		});
	
	});

</script>
<style>

	body {
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
	
		margin: 50px auto;
	}

</style>

<div id="content">
<p> Index Page</p>
<div id='calendar'></div>

</div>
<?php include('footer.php');?>