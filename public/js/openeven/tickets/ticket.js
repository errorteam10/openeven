class ticket {
  constructor() {
    this.ticket = new ticketing();
    this.start();
  }

  start() {
    this.ticket.username = 'brent';
  }
}

class ticketing {
  constructor() {
    this.username;
    this.price;
    this.event;
    this.data;
    this.qr;
  }
}
