$(document).ready(function() {
  var getUrl = function() {
    var url = window.location.href;
    var i = url.indexOf(':'); i ++;
    while (url[i] == '/') i ++;
    while (url[i] != '/') i ++;  
    return url.slice(0,i);
  }

  var UpdateEventList = function(eventList) {
    var container = $("#event-list");    
    container.empty();
    for (var i in eventList) {
      var e = $('<li class = "list-group-item" event-id = '+ eventList[i].id + ' ></li>');      
      e.html(eventList[i].createdAt + ": <b>" + eventList[i].type + " </b>");
      container.append(e);
    }
  }

  var getEventList = function() {
    var url = getUrl() + "/event";
    var eventList = $.ajax({
      url: url,
      method: "GET",
      dataType: "json",
    });
    console.log(eventList);
    eventList.done(UpdateEventList);
  //  eventList = [{id: '1',name:'aaa'}];
    
  }

  getEventList();

});