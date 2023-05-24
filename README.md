## Instruções para rodar o Projeto

Clonar o projeto:<br>
**git clone https://github.com/nilsonnegraodeveloper/alfasoft.git && cd alfasoft**

Copiar o .env.example como nosso .env principal:<br>
**cp .env.example .env**

Gerar a chave do aplicativo:<br>
**php artisan key:generate**

Rodar as migrations:<br>
**php artisan migrate**

Popular o banco com dados para teste:<br>
**php artisan db:seed**

Rodar a aplicação:<br>
**php artisan serve**

Usuário para logar:<br>
**Email: test@test.com**<br>
**Senha: 123456**

## SOBRE A ENTREGA:
**O que foi implementado:**
- Sistema para Cadastro Contatos (CRUD);
- Autenticação no Sistema com validação de Senha(pelo menos uma letra maiúscula, uma letra minúscula, um número, um caracter especial (@#$%&*()_+=) e no mínimo 8 caracteres);
- Tela de Registro, uma vez registrado já loga automático no sistema;
- Dashboard com informações do Usuário Logado;
- Soft deletes;
- Máscaras de Telefone 9 dígitos no campo contact;
- Validação dos campos com HTML5;
- DataTable para listar os contatos;
- Possibilidade de filtrar um contato (através do DataTable).

**O que não foi implementado ou ficou em andamento:**
 - Lista de contatos fora do sistema (só permitindo acessar a mesma logado); 
 - Edição dos campos unique.

**TECH STACK E DEPENDÊNCIAS:**
- PHP 7.4;
- Laravel 8.83.26;
- MySQL;
- Composer 2.3.5;
- Template Bootstrap Gentelella Admin disponível em: https://colorlib.com/wp/free-bootstrap-admin-dashboard-templates/ e https://github.com/ColorlibHQ/gentelella; 
- Bootstrap 4; 
- HTML5; 
- CSS; 
- JavaScript; 
- Jquery - Plugins: DataTables, e Mask;
