# CRUD - Laravel 10 (MKTP)
_Este projeto consiste em um CRUD desenvolvido em Laravel 10, com rotas de criação, listagem, edição e remoção de produtos. Em destaque, também contém integração com a api do ViaCep para identificação do bairro referente ao galpão em que o seu produto estará._ 

<table>
  <tr>
    <td align="center">
      <img src="./public/assets/table.png" height="300" />
      <br />
      Página de listagem de produtos
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="./public/assets/create.png" height="300" />
      <br />
      Página de cadastro
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="./public/assets/edit.png" height="300" />
      <br />
      Página de edição
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="./public/assets/viacep.png" height="120" />
      <br />
      Integração com ViaCep
    </td>
  </tr>
</table>

## Sobre o projeto
O CRUD consiste em uma API com as 4 possibilidades de tratamento, ou seja, podendo se criar, listar, editar ou remover produtos, juntamente a um banco de dados. Além disso, ao inserir o CEP o bairro relacionado irá aparecer, de acordo com a api do ViaCep integrada no projeto.

Portanto, ele inclui:

- **Produtos** (`/products`) 
  - Criação:
    - Produtos podem ser cadastrados, seguindo os padrões de código de identificação, nome, link, preço e cep.

  - Listagem:
    - Todos os produtos criados podem ser vistos.

  - Edição:
    - Qualquer produto pode ser editado, seguindo as regras de cadastro.

  - Remoção:
    - Qualquer produto pode ser deletado, de forma única.
    

## Tecnologias

As tecnologias abaixo, foram as utilizadas para desenvolver o projeto:

- ![Laravel 10](https://img.shields.io/badge/Laravel%2010-Active-brightgreen)

- ![PHP](https://img.shields.io/badge/PHP-Programming%20Language-blue)

- ![HTML](https://img.shields.io/badge/HTML-Markup-orange)

- ![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-CSS%20Framework-blueviolet)

- ![Axios](https://img.shields.io/badge/Axios-HTTP%20Client-brightgreen)

- ![MySQL](https://img.shields.io/badge/MySQL-Database-blue)

- ![PHPUnit](https://img.shields.io/badge/PHPUnit-Testing-red)

## Como rodar para desenvolvimento

1. Clone este repositório
2. Instale todas as dependências

```bash
# para dependências do javascript
$ npm install

# para dependências do php
$ composer install
```

3. Crie um banco de dados MySQL, com o nome que desejar

4. Configure o arquivo `.env` usando o `.env.example` como base

5. Inicie o servidor, rodando os dois comandos de desenvolvimento:

```bash
# para rodar o servidor php
$ php artisan serve

# para rodar o vite (HTML, CSS e JS)
$ npm run dev
```
6. Para preencher seu banco, automaticamente, rode o comando:

```bash
# para gerar produtos aleatórios no seu banco
$ php artisan db:seed
```

7. Agora a aplicação estará disponível para você rodar em seu servidor local, no endereço `http://localhost:8000`.

## Como rodar os testes

1. Rode o comando abaixo:

```bash
$ php artisan test
```
