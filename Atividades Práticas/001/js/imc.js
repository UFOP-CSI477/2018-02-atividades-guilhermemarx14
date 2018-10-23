function validarCampo(campo, alerta, label) {

  console.log("validarCampo: " + campo + " " + alerta + " " + label);

  // Validar campo
  var valor = parseFloat($(campo).val());

  // Valor 1 -- inválido
  if ( isNaN(valor) ) {
    // Exibe o alerta
    $(alerta).slideDown();
    // Adiciona CSS de erro - input
    $(campo).addClass("is-invalid");
    // No label
    $(label).addClass("text-danger");
    // Limpar o campo
    $(campo).val("");
    // Definir o foco para o input
    $(campo).focus();
    // Abandonar a execução
    return false;
  }

  // Valor - correto

  // Oculta o alerta
  $(alerta).hide();
  // Remover as classes de erro
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  // Adicionar classe de validade
  $(campo).addClass("is-valid");
  return true;

}




$(document).ready(function(){

  // Vincular ação ao botão de cálculo
  // $("#btnCalcular").click(function(){
  //
  // });

  $("button[name='calculo']").click(function(){

    if ( validarCampo("input[name='peso']", "#alertaPeso", "#labelPeso") &&
     validarCampo("input[name='altura']", "#alertaAltura", "#labelAltura")) {

     var peso = parseFloat( $("input[name='peso']").val() );
   var altura = parseFloat( $("input[name='altura']").val() );

   var res = peso/(altura*altura);



           // Apresentar o resultado
           $("input[name='resultado']").val(res.toFixed(2));

           $("#result").slideDown();

           var minIdeal = 18.5*altura*altura;
           var maxIdeal = 24.9*altura*altura;

           var Texto;
           if(res<18.5){
            Texto = "Subnutrição!!";

            $("#result").removeClass("alert-warning");
            $("#result").removeClass("alert-success");
            $("#result").addClass("alert-danger");
          }else if (res<24.9){
            Texto = "Peso saudável!!";
            $("#result").removeClass("alert-danger");
            $("#result").removeClass("alert-warning");
            $("#result").addClass("alert-success");
          }
          else if(res<29.9){
            Texto = "Sobrepeso!!";
            $("#result").removeClass("alert-success");
            $("#result").removeClass("alert-danger");
            $("#result").addClass("alert-warning");
          }
          else if (res<34.9){
            Texto = "Obesidade grau 1!!";
            $("#result").removeClass("alert-warning");
            $("#result").removeClass("alert-success");
            $("#result").addClass("alert-danger");
          }
          else if (res<39.9){
            Texto = "Obesidade grau 2!!";
            $("#result").removeClass("alert-warning");
            $("#result").removeClass("alert-success");
            $("#result").addClass("alert-danger");
          }
          else {Texto = "Obesidade grau 3!!";
          $("#result").removeClass("alert-warning");
          $("#result").removeClass("alert-success");
          $("#result").addClass("alert-danger");}



          $("#resulttext").text(Texto+" Seu peso ideal é entre " + minIdeal.toFixed(2) + " e " + maxIdeal.toFixed(2) + " quilogramas.");

        } else {
          $("input[name='resultado']").val("");
        }

      });

  $("input[name='peso']").focusout(function(){
    validarCampo("input[name='peso']", "#alertaPeso", "#labelPeso");
  });

  $("input[name='altura']").focusout(function(){
    validarCampo("input[name='altura']", "#alertaAltura", "#labelAltura");
  });

  


});
