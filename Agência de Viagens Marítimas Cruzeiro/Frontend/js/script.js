// Feedback de sucesso nos formulários
function showSuccessMessage(formClass, message) {
  const form = document.querySelector(formClass);
  if (form) {
    let successDiv = form.querySelector('.form-success');
    if (!successDiv) {
      successDiv = document.createElement('div');
      successDiv.className = 'form-success';
      form.appendChild(successDiv);
    }
    successDiv.textContent = message;
    setTimeout(() => {
      successDiv.textContent = '';
    }, 4000);
  }
}

// função para a página ComoViajar - declarada globalmente
function selecionar(opcao) {
  // mostra mensagem rápida
  const resultado = document.getElementById("resultado");
  if (resultado) {
    resultado.innerHTML = opcao === "aviao"
      ? "Você escolheu viajar de AVIÃO ✈️"
      : "Você escolheu viajar de CRUZEIRO 🚢";
  }

  // envia o formulário oculto para o backend
  const tipoInput = document.getElementById("tipo_viagem");
  if (tipoInput) {
    tipoInput.value = opcao;
    const form = document.getElementById("form-escolha");
    if (form) form.submit();
  }
}

// Eventos de envio dos formulários e outros handlers
window.addEventListener('DOMContentLoaded', function() {
  // Pagamento
  const pagamentoForm = document.querySelector('.form-pagamento');
  if (pagamentoForm) {
    pagamentoForm.addEventListener('submit', function(e) {
      e.preventDefault();
      showSuccessMessage('.form-pagamento', 'Pagamento realizado com sucesso!');
      pagamentoForm.reset();
    });
  }
  // Hospedagem
  const hospedagemForm = document.querySelector('.form-hospedagem');
  if (hospedagemForm) {
    hospedagemForm.addEventListener('submit', function(e) {
      e.preventDefault();
      showSuccessMessage('.form-hospedagem', 'Hospedagem reservada com sucesso!');
      hospedagemForm.reset();
    });
  }
  // Contato
  const contatoForm = document.querySelector('.form-contato');
  if (contatoForm) {
    contatoForm.addEventListener('submit', function(e) {
      e.preventDefault();
      showSuccessMessage('.form-contato', 'Mensagem enviada com sucesso!');
      contatoForm.reset();
    });
  }

  // Tooltips Bootstrap
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Scroll suave para âncoras
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // efeito de opacidade nos links
  const links = document.querySelectorAll("a");
  links.forEach(link => {
    link.addEventListener("mouseover", () => {
      link.style.opacity = "0.8";
    });
    link.addEventListener("mouseout", () => {
      link.style.opacity = "1";
    });
  });
});
