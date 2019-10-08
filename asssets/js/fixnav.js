$(document).ready(function () {
	$(window).scroll(function () {
		if (scrollY > 400) {
			$(".navbar").addClass("navDown");
		} else {
			$(".navbar").removeClass("navDown");
		}
	});

});
