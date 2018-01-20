var clndrTemplate_with_badge =
    "<div class='clndr-controls'>" +
    "<div class='clndr-control-button'>" +
    "<span class='clndr-previous-button'>previous</span>" +
    "</div>" +
    "<div class='month'><%= month %> <%= year %></div>" +
    "<div class='clndr-control-button rightalign'>" +
    "<span class='clndr-next-button'>next</span>" +
    "</div>" +
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
    "<td class='<%= days[d].classes %>'>" +
    "<div class='day-contents' data-toggle='modal' data-target='#input_modal' data-date='<%=days[d].date._d  %>'><%= days[d].day %>"+
    "<span class='badge badge-info'><%=(!days[d].events.length ? '':days[d].events.length)%></span>"+
    "</div>" +
    "</td>" +
    "<% } %>" +
    "</tr>" +
    "<% } %>" +
    "</tbody>" +
    "</table>";