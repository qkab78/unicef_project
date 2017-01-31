$(document).ready(function()
{
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title'
        },
        height: 400,
        events: {
            googleCalendarId: 'akek0bfsjvqf08n187gelr1508@group.calendar.google.com',
            googleCalendarApiKey: 'AIzaSyAtV-qbSndYZCl03IyvHA1EercbdJpyWU4'
		}
    });
});