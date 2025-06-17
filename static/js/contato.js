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

  const selectAssunto = document.getElementById('txtassunto');
  const outroAssuntoContainer = document.getElementById('outroAssuntoContainer');
  const outroAssuntoInput = document.getElementById('outroAssuntoEspecifico');

  if (selectAssunto) {
    selectAssunto.addEventListener('change', function() {
      if (selectAssunto.value === 'Outro') {
        outroAssuntoContainer.style.display = 'block';
        outroAssuntoInput.required = true;
      } else {
        outroAssuntoContainer.style.display = 'none';
        outroAssuntoInput.required = false;
        outroAssuntoInput.value = '';
      }
    });
  }

  if (formulario) {
    formulario.addEventListener('submit', function (e) {
      e.preventDefault();

      if (!formulario.checkValidity()) {
        toast.error('Por favor, preencha todos os campos obrigatórios.');
        formulario.reportValidity(); 
        return; 
      }

      const formData = new FormData(formulario);
      
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
          if (outroAssuntoContainer) {
              outroAssuntoContainer.style.display = 'none';
          }
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