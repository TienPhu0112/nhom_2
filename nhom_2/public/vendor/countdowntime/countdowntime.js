(function ($) {
    "use strict";

    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime, length) {
      var daysSpan = document.getElementsByClassName('days');
      var hoursSpan = document.getElementsByClassName('hours');
      var minutesSpan = document.getElementsByClassName('minutes');
      var secondsSpan = document.getElementsByClassName('seconds');

      function updateClock() {
        var t;

        for (var i=0 ; i<length;i++){
            t = getTimeRemaining(endtime[i]);
            daysSpan[i].innerHTML = t.days;
            hoursSpan[i].innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan[i].innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan[i].innerHTML = ('0' + t.seconds).slice(-2);
        }

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }

    function getDate(){
        var elm,length,date;
        var dateList = [];
        length = document.getElementsByClassName('get-date')[0].getAttribute('data-number');
        for(var i=0; i < length;i++){
            elm = document.getElementsByClassName('get-date')[i];
            date = elm.getAttribute('data-date');
            dateList.push(date);
        }

        return dateList;
    }

    console.log(getDate());
    var length = document.getElementsByClassName('get-date')[0].getAttribute('data-number');
    var deadline;
    var deadlineList = [];
    for (var i=0; i < length;i++){
        deadline = new Date(Date.parse(getDate()[i]));
        deadlineList.push(deadline);
    }

    console.log(deadlineList);

    initializeClock('clockdiv', deadlineList,length);
})(jQuery);
