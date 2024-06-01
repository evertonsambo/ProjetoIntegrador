// Lista de produtos (inicialmente vazia)
let produtos = [];

// Função para adicionar um novo produto
function adicionarProduto(nome, descricao, preco, imagem) {
    const novoProduto = {
        nome: nome,
        descricao: descricao,
        preco: preco,
        imagem: imagem
    };
    produtos.push(novoProduto);
    exibirProdutos();
}

// Função para exibir todos os produtos na página
function exibirProdutos() {
    const container = document.querySelector('.produtos .container');
    container.innerHTML = '';

    produtos.forEach(produto => {
        const divProduto = document.createElement('div');
        divProduto.classList.add('produto');

        const img = document.createElement('img');
        img.src = URL.createObjectURL(produto.imagem);
        img.alt = produto.nome;

        const h3 = document.createElement('h3');
        h3.textContent = produto.nome;

        const pDescricao = document.createElement('p');
        pDescricao.textContent = produto.descricao;

        const pPreco = document.createElement('p');
        pPreco.textContent = 'Preço: ' + produto.preco;

        divProduto.appendChild(img);
        divProduto.appendChild(h3);
        divProduto.appendChild(pDescricao);
        divProduto.appendChild(pPreco);

        container.appendChild(divProduto);
    });
}

// Capturar envio do formulário e adicionar produto
document.getElementById("formulario-produto").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const nome = document.getElementById("nome-produto").value;
    const descricao = document.getElementById("descricao-produto").value;
    const preco = document.getElementById("preco-produto").value;
    const imagem = document.getElementById("imagem-produto").files[0];
    
    adicionarProduto(nome, descricao, preco, imagem);
});
