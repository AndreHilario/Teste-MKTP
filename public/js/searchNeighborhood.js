async function searchNeighborhood(cep) {
    const neighborhoodElement = document.getElementById('neighborhood');
    neighborhoodElement.textContent = ''; 

    try {
        const response = await fetch(`https://viacep.com.br/ws/${cep.replace(/\D/g, '')}/json/`);
        const data = await response.json();

        if (data && !data.erro) {
            neighborhoodElement.textContent = `Bairro: ${data.bairro}`;
        } else {
            neighborhoodElement.textContent = 'CEP não encontrado';
        }
    } catch (error) {
        console.error('Erro ao buscar o CEP:', error);
    }
}