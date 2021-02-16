document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'id',
    eventDidMount: function(info) {
        $(info.el).tooltip({ 
		    title: info.event.extendedProps.description,
		    placement: "top",
		    trigger: "hover",
		    container: "body"
	  	});
	},
    events: 'kalender/eventkalender'
  });

  
  calendar.render();
});