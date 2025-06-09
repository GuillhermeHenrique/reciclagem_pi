document.addEventListener('DOMContentLoaded', function () {
  const toast = {
    success: function (mensagem) {
      Toastify({
        text: mensagem,
        duration: 3000,
        gravity: "top",
        position: "center",
        backgroundColor: "#28a745",
        stopOnFocus: true,
      }).showToast();
    },
    error: function (mensagem) {
      Toastify({
        text: mensagem,
        duration: 5000,
        gravity: "top",
        position: "center",
        backgroundColor: "#dc3545",
        stopOnFocus: true,
      }).showToast();
    }
  };

  const formulario = document.querySelector('.formulario-contato');
  const botaoEnviar = document.querySelector('.botao-enviar'); 

  if (formulario) {
    formulario.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(formulario);
      const nomeValor = document.getElementById('txtnome').value.trim();
      const emailValor = document.getElementById('txtemail').value.trim();
      const assuntoValor = document.getElementById('txtassunto').value.trim();
      const mensagemValor = document.getElementById('txtmensagem').value.trim();

      if (nomeValor === '' || emailValor === '' || assuntoValor === '' || mensagemValor === '') {
        toast.error('Por favor, preencha todos os campos.');
        return; 
      }

      botaoEnviar.disabled = true;
      botaoEnviar.innerText = 'Enviando...';

      fetch(formulario.action, {
        method: 'POST',
        body: formData,
        headers: {
          'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          toast.success('Mensagem enviada com sucesso!');
          formulario.reset();
        } else {
          toast.error('Ocorreu um erro ao enviar a mensagem. Tente novamente.');
        }
      }).catch(error => {
        toast.error('Erro de conexão. Verifique sua internet e tente novamente.');
      }).finally(() => {
        botaoEnviar.disabled = false;
        botaoEnviar.innerText = 'Enviar';
      });
    });
  }
});