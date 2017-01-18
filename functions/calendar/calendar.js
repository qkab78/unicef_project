$(document).ready(function() {
    var initialLocaleCode = 'fr';
    console.log("OK");
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title'
        },
	    //googleCalendarApiKey: 'AIzaSyAtV-qbSndYZCl03IyvHA1EercbdJpyWU4',
        height: 400,
        //locale: initialLocaleCode,
        //googleCalendarId: 'akek0bfsjvqf08n187gelr1508@group.calendar.google.com'
        /*events: {
            googleCalendarId: 'akek0bfsjvqf08n187gelr1508@group.calendar.google.com',
            googleCalendarApiKey: 'AIzaSyAtV-qbSndYZCl03IyvHA1EercbdJpyWU4'
		}*/
    });
});