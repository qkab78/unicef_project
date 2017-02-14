/**
 * Created by Quentin on 14/02/2017.
 */
$(document).ready(function()
{
    $('#calendar').fullCalendar({
        header: {
            left: 'title',
            center: ''
        },
        height: 300,
        events: {
            googleCalendarId: 'akek0bfsjvqf08n187gelr1508@group.calendar.google.com',
            googleCalendarApiKey: 'AIzaSyAtV-qbSndYZCl03IyvHA1EercbdJpyWU4'
        }
    });
});