document.addEventListener('DOMContentLoaded',function(){
	//Khai bao mot so bien can dung
	var menugoc = document.querySelector('.mtop1');
	var nut		= document.querySelector('.nutlen');
	var trangthaimenugoc = "duoi55";

	window.addEventListener('scroll', function() {
		console.log(window.pageYOffset);
		if (window.pageYOffset > 55) {
			if (trangthaimenugoc == "duoi55") {
				trangthaimenugoc = 'tren55';
				menugoc.classList.add('menudoi');
				nut.classList.add('noilen');	
			}
		}
		else if (window.pageYOffset < 55) {
			if (trangthaimenugoc == "tren55") {
				trangthaimenugoc = 'duoi55';
				menugoc.classList.remove('menudoi');
				nut.classList.remove('noilen');	
			}
		}
	})
	
	
})

