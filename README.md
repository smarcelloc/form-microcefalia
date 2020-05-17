# Formulário Microcefalia
> O projeto Microcefalia é um formulário online para cadastrar e consultar dados sobre cuidadores e portadores.

O projeto Microcefalia tem a intenção de coletar informações sobre os responsáveis das crianças portadores de microcefalia 
sobre o contidiano, alimentação, condição socio-econômico e dados pessoais. Depois de cadastrar, a ideia é gerar os gráficos 
pelo BI da Microsoft ou softwares semelhantes para tese de doutorado em Odontologia. Todavia, o projeto foi encerrado pela falta de recurso financeiro 
e não temos objetivo em retornar ativá-lo, ou seja, o software está arquivado.

O software oferece tais recursos, são: Formulário dinâmico em desativar / ativar opções conforme o preenchimento do usuário;
Proteção contra formulário falso (CSRF), SQL Injection e Cross-site scripting (XSS); Validação, máscara e higienização dos dados; 
Validação de CPF conforme o cálculo da Receita Federal; Autocompletar o endereço pelo CEP; Campo de busca pelo nome do cuidador;

![Tela principal do software, em cadastrar cuidadores e portadores](/screenshot/Principal.png)

## Instalação

### Requisitos
- Servidores compartíveis com PHP 5.6 ou superior;
- MySQL (5.1+) através dos drivers mysql, mysqli (recomendável) e pdo;
- As versões mais recentes dos navegadores. No Windows, suporta o Internet Explorer 10 / Microsoft Edge;

### Conexão do banco de dados
Por padrão o software conecta ao hostname: `localhost` e usuário: `root`, porém caso você queira conectar de outra maneira vamos em `microcefalia/app/config/database.php`.

```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'Microcefalia',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

### Tela de Login

- **Usuário:** admin
- **Senha:** Admin@123

![A tela de login](/screenshot/Login.png)

## Mais informação

### Estrutura do Projeto

|Diretório | Descrição
|----------|---------------
| App | O código dos desenvolvedores referentes a estrutura MVC, Helpers, Libraries etc |
| Kernel | O núcleo do sistema e **nunca pode ser alterado** |
| Assets | Os arquivos de front-end como css, js, imagens e outros |
| Screenshot | As telas das principais páginas do sistema (pode apagar)|

### Construído com 
#### Frameworks
- Codeigniter, Bootstrap, Jquery, Jquery Mask, Jquery Validate

#### Linguagens
- PHP, AJAX, CSS, SCSS, JS, HTML

#### Webservice de terceiros
- ViaCEP

### Alterar o usuário e senha

O recomendável é alterar os dados de usuário e senha para acessar o sistema. Para isso, vamos em `microcefalia/app/config/constants.php` 
e modificar as variáveis constantes `USUARIO` e `SENHA`.

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// LOGIN DE ACESSO
defined('USUARIO') OR define('USUARIO', strtolower('admin'));
defined('SENHA')   OR define('SENHA', password_hash('Admin@123', PASSWORD_DEFAULT));
```


### Configuração do ambiente do projeto
Você pode carregar configurações diferentes, dependendo do seu ambiente atual. De acordo como você define o seu ambiente também influencia
os registro e relatório de erros.

Isso pode ser definido pelo uso do padrão é:
- development
- testing
- production

Na raiz do projeto, vamos em `index.php` informe o ambiente que deseja executar development (Desenvolvimento), testing (Testando) e production (Produção).

```php
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production');
```

### Configuração do fuso-horário

Para isso precisamos observar todos itens importantes. O primeiro neste recurso vai afetar toda as datas e horas conforme sua escolha. 
Segundo para escolher o fuso-horário ideal ao seu sistema deve consultar a [Lista de Fusos Horários Suportados em PHP](https://www.php.net/manual/pt_BR/timezones.php)

Localiza na raiz do projeto em `index.php`:

```php
<?php
// FUSO HORÁRIO PADRÃO DO SISTEMA
date_default_timezone_set('America/Sao_Paulo');
```


## Créditos
Marcello Silvério – [smarcelloc](https://github.com/smarcelloc)

### Agrecimentos
Agradeço a FATEC Zona Sul por oferecer esta oportunidade em construir este software voluntariamente para equipe odontologia que 
possa realizar suas pesquisas de crianças portadores de microcefalia.

## Licença
A estrutura do Formulário Microcefalia é um software de código aberto licenciado sob a [licença MIT](LICENSE).

