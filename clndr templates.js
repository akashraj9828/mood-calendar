
//copyting frm clndr demo site
var clndrTemplate = "<div class='clndr-controls'>" +
    "<div class='clndr-control-button'><p class='clndr-previous-button'>previous</p></div><div class='month' id='month'><%= month %> <%= year %></div><div class='clndr-control-button rightalign'><p class='clndr-next-button'>next</p></div>" +
    "</div>" +
    "<table class='clndr-table' border='0' cellspacing='0' cellpadding='0'>" +
    "<thead>" +
    "<tr class='header-days'>" +
    "<% for(var i = 0; i < daysOfTheWeek.length; i++) { %>" +
    "<td class='header-day'><%= daysOfTheWeek[i] %></td>" +
    "<% } %>" +
    "</tr>" +
    "</thead>" +
    "<tbody>" +
    "<% for(var i = 0; i < numberOfRows; i++){ %>" +
    "<tr>" +
    "<% for(var j = 0; j < 7; j++){ %>" +
    "<% var d = j + i * 7; %>" +
    "<td class='<%= days[d].classes %>' style='text-align: center; color: #4f4f4f; background-color: #ebebeb; border-bottom: 2px solid white; background-image: url(http://kylestetz.github.io/CLNDR/css/./triangle.svg); background-size: cover; background-position: center;'><div class='day-contents' data-toggle='modal' data-target='#input_modal' data-date='<%=days[d].date._d  %>' data-year='<%=days[d].date._i[0]  %>' data-month='<%=days[d].date._i[1]%>' data-day='<%=days[d].date._i[2]%>' ><%= days[d].day %>" +
    "</div></td>" +
    "<% } %>" +
    "</tr>" +
    "<% } %>" +
    "</tbody>" +
"</table>";


// data-date attributr added to pass value to modal
var clndrTemplate = "<div class='clndr-controls'>" +
    "<div class='clndr-control-button'><p class='clndr-previous-button'>previous</p></div><div class='month' id='month'><%= month %> <%= year %></div><div class='clndr-control-button rightalign'><p class='clndr-next-button'>next</p></div>" +
    "</div>" +
    "<table class='clndr-table' border='0' cellspacing='0' cellpadding='0'>" +
    "<thead>" +
    "<tr class='header-days'>" +
    "<% for(var i = 0; i < daysOfTheWeek.length; i++) { %>" +
    "<td class='header-day'><%= daysOfTheWeek[i] %></td>" +
    "<% } %>" +
    "</tr>" +
    "</thead>" +
    "<tbody>" +
    "<% for(var i = 0; i < numberOfRows; i++){ %>" +
    "<tr>" +
    "<% for(var j = 0; j < 7; j++){ %>" +
    "<% var d = j + i * 7; %>" +
    "<td class='<%= days[d].classes %>'><div class='day-contents' data-toggle='modal' data-target='#input_modal' data-date='<%=days[d].date._d  %>' data-year='<%=days[d].date._i[0]  %>' data-month='<%=days[d].date._i[1]%>' data-day='<%=days[d].date._i[2]%>' ><%= days[d].day %>" +
    "</div></td>" +
    "<% } %>" +
    "</tr>" +
    "<% } %>" +
    "</tbody>" +
"</table>";



// 