	
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
	var date = moment(new Date(full_date));//.substr(0, 16)));
    var formated_date = date.format("DD-MM-YYYY");
    var formated_date_for_sql = date.format("YYYY-MM-DD");
    // var day = $(this).data('day');
    // var month = $(this).data('month');
    // var year = $(this).data('year');
		// console.log(date);
	$(".modal-body #date-input").val(formated_date);
	$(".modal-body #date-input-for-sql").val(formated_date_for_sql);
	
	});

	// $('#calendar').clndr({
    // ready: function() {
    //   var self = this;
    //   $(this.element).on('mouseover', '.day', function(e) {
    //     var target = self.buildTargetObject(e.currentTarget, true);
    //     console.log(target);
    //   });
    // }
	// });
</script>
  
</html>
