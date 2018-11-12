class purchase {
  constructor(event, event_name, user, submit) {
    this.submit = $('#submit');
    this.event = event;
    this.event_name = event_name;
    this.user = user;

    this.start();
  }

  start() {
    var object = this;
    this.submit.on('click', function(e){
      alert('clicked');
      $.ajax({
        type: "POST",
        url: window.OpenEven.url + '/purchase',
        data: {
          "event" : object.event,
          "event_name" : object.event_name,
          'user' : object.user
        },
        success: function(e) {
          console.log(e);
          window.location = window.OpenEven.url + '/home';
        },
        dataType: "JSON"
      });
    });
  }
}
