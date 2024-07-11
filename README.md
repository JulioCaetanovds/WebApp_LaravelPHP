# Projeto Lavagem Automotiva

Este projeto foi desenvolvido por Júlio Caetano na disciplina de Tópicos Especiais em Desenvolvimento de um Software. O objetivo do projeto é gerenciar uma aplicação de lavagem automotiva, permitindo o cadastro de clientes, veículos, agendamentos e tipos de serviço.

## Estrutura do Projeto

- **app/Http/Controllers**
  - \`AgendamentoController.php\`
  - \`Auth\`
  - \`CidadeController.php\`
  - \`ClienteController.php\`
  - \`Controller.php\`
  - \`FuncionarioController.php\`
  - \`HomeController.php\`
  - \`TipoServicoController.php\`
  - \`VeiculoController.php\`

- **app/Models**
  - \`Agendamento.php\`
  - \`Cidade.php\`
  - \`Cliente.php\`
  - \`Funcionario.php\`
  - \`TipoServico.php\`
  - \`User.php\`
  - \`Veiculo.php\`

- **database/migrations**
  - \`2014_10_12_000000_create_users_table.php\`
  - \`2014_10_12_100000_create_password_resets_table.php\`
  - \`2014_10_12_100000_create_password_reset_tokens_table.php\`
  - \`2019_08_19_000000_create_failed_jobs_table.php\`
  - \`2019_12_14_000001_create_personal_access_tokens_table.php\`
  - \`2024_05_24_214110_create_clientes_table.php\`
  - \`2024_05_24_214226_create_veiculos_table.php\`
  - \`2024_06_10_225130_add_cliente_id_to_veiculos_table.php\`
  - \`2024_06_11_194416_create_funcionarios_table.php\`
  - \`2024_06_11_194426_create_cidades_table.php\`
  - \`2024_06_11_194429_create_tipo_servicos_table.php\`
  - \`2024_06_12_203747_add_cidade_id_to_clientes_table.php\`
  - \`2024_06_14_174556_update_agendamento_table_v6.php\`
  - \`2024_06_17_230323_remove_tipo_servico_from_agendamentos.php\`

- **database/seeders**
  - \`AgendamentosTableSeeder.php\`
  - \`CidadesSeeder.php\`
  - \`ClientesSeeder.php\`
  - \`ClientesTableSeeder.php\`
  - \`DatabaseSeeder.php\`
  - \`FuncionariosSeeder.php\`
  - \`TipoServicosSeeder.php\`
  - \`VeiculosSeeder.php\`
  - \`VeiculosTableSeeder.php\`

- **resources/views**
  - \`agendamentos\`
  - \`auth\`
  - \`cidades\`
  - \`clientes\`
  - \`funcionarios\`
  - \`home.blade.php\`
  - \`layouts\`
  - \`tipos-servico\`
  - \`veiculos\`
  - \`welcome.blade.php\`

- **routes/web.php**
  - \`web.php\`

- **lavagem.sql**
  - \`lavagem.sql\`

## Funcionalidades

- **Clientes**: Cadastro, edição, visualização e exclusão de clientes. Associar veículos aos clientes.
- **Veículos**: Cadastro, edição, visualização e exclusão de veículos.
- **Cidades**: Cadastro, edição, visualização e exclusão de cidades.
- **Funcionários**: Cadastro, edição, visualização e exclusão de funcionários.
- **Tipos de Serviço**: Cadastro, edição, visualização e exclusão de tipos de serviço.
- **Agendamentos**: Cadastro, edição, visualização e exclusão de agendamentos. Apenas veículos associados ao cliente selecionado são exibidos.

## Instalação

1. Clone o repositório para sua máquina local:
   \`\`\`bash
   git clone https://github.com/JulioCaetanovds/WebApp_LaravelPHP.git
   \`\`\`
2. Entre no diretório do projeto:
   \`\`\`bash
   cd nome-do-repositorio
   \`\`\`
3. Instale as dependências do Composer:
   \`\`\`bash
   composer install
   \`\`\`
4. Instale as dependências do NPM:
   \`\`\`bash
   npm install
   \`\`\`
5. Copie o arquivo \`.env.example\` para \`.env\` e configure suas variáveis de ambiente:
   \`\`\`bash
   cp .env.example .env
   \`\`\`
6. Gere a chave da aplicação:
   \`\`\`bash
   php artisan key:generate
   \`\`\`
7. Execute as migrações e seeders para criar e popular o banco de dados:
   \`\`\`bash
   php artisan migrate --seed
   \`\`\`
8. Inicie o servidor de desenvolvimento:
   \`\`\`bash
   php artisan serve
   \`\`\`

## Uso

Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

## Contribuição

Sinta-se à vontade para fazer um fork do projeto e enviar pull requests. Todas as contribuições são bem-vindas!

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).

## Contato

Júlio Caetano - [juliocaetanovds@gmail.com]
