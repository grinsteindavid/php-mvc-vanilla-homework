class User {
	constructor(firstname, lastname) {
		this.firstname = firstname;
		this.lastname = lastname;
	}
	fullname() { return `${this.firstname} ${this.lastname}` }
}

$(function main() {
	let user = new User('David', 'Miranda');
	let username = $('#username');
	username.text(user.fullname());
});