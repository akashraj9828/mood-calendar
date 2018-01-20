<?php
 if(isset($_SESSION['u_uid'])){
    include_once 'includes/dbh.inc.php';

    $username = $_SESSION['u_uid'];
    $firstname =$_SESSION[ 'u_first'] ;
    $lastname=$_SESSION[ 'u_last' ];
    $sql="SELECT event_id,event_date,event_data FROM $username ";

}
?>

<script>// Call this from the developer console and you can control both instances
var calendars = {};

$(document).ready( function() {
    console.log(
        'Welcome to the CLNDR demo. Click around on the calendars and' +
        'the console will log different events that fire.');

    // Assuming you've got the appropriate language files,
    // clndr will respect whatever moment's language is set to.
    // moment.locale('ru');

    // Here's some magic to make sure the dates are happening this month.
    var thisMonth = moment().format('YYYY-MM');
    // Events to load into calendar
    var eventArray = [
                    
        <?php
        if(isset($_SESSION['u_uid'])){
        $result=mysqli_query( $events_conn, $sql );
            if($result){
            $first=false;
            while($row=mysqli_fetch_assoc( $result )){
                $id=mysqli_real_escape_string($events_conn,$row['event_id']);
                $date=$row['event_date'];
                $event=mysqli_real_escape_string($events_conn,$row['event_data']);

                    if(!$first){
                        echo "{
                            date: '$date' ,
                            title: '$event'
                        }";
                        $first=true;
                    }else {
                       echo ",{
                            date: '$date' ,
                            title: '$event',
                            // mood: 'happpy'
                        }";
                    }
                    }
            }else{
            // echo "Error: " . $sql . mysqli_error($events_conn). '<br>';

            }
        }
        
        ?>
    ];

    var moodArray=[
        {
            date: "2018-01-27",
            mood: "happy"
        },
        {
            date: "2018-01-18",
            mood: ["sad","mad"]
        }
    ];

    // The order of the click handlers is predictable. Direct click action
    // callbacks come first: click, nextMonth, previousMonth, nextYear,
    // previousYear, nextInterval, previousInterval, or today. Then
    // onMonthChange (if the month changed), inIntervalChange if the interval
    // has changed, and finally onYearChange (if the year changed).
    calendars.clndr1 = $('.cal1').clndr({
            // ready: function() {
            // var self = this;
            // $(this.element).on('mouseover', '.day', function(e) {
            //     var target = self.buildTargetObject(e.currentTarget, true);
            //     console.log(target);
          
            // }
        events: eventArray,
        moods: moodArray,
         template: clndrTemplate_with_badge,
        clickEvents: {
            click: function (target) {
                console.log('Cal-1 clicked: ', target);
            },
            today: function () {
                console.log('Cal-1 today');
            },
            nextMonth: function () {
                console.log('Cal-1 next month');
            },
            previousMonth: function () {
                console.log('Cal-1 previous month');
            },
            onMonthChange: function () {
                console.log('Cal-1 month changed');
            },
            nextYear: function () {
                console.log('Cal-1 next year');
            },
            previousYear: function () {
                console.log('Cal-1 previous year');
            },
            onYearChange: function () {
                console.log('Cal-1 year changed');
            },
            nextInterval: function () {
                console.log('Cal-1 next interval');
            },
            previousInterval: function () {
                console.log('Cal-1 previous interval');
            },
            onIntervalChange: function () {
                console.log('Cal-1 interval changed');
            }
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });

    // Bind all clndrs to the left and right arrow keys
    $(document).keydown( function(e) {
        // Left arrow
        if (e.keyCode == 37) {
            calendars.clndr1.back();
        }

        // Right arrow
        if (e.keyCode == 39) {
            calendars.clndr1.forward();
        }
    });

    
});
</script>