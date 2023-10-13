
# Projeto Pizzaria

## Visão Geral

Este é um projeto de pizzaria desenvolvido em PHP, HTML, CSS e MySQL para o banco de dados. O servidor local é configurado com o XAMPP.

## Pré-requisitos

- XAMPP instalado.
- Navegador da web.
- MySQL Workbench ou outra ferramenta de gerenciamento de banco de dados.

## Configuração

1. Clone ou baixe o repositório para o seu ambiente local.
2. Configure o XAMPP para iniciar o servidor Apache e MySQL.
3. Importe o arquivo de banco de dados fornecido (Pizzaria_do_João-SQL.sql) para o MySQL Workbench.
4. Configure a conexão com o banco de dados no arquivo `conn.php`. Altere as credenciais conforme necessário:

   Exemplo:
   ```php
   $host = "localhost";
   $usuario = "seu_usuario";
   $senha = "sua_senha";
   $banco = "pizzaria_db";
   ```

5. Abra o navegador e acesse `http://localhost/(nome do seu projeto)` para iniciar a aplicação.

## Funcionalidades

### Cadastro de Pizzas

Os clientes podem fazer pedidos de pizza online, escolhendo entre as seguintes opções:

- Borda: Cheddar ou Catupiry.
- Massa: Comum, temperada e integral.
- Sabores (máximo 3): 4 Queijos, Frango com Catupiry e outros sabores.

### Gestão de Pedidos

A equipe da pizzaria pode visualizar os pedidos feitos pelos clientes e marcá-los com os seguintes status:

- Em produção.
- Em entrega.
- Concluído.

## Estrutura de Arquivos

- `CSS.php`: Página de estilização do PHP.
- `img.php`: Imagens do projeto.
- `Process`: Backend do projeto
  - `conn`: Conexão com o banco de dados.
  - `Orders`: Backend de pedidos, permite atualizar e excluir pedidos.
  - `pizza`: Backend de cadastro de pizzas.
- `dashboard.php`: Página que exibe os pedidos.
- `index.php`: Página inicial, cadastro de pizzas.
- `header.php`: Cabeçalho do projeto.
- `footer.php`: Rodapé do projeto.
- `Pizzaria_do_João-SQL.sql`: Arquivo SQL para importação no MySQL Workbench.

## Contribuindo

Sinta-se à vontade para contribuir para este projeto. Você pode criar novos recursos, resolver problemas ou melhorar a documentação. Basta criar um fork deste repositório, fazer suas alterações e enviar um pull request.

## Autores

- Matheus Battisti
- Daniel Pedro Araujo Pereira (Desenvolvedor Web - Front-End)

## Agradecimentos

Agradecemos a todas as pessoas e recursos que ajudaram na criação deste projeto. Isso deve fornecer uma visão geral do seu projeto de pizzaria em PHP e ajudar os desenvolvedores a configurar e entender como funciona. Certifique-se de adaptar o README com informações específicas ao seu projeto.
```