class OpenEven {
constructor(url) {
	this.url = url;
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
