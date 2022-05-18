function nome_funcao(){
    alert("Login ou senha incorreto");
}

function soma(a,b){
    var total = a + b;
    alert("O valor total é " + total);
}

function desconto(a,b){
    var totalDesconto = a -b;
    return totalDesconto;
}

var totalDesc = desconto(15,3);
document.write("O valor total com desconto é de " + totalDesc);
