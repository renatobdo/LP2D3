# Introdução ao Laravel

- Framework construído na linguagem PHP
- Utiliza a arquitetura MVC
- Utiliza recursos que auxiliam o desenvolvimento: artisan, migrations, blade, etc
- Deixa o projeto organizado com sua estrutura de pastas
- Laravel é um framework de código aberto que foi criado por Taylor Otwell e lançado pela primeira vez em 2011
- O Laravel oferece uma ampla gama de recursos e ferramentas para facilitar o desenvolvimento de aplicativos web, incluindo:
  - gerenciamento de rotas
  - autenticação de usuário
  - ORM (Object-Relational Mapping) chamado Eloquent

## Ferramentas necessárias
- XAMP: 
- composer: https://getcomposer.org/download/ 
  - caso apresente o erro git was not found in your PATH, skipping source download:
    - https://www.youtube.com/watch?v=VQSobav5qyg 
- laravel: https://laravel.com/docs/10.x/installation#your-first-laravel-project
- Visual Studio Code (VS)
- Emmet para  auxiliar na criação de código (extensão do VS)
- Node.js: https://nodejs.org/en/download 
  - https://getbootstrap.com/docs/5.0/getting-started/download/ 

## Comandos úteis

**1. cria um projeto laravel**

composer create-project laravel/laravel nome_do_projeto

composer create-project laravel/laravel hdcevents

**2. sobe o servidor**

php artisan serve

**3. sobe o servidor na porta 8000**

php artisan serve

**4. posso subir o servidor na porta que eu quiser**

php artisan serve --host=0.0.0.0 --port=8001
