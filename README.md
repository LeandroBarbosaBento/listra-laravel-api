# API Listra

Este projeto é uma simples API para retornar dados de carros cadastrados no sistema. 

Nele está configurado o banco de dados e uma seeder para popular o banco com alguns dados de teste. 

Foi utilizada a biblioteca _pelmered/fake-car_ para gerar dados de veículos e o faker padrão do Laravel para gerar imagens. As imagens contém apenas um fundo colorido e algumas palavras escritas. 

Também foi utilizado o SAIL do Laravel para configurar o ambiente com o docker. 


## Rodando o projeto

Rodar os comandos abaixo no terminal, na pasta raiz do projeto. 

Para subir os containers:

```bash
./vendor/bin/sail up
```

Para instalar as dependências com o composer:
```bash
./vendor/bin/sail composer install
```

Configurar os dados de conexão com o banco de dados no arquivo .ENV antes de prosseguir. 

Para rodar as migrations e criar as tabelas no banco de dados:
```bash
./vendor/bin/sail php artisan migrate
```

Para popular o banco de dados com os dados de teste
```bash
./vendor/bin/sail php artisan db:seed
```
Por padrão serão criados apenas 10 registros no banco de dados. Para criar mais 10, basta rodar o comando acima mais uma vez. 
