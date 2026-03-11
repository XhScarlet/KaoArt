const container = document.querySelector('.col-lg-8');
const resumo = document.querySelector('.col-lg-4');

let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

if (carrinho.length === 0) {
  container.innerHTML = `
      <div class="text-center py-5">
        <h4>Seu carrinho está vazio 😢</h4>
        <a href="produtos.html" class="btn btn-primary mt-3">Voltar aos Produtos</a>
      </div>`;
  resumo.style.display = 'none';
} else {
  let subtotal = 0;
  container.innerHTML = '';

  carrinho.forEach((item, i) => {
    const valor = parseFloat(item.preco.replace('R$', '').replace(',', '.'));
    subtotal += valor;

    container.innerHTML += `
  <div class="card mb-3 shadow-sm">
    <div class="row g-0 align-items-center p-3">
      <div class="col-md-3 text-center">
        <img src="${item.img}" class="img-fluid rounded" alt="${item.nome}">
      </div>
      <div class="col-md-5">
        <h5 class="card-title mb-1">${item.nome}</h5>
        <p class="preco mb-0">${item.preco}</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control form-control-sm text-center quantidade" value="1" min="1" data-index="${i}">
      </div>
      <div class="col-md-2 text-center">
        <button class="btn btn-danger btn-sm remove-item" data-index="${i}">
          <i class="bi bi-trash"></i>
        </button>
      </div>
    </div>
  </div>`;
  });

  const frete = 15.00;
  let total = subtotal + frete;

  document.querySelector('.card .d-flex strong').innerText = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
  resumo.querySelector('.destaquetexto').innerText = `R$ ${total.toFixed(2).replace('.', ',')}`;

  document.querySelectorAll('.quantidade').forEach(input => {
    input.addEventListener('input', () => {
      let novoSubtotal = 0;
      document.querySelectorAll('.quantidade').forEach((qtd, idx) => {
        const valor = parseFloat(carrinho[idx].preco.replace('R$', '').replace(',', '.'));
        novoSubtotal += valor * parseInt(qtd.value);
      });

      const novoTotal = novoSubtotal + frete;
      document.querySelector('.card .d-flex strong').innerText = `R$ ${novoSubtotal.toFixed(2).replace('.', ',')}`;
      resumo.querySelector('.destaquetexto').innerText = `R$ ${novoTotal.toFixed(2).replace('.', ',')}`;
    });
  });

  document.addEventListener('click', e => {
    if (e.target.closest('.remove-item')) {
      const index = e.target.closest('.remove-item').dataset.index;
      carrinho.splice(index, 1);
      localStorage.setItem('carrinho', JSON.stringify(carrinho));
      location.reload();
    }
  });
}

