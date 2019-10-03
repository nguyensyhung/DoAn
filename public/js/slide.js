document.addEventListener("DOMContentLoaded",function(){
	//khai bao 1 so doi tuong can su dung
	var nut = document.querySelectorAll('.chuyenslide ul li');
	var slides = document.querySelectorAll('.allslide ul li');
	var thoigian = setInterval(function(){autoSlide()}, 5000);
	//nut tra ve mot mang nut
	
	for (var i = 0; i < nut.length; i++) {
		nut[i].addEventListener('click',function(){
			//truoc tien xoa 
			clearInterval(thoigian);
			//bo tat ca mau den
			for (var i = 0; i < nut.length; i++) {
				nut[i].classList.remove('kichhoat');
			}
			this.classList.add('kichhoat');
			//su ly chuyen mau
			//xu ly phan tinh vi tri
			/*console.log(this.previousElementSibling); */

			var nutactive = this;
			var vitrinut = 0
			for (vitrinut = 0; nutactive = nutactive.previousElementSibling; vitrinut++) {
				
			}
			//console.log("vi tri cua phan tu co class kich hoat la = " + vitrinut);
			for (var i = 0; i < slides.length; i++) {
				slides[i].classList.remove('active');
				slides[vitrinut].classList.add('active');
			}
			
		})
	}
	//viet ham tu chuyen slide
	function autoSlide() {
		var vitrislide = 0;
		var slideHientai = document.querySelector('.allslide ul li.active');
		/*console.log(slideHientai)*/
		for (vitrislide = 0; slideHientai = slideHientai.previousElementSibling; vitrislide++) {}
		
	if (vitrislide < (slides.length -1)) {
		for (var i = 0; i < slides.length; i++) {
			slides[i].classList.remove('active');
			nut[i].classList.remove('kichhoat');
		}
		slides[vitrislide].nextElementSibling.classList.add('active');
		nut[vitrislide].nextElementSibling.classList.add('kichhoat');
		}
	
	else{
		for (var i = 0; i < slides.length; i++) {
			slides[i].classList.remove('active');
			nut[i].classList.remove('kichhoat');
		}
		slides[0].classList.add('active');
		nut[0].classList.add('kichhoat');
	}
	/*console.log('vi tri slide hien tai la' + vitrislide);*/
	}
		
})