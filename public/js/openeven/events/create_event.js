class create_event {
  constructor() {
    this.submit = $('#submit');
    this.next = $('#next');
    this.next_1 = $('#next_1');
    this.next_2 = $('#next_2');
    this.next_3 = $('#next_3');
    this.next_4 = $('#next_4');
    this.modal_1 = $('#modal_1');
    this.modal_2 = $('#modal_2');
    this.modal_3 = $('#modal_3');
    this.modal_4 = $('#modal_4');
    this.modal_5= $('#modal_5');
    this.back_1 = $('#back_1');
    this.back_2 = $('#back_2');
    this.back_3 = $('#back_3');
    this.back_4 = $('#back_4');

    //Actual Vairables To Be Recieved By The Backend
    this.name = $('#name');
    this.hotel_name = $('#hotel_name');
    this.hotel_location = $('#hotel_location');
    this.hotel_pricing = $('#hotel_pricing');
    this.parking_name = $('#hotel_name');
    this.parking_location = $('#hotel_location');
    this.parking_pricing = $('#hotel_pricing');
    this.food_name = $('#food_name');
    this.food_location = $('#food_location');
    this.food_pricing = $('#food_pricing');
    this.number_of_tickets = $('#number_of_tickets');
    this.venue_location = $('#venue_location');
    this.pricing = $('#pricing');
    this.link_to_schedule = $('#link_to_schedule');
    this.tagline = $('#tagline');
    this.cover = $('#cover');
    this.tags = $('#tags');
    this.about = $('#about');

    this.start();
  }

  start() {
    var object = this;
    this.back_1.on('click', function(e){
      object.modal_1.modal('show');
      object.modal_2.modal('hide');
    });
    this.back_2.on('click', function(e){
      object.modal_2.modal('show');
      object.modal_3.modal('hide');
    });
    this.back_3.on('click', function(e){
      object.modal_3.modal('show');
      object.modal_4.modal('hide');
    });
    this.back_4.on('click', function(e){
      object.modal_4.modal('show');
      object.modal_5.modal('hide');
    });

    this.submit.on('click', function(e){
      object.modal_5.modal('hide');


    });
    this.next_2.on('click', function(e){
      object.modal_3.modal('hide');
      object.modal_4.modal('show');


      console.log(object);
    });
    this.next_1.on('click', function(e){
      object.modal_2.modal('hide');
      object.modal_3.modal('show');


      console.log(object);
    });
    this.next_3.on('click', function(e){
      object.modal_4.modal('hide');
      object.modal_5.modal('show');


      console.log(object);
    });
    this.next.on('click', function(e){
      object.modal_1.modal('hide');
      object.modal_2.modal('show');

      console.log(object);
    });
  }
}
