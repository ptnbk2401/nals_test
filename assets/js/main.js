$(function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
            {
                title: 'All Day Event',
                start: '2021-12-08'
            },
            {
                title: 'Long Event',
                start: '2021-12-07',
                end: '2021-12-10'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2021-12-28T16:00:00'
            }
        ],
        eventClick: function(info) {
            info.el.style.borderColor = 'red';
            console.log(info)
        },
    });
    calendar.render();
});
