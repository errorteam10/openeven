class create_event {
  constructor() {
    this.next = $('#next');

    this.start();
  }

  start() {
    this.next.on('click', kfunction(e){
      console.log();
    });
  }
}
