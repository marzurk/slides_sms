$(document).ready(function() {
	$("#enlaceTabla").click(function() {
		console.log("Push enlaceTabla");
		$(".btnTabs").css('display', 'none');
		$("#tabla").css('display', 'inline-block');
	});

	$("#enlaceGrafo").click(function() {
		window.open('chart.html', 'popup', 'width=600, height=600');
	});

	$("#btnRegresar").click(function(){
		$(".btnTabs").css('display', 'inline-block');
		$("#tabla").css('display', 'none');
	});
});