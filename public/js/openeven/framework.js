class OpenEven {
constructor(url) {
	this.url = url;
}
}

class mobile_scanner {
	constructor() {
		this.owner;
		this.event;
		this.ticket;

		this.scan();
	}

	scan() {
		var object = this;
		let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false, captureImage: true, continuous: true, });
		scanner.addListener('scan', function (e) {
			object.owner = JSON.parse(e).owner;
			object.event = JSON.parse(e).event;
			object.ticket = JSON.parse(e).ticket;
			console.log(object);
			object.submit();
		});
		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				scanner.start(cameras[1]);
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});
	}

	submit() {
		var object = this;
		$.ajax({
			type: "post",
			data: {
				event: object.event,
				owner: object.owner,
				ticket: object.ticket
			},
			url: window.OpenEven.url + '/mobile/checkin',
			success: function(e){
				alert('You have checked in ' + JSON.parse(e.data).customer_name + ' For ' + JSON.parse(e.data).event_name +'.');
				console.log(e);
			},
			dataType: "JSON"
		});
	}
}

class scanner {
	constructor() {
		this.owner;
		this.event;
		this.ticket;

		this.scan();
	}

	scan() {
		var object = this;
		let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false, captureImage: true, continuous: true, });
		scanner.addListener('scan', function (e) {
			object.owner = JSON.parse(e).owner;
			object.event = JSON.parse(e).event;
			object.ticket = JSON.parse(e).ticket;
			console.log(object);
			object.submit();
		});
		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				scanner.start(cameras[0]);
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});
	}

	submit() {
		var object = this;
		$.ajax({
			type: "post",
			data: {
				event: object.event,
				owner: object.owner,
				ticket: object.ticket
			},
			url: window.OpenEven.url + '/mobile/checkin',
			success: function(e){
				alert('You have checked in ' + JSON.parse(e.data).customer_name + ' For ' + JSON.parse(e.data).event_name +'.');
				console.log(e);
			},
			dataType: "JSON"
		});
	}
}
class modal {
	constructor(id, title, content, buttons) {
		  this.id = id;
			this.title = title;
			this.content = content;
			this.buttons = buttons;
			this.start();
	}
	start() {
		var object = this;
		$('#modal_title').text(object.title);
		$('#modal_content').html(object.content);
		$("#modal").modal('show');
	}
}
var fadingObject = {
yellowColor : function (val){
var r="ff"; var g="ff";
var b=val.toString(16);
var newval = "#"+r+g+b;
return newval;
},
fade : function (id, start, finish) {
this.count = this.start = start;
this.finish = finish;
this.id = id;
this.countDown = function() {
this.count+=30;
if (this.count >= this.finish) {
document.getElementById(this.id).style.background= "transparent";
this.countDown=null;
}
document.getElementById(this.id).style.backgroundColor=
this.yellowColor(this.count);
setTimeout(this.countDown.bind(this), 100);
}
}
};

fadingObject.fade("one", 0, 300);
fadingObject.countDown();
//to flash colors after an action takes place.
//Should make one for success vs failed.
