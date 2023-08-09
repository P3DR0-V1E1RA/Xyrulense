// Script JavaScript para exibir a mensagem enviada ao enviar o formulário de contato

document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault();
    document.getElementById("mensagem-enviada").style.display = "block";
    setTimeout(function () {
        document.getElementById("mensagem-enviada").style.display = "none";
    }, 3000);
});
