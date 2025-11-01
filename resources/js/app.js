import './bootstrap';
import '../static/scss/site.scss';
import flatpickr from "flatpickr";

// creates multiple instances
flatpickr(".datepicker");


var accordion = document.getElementsByClassName("accordion");

for (let i = 0; i < accordion.length; i++) {
	accordion[i].addEventListener("click", function () {
		this.classList.toggle("active");

		var panel = this.nextElementSibling;
		if (panel.style.display === "block") {
			panel.style.display = "none";
		} else {
			panel.style.display = "block";
		}
	});
}
