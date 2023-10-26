# Continuação Laravel

## Exercícios

**1. Criando uma nova View**

- Crie uma nova view chamada paz.blade.php que exibe a mensagem "Paz no Oriente Médio!"

**2. Passando dados para uma View**

- Crie uma rota que renderize a view paz.blade.php e passe um array com dados para a view. Exiba esses dados na view.

**3. No exercício 2 crie uma array com as mensagens:** 

- "paz no Oriente Médio", "A paz é a única forma de nos sentirmos realmente humanos", "Não existe um caminho para a paz. A paz é o caminho". Sorteie uma mensagem para a rota que renderiza a view

**4. Estruturas de Controle no Blade**

- Modifique a view paz.blade.php para incluir uma estrutura de controle que verifica se uma variável chamada isUserLoggedIn é verdadeira. Se for verdadeira, exiba a mensagem "Usuário logado!", caso contrário, exiba "Usuário não logado!".

**5. Layouts e Herança**

- Crie uma nova view chamada layout.blade.php que serve como um layout base para o site. Ela deve incluir uma estrutura HTML básica com cabeçalho, rodapé e espaço para conteúdo. Em seguida, crie uma view inicio.blade.php que estende o layout e preencha o conteúdo com a mensagem "Página inicial do site".

**6. Looping no Blade**

- Crie uma nova view chamada products.blade.php e passe uma matriz de produtos para a view. Use uma estrutura de repetição para listar os nomes dos produtos na página.

**7. Formulários e Requisições**

- Crie um formulário de contato em uma view chamada contact.blade.php. Quando o formulário for enviado, crie uma rota que processe os dados do formulário e exiba uma mensagem de confirmação.

**8. Estilos e CSS**

- Adicione folhas de estilo CSS ao seu projeto Laravel e estilize suas views. Isso pode incluir a formatação do layout, estilos para os links de navegação e formatação para os elementos do formulário de contato.

**9. Utilização de Controladores**

- Crie um controlador chamado ProductController com métodos para mostrar uma lista de produtos e exibir detalhes de um produto individual. Conecte esses métodos às rotas correspondentes e crie views Blade para cada um deles.
