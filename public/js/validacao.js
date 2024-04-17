//Validar com testes de preenchimento de campos
window.onload = function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var mensagem = document.getElementById('mensagem').value;

        if (!nome || !email || !mensagem) {
            alert('Por favor, preencha todos os campos.');
            e.preventDefault(); // impede o envio do formulário
        }
    });
};