# Sistema de Geração de Relatórios em PHP

Este é um projeto de exemplo que demonstra como criar relatórios usando a biblioteca PhpSpreadsheet em PHP. O projeto inclui a geração de um arquivo XLSX com um título, cabeçalho, dados e formatação.

<img width="681" alt="Captura de tela 2023-09-16 121836" src="https://github.com/rubenslyra/modulos-relatorios-php/assets/37023108/3222ac6f-9fe5-48c3-9102-08da5d535cce">

<img width="400" alt="Captura de tela 2023-09-16 115308" src="https://github.com/rubenslyra/modulos-relatorios-php/assets/37023108/6bbfd3f1-9e57-4315-ac8b-9e7b5f63c415">


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

## Estrutura de Pastas e Arquivos


<img width="194" alt="Captura de tela 2023-09-16 122021" src="https://github.com/rubenslyra/modulos-relatorios-php/assets/37023108/ebea43bc-a455-466a-af56-51d135f2cdd4">

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
