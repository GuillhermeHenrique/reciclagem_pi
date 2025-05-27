// Espera a página carregar antes de adicionar o evento
document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.querySelector('.formulario-contato');
  
    if (formulario) {
      formulario.addEventListener('submit', function (e) {
        e.preventDefault(); // evita o envio real do formulário
        document.getElementById('mensagem-envio').style.display = 'block';
         // mostra a mensagem de sucesso
        

        formulario.reset(); // **LIMPA TODOS OS CAMPOS DO FORMULÁRIO**
      });
    }
  });
  
  