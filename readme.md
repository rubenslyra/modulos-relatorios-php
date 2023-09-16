# Sistema de Geração de Relatórios em PHP

Este é um projeto de exemplo que demonstra como criar relatórios usando a biblioteca PhpSpreadsheet em PHP. O projeto inclui a geração de um arquivo XLSX com um título, cabeçalho, dados e formatação.

## Requisitos

- PHP 8.0 ou superior
- Composer (para instalação de dependências)

## Instalação

1. Clone o repositório para o seu ambiente de desenvolvimento local:

```
git clone https://github.com/rubenslyra/relatorios-php.git
```

2. Navegue até a pasta do projeto:

```
cd relatorios-php
```

3. Instale as dependências usando o Composer:

```
composer install
```

## Uso

1. Após a instalação das dependências, você pode executar o script PHP para gerar o relatório:

```
php gerar_relatorio.php
```

2. O relatório será gerado no arquivo `arquivo.xlsx` no diretório do projeto.
3. O tempo de geração, a hora de início e término da tarefa e o tamanho do arquivo gerado serão exibidos no console.

## Personalização

Você pode personalizar o conteúdo e a formatação do relatório editando o arquivo `gerar_relatorio.php`. O código está organizado em funções para facilitar a manutenção e a adição de recursos adicionais.

Além disso, você pode substituir os dados de exemplo no array `$cells` para os seus próprios dados.

## Licença

Este projeto é licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter detalhes.
