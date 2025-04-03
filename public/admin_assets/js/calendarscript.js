var currentUpdateEvent;
var addStartDate;
var addEndDate;
var globalAllDay;

function updateEvent(event, element) {
    //alert(event.description);

    if ($(this).data("qtip")) $(this).qtip("destroy");

    currentUpdateEvent = event;

    $('#updatedialog').dialog('open');
    $("#eventName").val(event.title);
    $("#eventDesc").val(event.description);
    $("#eventId").val(event.id);
    $("#eventStart").text("" + event.start.toLocaleString());

    if (event.end === null) {
        $("#eventEnd").text("");
    }
    else {
        $("#eventEnd").text("" + event.end.toLocaleString());
    }

    return false;
}



function selectDate(start, end, allDay) {

    $('#addDialog').dialog('open');
    $("#addEventStartDate").text("" + start.toLocaleString());
    $("#addEventEndDate").text("" + end.toLocaleString());

    addStartDate = start;
    addEndDate = end;
    globalAllDay = allDay;
    //alert(allDay);
}

function updateEventOnDropResize(event, allDay) {

    //alert("allday: " + allDay);
    var eventToUpdate = {
        id: event.id,
        start: event.start
    };

    if (event.end === null) {
        eventToUpdate.end = eventToUpdate.start;
    }
    else {
        eventToUpdate.end = event.end;
    }

    var endDate;
    if (!event.allDay) {
        endDate = new Date(eventToUpdate.end + 60 * 60000);
        endDate = endDate.toJSON();
    }
    else {
        endDate = eventToUpdate.end.toJSON();
    }

    eventToUpdate.start = eventToUpdate.start.toJSON();
    eventToUpdate.end = eventToUpdate.end.toJSON(); //endDate;
    eventToUpdate.allDay = event.allDay;

    PageMethods.UpdateEventTime(eventToUpdate, UpdateTimeSuccess);
}

function eventDropped(event, dayDelta, minuteDelta, allDay, revertFunc) {
    if ($(this).data("qtip")) $(this).qtip("destroy");

    updateEventOnDropResize(event);
}

function eventResized(event, dayDelta, minuteDelta, revertFunc) {
    if ($(this).data("qtip")) $(this).qtip("destroy");

    updateEventOnDropResize(event);
}

function checkForSpecialChars(stringToCheck) {
    var pattern = /[^A-Za-z0-9 ]/;
    return pattern.test(stringToCheck); 
}

function isAllDay(startDate, endDate) {
    var allDay;

    if (startDate.format("HH:mm:ss") == "00:00:00" && endDate.format("HH:mm:ss") == "00:00:00") {
        allDay = true;
        globalAllDay = true;
    }
    else {
        allDay = false;
        globalAllDay = false;
    }
    
    return allDay;
}

function qTipText(start, end, description) {
    var text;

    if (end !== null)
        text =  "<strong>Start:</strong> " + start.format("MM/DD/YYYY hh:mm T") + "<br/><strong>End:</strong> " + end.format("MM/DD/YYYY hh:mm T") + "<br/><br/>" + description;
    else
        text =  "<strong>Start:</strong> " + start.format("MM/DD/YYYY hh:mm T") + "<br/><strong>End:</strong><br/><br/>" + description;

    return text;
}

$(document).ready(function() {
    

    $('#calendar').fullCalendar({
        theme: true,
        header: {
            left: 'prev,next',
            center: 'title'
          //  right: 'month,agendaWeek,agendaDay'
        },
        //customButtons: {
        //    customBtn: {
        //        text: 'Custom Button',
        //        click: function() {
        //            alert('This custom button is hot! 🔥\nNow go have fun!');
        //        }
        //    }
        //},

        navLinks: true,
        editable: true,
        eventLimit: true,

        views: {
            timeGrid: {
                eventLimit: 2 // adjust to 6 only for timeGridWeek/timeGridDay
            }
        },
        backgroundColor:'Red',
        defaultView: 'month',
        eventColor: '#74b2e2',
        eventClick: updateEvent,
        selectable: true,
        selectHelper: true,
        select: selectDate,
        editable: true,
        displayEventTime: false,
        events: "JsonResponse.ashx",


        eventDrop: eventDropped,
        eventResize: eventResized
        //eventRender: function(event, element) {
        //    //alert(event.title);
        //    element.qtip({
        //        content: {
        //            text: qTipText(event.start, event.end, event.description),
        //            title: '<strong>' + event.title + '</strong>'
        //        },
        //        position: {
        //            my: 'bottom left',
        //            at: 'top right'
        //        },
        //        style: { classes: 'qtip-shadow qtip-rounded' }

        //    });
        //}
    });


    $('#calendar1').fullCalendar({
        theme: false,
        header: {
            //left: 'prev,next today',
            //center: 'title',
            //   right: 'month,agendaWeek,agendaDay'
            right: 'month'
        },
        //customButtons: {
        //    customBtn: {
        //        text: 'Custom Button',
        //        click: function() {
        //            alert('This custom button is hot! 🔥\nNow go have fun!');
        //        }
        //    }
        //},

        navLinks: true,
        editable: true,
        eventLimit: true,

        views: {
            timeGrid: {
                eventLimit: 2 // adjust to 6 only for timeGridWeek/timeGridDay
            }
        },
        backgroundColor: 'Red',
        defaultView: 'month',
        eventColor: 'green',
        eventClick: updateEvent,
        selectable: true,
        selectHelper: true,
        select: selectDate,
        editable: true,
        events: "JsonResponse.ashx",


        eventDrop: eventDropped,
        eventResize: eventResized,
        eventRender: function (event, element) {
            //alert(event.title);
            element.qtip({
                content: {
                    text: qTipText(event.start, event.end, event.description),
                    title: '<strong>' + event.title + '</strong>'
                },
                position: {
                    my: 'bottom left',
                    at: 'top right'
                },
                style: { classes: 'qtip-shadow qtip-rounded' }

            });
        }
    });


});