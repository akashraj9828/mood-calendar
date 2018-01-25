	
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
<!-- 
		<button id="goFS">Go fullscreen</button>
		<script>
			var goFS = document.getElementById("goFS");
			var body = document.getElementById("body");
			goFS.addEventListener("click", function () {
				var el = document.documentElement,
					rfs = el.requestFullscreen
						|| el.webkitRequestFullScreen
						|| el.mozRequestFullScreen
						|| el.msRequestFullscreen
					;

				rfs.call(el);
			});
		</script> -->


</body>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" href="css/clndr.css">
	<link rel="stylesheet" type="text/css" href="css/custom_style.css" />
	
	
	<script>
	$(document).on("click", ".day-contents", function () {
	var full_date = $(this).data('date');
	var date = moment(new Date(full_date));
    var formated_date = date.format("DD-MM-YYYY");
    var formated_date_for_sql = date.format("YYYY-MM-DD");
	$(".modal-body #date_input").val(formated_date);
	$(".modal-body #date_input_for_sql").val(formated_date_for_sql);
	$("#events #date").val(formated_date_for_sql);
	});

	$(document).on("click", "#mood_icon", function () {
	var mood = $(this).data('mood');
	$(".modal-body #mood_input").val(mood);
	});


	function toggle(){
		if($("#events").is(':visible'))
        $("#events").slideToggle("slow",function(){$("#event_form").slideToggle("slow")});
		else
        $("#event_form").slideToggle("slow",function(){$("#events").slideToggle("slow")});
	}

</script>
  
</html>
