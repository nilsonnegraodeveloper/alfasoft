## Instruções para rodar o Projeto

Clonar o projeto:<br>
**git clone https://github.com/nilsonnegraodeveloper/simcompany.git && cd simcompany**

Copiar o .env.example como nosso .env principal:<br>
**cp .env.example .env**

Gerar a chave do aplicativo:<br>
**php artisan key:generate**

Rodar as migrations:<br>
**php artisan migrate**

Popular o banco com dados para teste:<br>
**php artisan db:seed**

Usuário para logar:<br>
**Email: teste@teste.com**<br>
**Senha: 123456**

## SOBRE A ENTREGA:
**O que foi implementado:**
- Sistema para Cadastro de contas Bancárias;
- Autenticação no Sistema com validação de Senha(pelo menos uma letra maiúscula, uma letra minúscula, um número, um caracter especial (@#$%&*()_+=) e no mínimo 8 caracteres);
- Tela de Registro, uma vez registrado já loga automático no sistema;
- Dashboard com informações do total de contas, total de saques e depositos;
- Validação do CPF com Biblioteca Validator Docs - Brasil;
- Relatórios com dompdf sem filtro;
- Só é possivel encerrar uma conta com o saldo zerado;
- Na tela de Sacar no combo só é listado as contas que tem saldo maior que zero;
- Tela de Perfil para visualizar, editar os dados (não é possível editar o CPF) e ou trocar a senha;
- Máscaras de CPF e Monetária para os campos;
- DataTable para listar as contas do usuário;
- Possibilidade de filtrar uma conta (através do DataTable);
- Utilizado o Docker na aplicação;

**O que não foi implementado ou ficou em andamento:**
 - Relatórios por período;
 - Gráfico;
 - TDD.

**TECH STACK E DEPENDÊNCIAS:**
- PHP 8.0;
- DomPdf;
- Geekcom/validator-docs 3.7;
- Laravel 8.83.26;
- PostgreSQL;
- Composer 2.3.5;
- Template Bootstrap Gentelella Admin disponível em: https://colorlib.com/wp/free-bootstrap-admin-dashboard-templates/ e https://github.com/ColorlibHQ/gentelella; 
- Bootstrap 4; 
- HTML5; 
- CSS; 
- JavaScript; 
- Jquery - Plugins: DataTables, Mask e MaskMoney;

## Sobre o teste<br>
O diferencial está em produzir as funções de maneira que surpreenda o usuário, evitando novas etapas de desenvolvimento.<br>
O prazo para entrega é de 3 dias ao receber essa mensagem.<br>
A framework utilizada deverá ser Laravel e o front pode ser feito de maneira simples ou com algum template admin.<br>
A entrega do material deverá ser enviado para o e-mail...<br>

**Sistema de conta bancária**<br>
- Construir um CRUD de cadastro para abertura de conta validando CPF e gerando número de conta automático
- Funções de exibir saldo, depositar e retirar valores (dinheiro)
- Relatório de transições ocorridas com seleção de período
- Gerar um gráfico (escolher o melhor tipo) para exibir informações sobre a conta.
- Criar utilizando framework Laravel e banco postgresql ou mysql.
- Inserir códigos em plataforma GIT e enviar o link para download.
- Utilizar o TDD para o desenvolvimento.
