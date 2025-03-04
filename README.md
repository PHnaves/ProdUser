# Laravel CRUD Application

Este projeto foi desenvolvido utilizando Laravel para demonstrar conhecimentos em rotas e controllers. A aplicação implementa um CRUD para três recursos: Usuários, Produtos e Categorias.

## Tecnologias Utilizadas
- Laravel
- PHP
- MySQL (via XAMPP)
- PHPMyAdmin
- Tailwind (Para um Visual Mais Agradavel)

## Requisitos
- PHP 8+
- Composer
- XAMPP (para MySQL e PHPMyAdmin)

## Instalação
1. Clone este repositório:
   ```bash
   git clone https://github.com/PHnaves/ProdUser.git
   ```
2. Acesse a pasta do projeto:
   ```bash
   cd nome-do-projeto
   ```
3. Instale as dependências do Laravel:
   ```bash
   composer install
   ```
4. Copie o arquivo `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```
5. Configure o banco de dados no arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=seu_banco
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
7. Rode as migrações para criar as tabelas:
   ```bash
   php artisan migrate
   ```
8. Inicie o Front-End OBS: SEM O FRONT VAI FICAR TUDO FEIO E ESTRANHO:
   ```bash
   composer run dev
   ```   
9. Inicie o servidor:
   ```bash
   php artisan serve
   ```

## Rotas
As rotas da aplicação estão definidas no arquivo `routes/web.php`, pois não utilizamos uma API separada.

### Usuários
- `GET /users` - Lista todos os usuários.
- `GET /users/create` - Exibe o formulário de criação de usuário.
- `POST /users/store` - Armazena um novo usuário.
- `GET /users/{user}/edit` - Exibe o formulário de edição do usuário.
- `PUT /users/{user}/update` - Atualiza os dados do usuário.
- `GET /users/{user}/show` - Mostra detalhes de um usuário específico.
- `DELETE /users/{user}` - Remove um usuário.

### Produtos
- `GET /products` - Lista todos os produtos.
- `GET /products/create` - Exibe o formulário de criação de produto.
- `POST /products/store` - Armazena um novo produto.
- `GET /products/{product}/edit` - Exibe o formulário de edição do produto.
- `PUT /products/{product}/update` - Atualiza os dados do produto.
- `GET /products/{product}/show` - Mostra detalhes de um produto específico.
- `DELETE /products/{product}` - Remove um produto.

### Categorias
- `GET /categories` - Lista todas as categorias.
- `POST /categories/store` - Armazena uma nova categoria.
- `GET /categories/{category}/edit` - Exibe o formulário de edição da categoria.
- `PUT /categories/{category}/update` - Atualiza os dados da categoria.
- `DELETE /categories/{category}` - Remove uma categoria.


## Contato
Caso tenha dúvidas ou sugestões, entre em contato pelo email: pnaves001@gmail.com.

