API PHP ESTRUTURAL PARA ACESSAR DADOS
serviço para testar api [https://resttesttest.com/]

O que faz o sistema?
- Listar anotações
- Pegar informações de uma nota
- Inserir uma nova nota
- Atualizar uma nota
- Excluir uma nota

Banco de dados (NOTAS)
-- id
-- titulo
-- mensagem

Quais os endpoints
- (GET) /api/notas       - /api/getall.php
- (GET) /ap/nota/123     - /api/get.php?id=123
- (POST) /api/nota       - /api/insert.php [titulo,mensagem]
- (PUT) /api/nota/123    - /api/update.php [id,titulo,mensagem]
- (DELETE) /api/nota/123 - /api/delete.php [id]
