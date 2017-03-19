(function() {

  var Calendar = null;
  var container = $('#calendar-container');
  var $month = $('#custom-month');
  var $year = $('#custom-year');
  var localeConfig = {
    EN: {
      weeks : [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ],
      weekabbrs : [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
      months : [
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
      ],
      monthabbrs : [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ]
    },
    ES: {}
  };
  var popoverConfig = {
    delay: { show: 100, hide: 100 },
    html: true,
    trigger: 'click',
    selector: 'div.fc-content',
    placement: 'auto',
    content: function() { return pop_content },
    title: function() { return pop_title },
    container: 'body'
  };
  var pop_title = '', pop_content = '';

  var updateMonthYear = function() {
    $month.html(Calendar.getMonthName());
    $year.html(Calendar.getYear());
  };
  var fetchData = function() {
    $.ajax({
      url: route.calendar,
      type: 'GET',
      success: function(data, textStatus, xhr) {
        Calendar = container.calendario({
          caldata: data.calendar,
          format: 'MM-DD-YYYY',
          weeks: localeConfig.EN.weeks,
          weekabbrs: localeConfig.EN.weekabbrs,
          months: localeConfig.EN.months,
          monthabbrs: localeConfig.EN.monthabbrs,
          checkUpdate: false,
          events: 'mouseenter',
          onDayMouseenter : function( $el, data, dateProperties ) {
            if(data.content.length) {
              pop_title = `${dateProperties.monthname} ${dateProperties.day}, ${dateProperties.year}`;
              pop_content = data.content.join('');
            }
          }
        });

        $('#custom-next').on('click', function() {
          Calendar.gotoNextMonth(updateMonthYear);
        });
        $('#custom-prev').on('click', function() {
          Calendar.gotoPreviousMonth(updateMonthYear);
        });
        $('#custom-current').on('click', function() {
          Calendar.gotoNow(updateMonthYear);
        });
        updateMonthYear();
        $(document).popover(popoverConfig);
      },
      error: function(xhr, textStatus, errorThrown) {
        //called when there is an error
      }
    });
  };

  var main = function() {
    fetchData();
  };

  return render(container, main);
})();
