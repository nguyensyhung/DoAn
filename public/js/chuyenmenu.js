document.addEventListener("DOMContentLoaded", function(){
	var nut = document.querySelectorAll('#mtop ul li');
	var nut2 = document.querySelectorAll('#gachduoi ul li a');
	console.log(nut2);
	// gan su kien click cho cac nut 
	for (var i = 0; i < nut.length; i++) {
		nut[i].addEventListener('click', function(){
			// bo class active truowc do
			for (var i = 0; i < nut.length; i++) {
				nut[i].classList.remove('active');
			}
			this.classList.add('active');

		})
	}
	for (var i = 0; i < nut2.length; i++) {
		nut2[i].addEventListener('click', function(){
			// bo class active truowc do
			for (var i = 0; i < nut2.length; i++) {
				nut2[i].classList.remove('gachduoi');
			}
			this.classList.add('gachduoi');

		})
	}
})