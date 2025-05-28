document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.querySelector('.formulario-contato');
  
    if (formulario) {
      formulario.addEventListener('submit', function (e) {
        e.preventDefault(); 
        document.getElementById('mensagem-envio').style.display = 'block';
        
      
        formulario.reset(); 
      });
    }
  });
  
  