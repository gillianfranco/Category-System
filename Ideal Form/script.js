$(document).ready(function(){
	$("#button").click(function(){
		var nome = $("#nome").val();
		var sobrenome = $("#sobrenome").val();
		var email = $("#email").val();
		var senha = $("#senha").val();

		var data = new FormData;

		data.set("nome", nome);
		data.set("sobrenome", sobrenome);
		data.set("email", email);
		data.set("senha", senha);

		$.ajax({
			url: "getData.php",
			method: "post",
			data: data,
			assync: false,
			processData: false,
			contentType: false,
			success: function(data){
				$("#dados").html(data);
			}
		});
	});
});