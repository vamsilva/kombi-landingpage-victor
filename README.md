# Kombi Landing Page 🚐

 Projeto de landing page da Kombi, desenvolvido em **Laravel** com **MySQL**.
## 🛠️ Principais ferramentas utilizadas
- ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)  
- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)  
- ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)  
- ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)  
- ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)  
- ![Sass](https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white)  
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)  
- ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)  
- ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)  
- ![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)  

## 📦 Como baixar esse projeto?
1. Clonar o repositório:
   ```bash
   git clone https://github.com/SEU-USUARIO/kombi-landingpage-victor.git
   cd kombi-landingpage-victor

2. Instalar as dependências do PHP via Composer:
    ```bash
    composer install

3. Instalar as dependências do Node.js:
    ```bash
    npm install
    npm run dev

4. Configurar o arquivo .env:
  Copiar o arquivo de exemplo:
    ```bash
    cp .env.example .env

5. Atualizar as variáveis de ambiente, principalmente:
    Arquivo .env
   
    DB_DATABASE=kombi
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

6. Gerar a chave da aplicação:
    ```bash
    php artisan key:generate

7. Rodar as migrations (se aplicável):
    ```bash
    php artisan migrate


## 🛢️ Configuração do Banco de Dados
1. Criar o banco de dados no MySQL:
    ```sql
    CREATE DATABASE kombi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


2. Importar o dump fornecido:
    ```bash
    mysql -u seu_usuario -p kombi < dump.sql


## 🚀 Execução do Projeto
1. Para rodar o servidor local do Laravel:
    ```bash
    php artisan serve

O projeto ficará disponível em:
👉 http://localhost:8000

--------------------------------------------

📝 Resumo do Desenvolvimento
Planejamento inicial
Front-end: Criação da landing page
Back-end: Estruturação da área administrativa, com área de gerenciamento do Banner e Faq. Comunicação com o banco de dados
Ajustes e testes finais, para garantir que a aplicação está funcionando

--------------------------------------------

⏱️ Tempo Gasto (Aproximado)
Front-end: 10h
Back-end: 9h
Ajustes finais: 4h00
Total aproximado: 23h







