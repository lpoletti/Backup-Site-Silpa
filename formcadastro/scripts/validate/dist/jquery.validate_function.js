$(document).ready( function() {
	$("#form_cadastro_jur").validate({
		// Define as regras
		rules:{
			razao_social:{
				// campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true, minLength: 2
			},
			nome_fantasia:{
				// campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
				required: true
			},
			cnpj:{
				// campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
				required: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages:{
			razao_social:{
				required: "Campo Razão Social é obrigatório!!!",
				minLength: "Minimo de 4 caracteres"
			},
			nome_fantasia:{
				required: "O campo Nome Fantasia é obrigatório!!!"
			},
			cnpj:{
				required: "Digite seu cnpj!",
			}
		}
	});
});