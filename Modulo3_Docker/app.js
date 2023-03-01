const express = require('express') // chamando a aplicacao express.
const app = express() // inicializando o express.
const port = 3000 // colacando uma porta para a aplicacao.

app.get('/', (req, res) =>{
    res.send('Ola minha imagem!') // enviando resposta, seria a mensagem que o usuario visualizar.
}); // Criar uma rota de get

app.listen(port, () => {
    console.log(`Execurando na porta: ${port}`) // Isso vai aparecer no terminal ou nos logs do docker. Mostrando que o conteiner esta sendo executado na porta.
}); // tem que indicar a porta que esta usando.