$(document).ready(function()  {
  var createForm = function( data ) {    
    var form = $("#event-form");
    var name = form.find("#fullname");
    name.val(data.name);
    form.find("#mobile").val(data.mobile);
    form.find("#address").val(data.address);
    form.find("#nric").val(data.nric);
    form.find("#event-type").val(data.eventType);
    form.find("#location").val(data.location);
    form.find("#other-details").val(data.others);
  }
  
  var data = {name: "Fire in NTU", mobile: "9999999"};
  createForm(data);
});