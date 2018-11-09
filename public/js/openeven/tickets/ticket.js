class ticket{constructor(){this.past=$('[id^="past_"]');this.current=$('[id^="current_"]');this.data;this.ticket_data;this.event_data;this.modal;this.start()}
start(){var object=this;$('[id^="past_"]').on('click',function(e){object.data={"access":"ajax","ticket":e.target.attributes.value.value,"event":e.target.attributes.event.value,"owner":e.target.attributes.owner.value};$.ajax({type:"GET",data:object.data,url:window.OpenEven.url+'/get/ticket',success:function(e){object.ticket_data=e;object.get_event()},dataType:"JSON"})})}
get_event(){var object=this;object.data={"access":"ajax","event_id":object.ticket_data.event_id};console.log(object);$.ajax({type:"GET",data:object.data,url:window.OpenEven.url+'/event/'+object.ticket_data.event_id,success:function(e){object.event_data=e;object.construct()},dataType:"JSON"})}













  construct() {
    var content =  `
      <div class="panel panel-default">
      <h3 class="title">`+this.event_data[0].name+`</h3>
      </div>
    `;
    window.modal = new modal(this.event_data.id, 'Ticket Information', content);
  }



}
