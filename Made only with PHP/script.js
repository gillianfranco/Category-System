$(document).ready(function(){
	// Requisição da página de Cadastro de categorias
	$("#buttonCadCat").click(function(){
		var categoria = $('#categoria').val();
		var data = new FormData;
		data.set("categoria", categoria);

		$.ajax({
			url: "cadCat.php",
			type: "post",
			data: data,
			processData: false,
			contentType: false, 
			async: false,
			success: function(data){
				$('#res').html(data);
			}
		});
	});

	// Requisiçãoa da página de Cadastro de Produtos
	$("#buttonCadProd").click(function(){
		var produto = $('#produto').val();
		var catID = $('#CAT_ID').val();
		var data = new FormData;
		data.set("produto", produto);
		data.set("catID", catID);

		$.ajax({
			url: "cadProd.php",
			type: "post",
			data: data,
			processData: false,
			contentType: false,
			async: false,
			success: function(data){
				$('#res').html(data);
			}
		});
	});
});