# In-Dog

## Descrição
In-Dog é uma plataforma desenvolvida em Laravel que ajuda donos de cães com rotinas agitadas a garantir que seus melhores amigos de quatro patas recebam a atenção e os passeios necessários. Com o In-Dog, os usuários podem agendar passeios com dog walkers confiáveis e experientes, assegurando que seus animais de estimação estejam felizes e saudáveis.

## Funcionalidades
Agendamento de Passeios: Agende passeios para seus cães de acordo com sua disponibilidade e necessidades.
Seleção de Dog Walkers: Escolha entre uma lista de dog walkers confiáveis e experientes.
Acompanhamento em Tempo Real: Acompanhe o passeio do seu cão em tempo real através de notificações e atualizações no aplicativo.
Perfil de Usuário e Cão: Crie perfis detalhados para você e seu cão, incluindo informações como raça, idade e necessidades especiais.

## Requisitos
PHP 8.x
Composer
Laravel 9.x
MySQL ou outro banco de dados suportado

## Instalação
Para configurar o projeto em seu ambiente local, siga estas etapas:

### Clone o repositório
git clone https://github.com/seu-usuario/in-dog.git

### Navegue até o diretório do projeto
cd in-dog

### Instale as dependências do Composer
composer install

### Copie o arquivo .env.example para .env
cp .env.example .env

### Configure suas variáveis de ambiente no arquivo .env, incluindo configurações do banco de dados e chaves de API

## Configuração
Após a instalação, configure o arquivo .env com as informações necessárias:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

### Outras variáveis de ambiente podem ser necessárias, como chaves de API

## Uso
Inicie o servidor local com o comando:

php artisan serve
Acesse a aplicação em http://localhost:8000.
Para interagir com a API ou outras funcionalidades, consulte a documentação interna do projeto ou as rotas disponíveis.

## Contribuição
Se você deseja contribuir para o desenvolvimento deste projeto, por favor siga estas etapas:

Faça um fork do repositório
Crie uma branch para sua feature (git checkout -b minha-feature)
Faça commit das suas alterações (git commit -am 'Adiciona nova feature')
Faça push para a branch (git push origin minha-feature)
Envie um pull request
Consulte o CONTRIBUTING.md para mais detalhes.

Licença
Este projeto está licenciado sob a MIT License. Veja o arquivo LICENSE para mais detalhes.

Autor: Giulia Goncalves , Ana Clara , Arthur Drumond , Dariene Kelly , Izadora Santiago 

