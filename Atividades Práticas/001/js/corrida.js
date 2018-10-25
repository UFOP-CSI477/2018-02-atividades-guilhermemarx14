function criarCorredor (largad,chegad,nom,resultad,temp){
	var corredor = {largada: largad, chegada:chegad, nome: nom, resultado: resultad,tempo: temp};
	return corredor;
}

function validaLargada(campo){
	if(isNaN(parseInt($(campo).val())))
		return false;
	return true;

}

function preencheCorredor(linha,corredor){
	$("#chegadaLinha"+linha).text(corredor.chegada);
	$("#largadaLinha"+linha).text(corredor.largada);
	$("#nomeLinha"+linha).text(corredor.nome);
	$("#resultadoLinha"+linha).text(corredor.resultado);
	$("#tempoLinha"+linha).text(corredor.tempo);
}
$(document).ready(function(){
	$("#saida").hide();


	$("#continuar").click(function(){
		var corredores = [];

		var i=0;
		var largad,chegad,nom,resultad,temp;
		chegad = 0;
		resultad = "-";
		for(i=0;i<6;i++)
		{
			if(validaLargada("#posicao"+i))
			{
				largad = parseInt($("#posicao"+i).val());
				nom = $("#nome"+i).val();
				temp = parseInt($("#tempo"+i).val());
				corredores.push(criarCorredor(largad,chegad,nom,resultad,temp));

			}
		}

		$("#entrada").hide();
		$("#saida").show();

		corredores.sort(function(a,b){
			return b.tempo-a.tempo;
		});
		i=0;
		var chegada = 0;
		var tempoUltimoCorredor=0;
		var corredor;
		
		while(corredores.length>0)			
		{
			corredor = corredores.pop();
			if (corredor.tempo != tempoUltimoCorredor)
				chegada = i+1;
			corredor.chegada = chegada;
			if(chegada == 1){
				corredor.resultado = "VENCEDOR!";
				$("#linha"+i).addClass("table-success");
			}else{
				$("#linha"+i).addClass("table-danger");
			}
			preencheCorredor(i,corredor);
			tempoUltimoCorredor = corredor.tempo;
			i++;

		}
		while(i<6)
		{
			$("#linha"+i).hide();
			i++;
		}
	});
});

