function atualizarBadgeCarrinho() {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    const totalItens = carrinho.reduce((acc, p) => acc + (p.quantidade || 1), 0);

    const badge = document.querySelector('.bi-cart')?.parentElement?.querySelector('.badge');

    if (badge) {
        badge.textContent = totalItens;
    }
}

document.addEventListener('DOMContentLoaded', atualizarBadgeCarrinho);

window.addEventListener('storage', atualizarBadgeCarrinho);
