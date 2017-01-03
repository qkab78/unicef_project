$(document).ready(function() {
	$('#calendar').fullCalendar({
	    googleCalendarApiKey: 'AIzaSyBq7C_-5mMDpO_HNJAuRwAszp42Yk73H3g',
		events: {
		    googleCalendarId: 'abcd1234@group.calendar.google.com'
		},
		height: 400
    });
});