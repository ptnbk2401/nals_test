$(function() {
    renderFullCalendar();
    confirmDelete();
    setDataTable();
});

function renderFullCalendar() {
    const events = {
        url: URL_ROOT + '/?controller=works&action=api_list',
        success: function (data) {
            return data?.data?.map(function (post, index) {
                    return {
                        title: post?.name,
                        start: post?.start_date,
                        end: post?.end_date,
                    };
                });
        },
    }

    const calendarEl = document.getElementById('calendar');
    const calendar = calendarEl && new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        nowIndicator: true,
        navLinks: true,
        selectable: true,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events,
        eventClick: function(info) {
        },
        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false
        },
        slotLabelFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false
        },
    });
    calendar?.render();
}

function confirmDelete() {
    $('.btn-delete').click(function (event) {
        if (!confirm('Delete work?')) {
            event.preventDefault()
        }
    })
}

function setDataTable() {
    $('.data-table').DataTable();
}