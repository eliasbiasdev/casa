var valorUm = 11;
var valorDois= 9;

document.write("<h2>Comparação: Igual a: </h2>");

if(valorUm == valorDois){
    document.write("O valor " + valorUm + " é igual a " + valorDois);
}else{
    document.write("O valor " + valorUm + " é diferente de " + valorDois);

}

document.write("<br>");
document.write("<h2>Comparação: Diferente de</h2>");
if(valorUm != valorDois){
    document.write("O Valor " + valorUm +" é diferente de "+ valorDois);
}else{
    document.write("Os valores são iguais");
}

document.write("<br>");
document.write("<h2>Comparação: Menor que: </h2>");
if(valorUm < valorDois){
    document.write("O valor " + valorUm + " é menor que " + valorDois);
}else{
    document.write("O valor " + valorUm + " é maior que " + valorDois);
}