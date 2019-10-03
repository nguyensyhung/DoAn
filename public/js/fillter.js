$(function() {
	// sua loi load ban dau  
	window.dispatchEvent(new Event('resize'));


	 $('.content').isotope({
	 	itemSelector:'div'
	 });

	 // code cho phan nut 
	 $('#gachduoi ul li a').click(function(event) {
	 	
	 	var danhmuc = $(this).data('danhmucanh');
	 	//console.log(ten);
	 	//dat ten vao trong h1

	 	if(danhmuc == 'all'){
	 		$('.content ').isotope({filter:'*'});
	 	}
	 	else {
	 		$('.content ').isotope({filter:danhmuc});
	 	}
	 	return false;
	 });;
 });