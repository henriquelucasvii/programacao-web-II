const URL = "https://fakestoreapi.com/products/"
const divProdutos = document.getElementById("produtos")

const callApi = async () => {
    
    try {  
        const response = await fetch(URL)
        const products = await response.json()

    } catch (error) {
        console.error(error)
    }
}


const carregarProduto = async () => {
    try {
        const response = await fetch(URL)
        const products = await response.json()

        /*
        divProdutos.innerHTML = products.map(product => 
            // Mostra os produtos
            // `<h1>${product.title}</h1>
            //<h1>${product.id}</h1>
            //<h1>${product.price}</h1>
            //<h1>${product.description}</h1>
            //<h1>${product.category}</h1>`
            
        )
        */

    } catch (error) {
        console.error(error)
    }
}


callApi()
carregarProduto()