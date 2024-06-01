@extends('layouts.admin')
@section('title','Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template')

@section('style-libraries')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
@stop


@section('content')
<!-- Start Content -->
<div class="md:flex justify-between items-center">
                            <h5 class="text-lg font-semibold">Calendar</h5>

                            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="index.html">Techwind</a></li>
                                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Calendar</li>
                            </ul>
                        </div>

                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-2">
                            <div class="xl:col-span-2 lg:col-span-4">
                                <div id="external-events">
                                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900">
                                        <span class="h6 font-semibold">All Events</span>
                                    
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
                                            <div class="fc-event-main py-1 px-2">Metting</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
                                            <div class="fc-event-main py-1 px-2">Operations</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
                                            <div class="fc-event-main py-1 px-2">Lunch</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
                                            <div class="fc-event-main py-1 px-2">Conference</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event m-1 cursor-pointer bg-indigo-600">
                                            <div class="fc-event-main py-1 px-2">Business Metting</div>
                                        </div>
                                    
                                        <div class="mt-2">
                                            <div class="flex items-center mb-0">
                                                <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="drop-remove">
                                                <label class="form-checkbox-label text-slate-400" for="drop-remove">Remove after drop</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="xl:col-span-10 lg:col-span-8">
                            <div class="container">
                                <div class="response"></div>
                                <div id='calendar'></div>  
                            </div>
 
                            </div>
                        </div>
                        <!-- End Content -->





@stop

@section('script')
<script>
  $(document).ready(function () {

        var SITEURL = "{{url('/')}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                

            }
        });

        var calendar = $('#calendar').fullCalendar({
            header: {
                left:'prev,next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay',
            },
            editable: true,
            events: SITEURL + "fullcalendar",
            displayEventTime: true,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');

                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                    $.ajax({
                        url: SITEURL + "/fullcalendar/create",
                        data: {'title' : title, 'start': start, 'end': end},
                        type: "POST",
                        success: function (data) {
                            displayMessage("Added Successfully");
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true
                    );
                }
                calendar.fullCalendar('unselect');
            },

            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: SITEURL + '/fullcalendar/update',
                    data: {'title': event.title, 'start': start, 'end': end, 'id': event.id},
                    type: "POST",
                    success: function (response) {
                        displayMessage("Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalendar/delete',
                        data: {'id': event.id},
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }

        });
    });

    function displayMessage(message) {
        $(".response").html("<div class='success'>"+message+"</div>");
        setInterval(function() { $(".success").fadeOut(); }, 1000);
    }
</script>
@stop