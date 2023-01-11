<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    
  </head>
  <body>
    
    <div id='calendar'></div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js"></script>


    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar:{
                left:'prev,next today',
                center:'title',
                right:'dayGridMonth,timeGridWeek,listWeek'
            },
            locale:"es",
            displayEventTime:false, 
        
            
          });

          calendar.render();
        });
  
      </script>
  </body>
</html>