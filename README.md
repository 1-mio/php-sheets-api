# PHP Google Sheets API

## Biblioteca

Este projeto utiliza a biblioteca [google/apiclient](https://github.com/googleapis/google-api-php-client) para consumir a API do Google Sheets.

### Docs

- [Biblioteca google/apiclient no GitHub](https://github.com/googleapis/google-api-php-client)
- [Documentação da API do Google Sheets](https://developers.google.com/sheets/api)

## Pré-requisitos

- PHP 8.0 ou superior
- [Composer](https://getcomposer.org/)

## Como começar

Siga os passos abaixo para clonar o repositório e configurar o projeto em sua máquina local.

### 1. Clone o repositório

Abra um terminal e execute o seguinte comando para clonar o repositório:

```sh
git clone https://github.com/1-mio/php-sheets-api.git
```

### 2. Instale as dependências

```sh
cd php-sheets-api
composer install
```

### 3. Obtenha o arquivo KEY `credentials.json` de uma Conta de serviço previamente criada no seu projeto Google Cloud e salve neste diretorio
<br/>

### 4. Execute o projeto usando o comando abaixo:
```php
php app_sheets.php
```

# Possíveis problemas e suas soluções em rodar o script localmente

## Problema: `cURL error 60: SSL certificate problem`

Se você encontrar o seguinte erro ao executar o script:

```vbnet
cURL error 60: SSL certificate problem: unable to get local issuer certificate
```

Siga os seguintes passos para resolver o problema:

1. Baixe o arquivo `cacert.pem` do site do [cURL](https://curl.se/docs/caextract.html);
2. Mova o arquivo `cacert.pem` para um diretório seguro em sua máquina;
3. Abra o arquivo `php.ini` do seu ambiente PHP;
4. Adicione ou atualize a seguinte linha:

```arduino
curl.cainfo = "your-path/to/cacert.pem"
```

5. Substitua "your-path/to/cacert.pem" pelo caminho real do arquivo `cacert.pem` em sua máquina.
