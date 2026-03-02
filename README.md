# 🚢 Cruzeiros & Turismo – Sistema Web de Agência de Viagens Marítimas Cruzeiros

Sistema web completo desenvolvido para simular uma agência de viagens especializada em cruzeiros marítimos internacionais.

Projeto Full Stack com frontend responsivo e backend estruturado em arquitetura MVC simplificada.

---

## 🌍 Visão Geral

O sistema permite:

- Visualizar destinos marítimos
- Selecionar pacotes exclusivos
- Realizar reservas de hospedagem
- Efetuar pagamentos
- Enviar mensagens de contato
- Registrar dados no banco MySQL

---

## 🧱 Arquitetura do Projeto

### 🎨 Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript (Vanilla JS)
- Design responsivo
- Feedback dinâmico de formulários
- Scroll suave
- Componentes interativos

### ⚙️ Backend
- PHP 8+
- MySQL
- PDO (Prepared Statements)
- MVC simplificado
- Variáveis de ambiente (.env)
- Respostas JSON

---

## 📂 Estrutura de Pastas

                ┌───────────────┐
                │   Frontend    │
                │ HTML/CSS/JS   │
                └───────┬───────┘
                        │ HTTP POST
                        ▼
                ┌───────────────┐
                │  Controller   │
                └───────┬───────┘
                        │
                        ▼
                ┌───────────────┐
                │    Model      │
                └───────┬───────┘
                        │ PDO
                        ▼
                ┌───────────────┐
                │    MySQL      │
                └───────────────┘
---

## 🗄️ Banco de Dados

Banco: `cruzeiros_turismo`

Tabelas:
- pagamentos
- contatos
- hospedagens

Importar:

---

## 🔐 Configuração do Backend

1. Instalar XAMPP ou similar
2. Criar banco MySQL
3. Configurar arquivo `.env`

4. Colocar a pasta no `htdocs`
5. Acessar pelo navegador

---

## 🔄 Fluxo de Funcionamento

1. Usuário escolhe pacote
2. Preenche formulário
3. Frontend envia requisição POST
4. Controller valida dados
5. Model salva no banco via PDO
6. Backend retorna JSON
7. Frontend exibe mensagem de sucesso

---

## 🛡️ Segurança Implementada

- Prepared Statements (anti SQL Injection)
- Sanitização de inputs
- Validação de método HTTP
- Separação de responsabilidades (MVC)
- Variáveis de ambiente

---

## 📱 Responsividade

Layout adaptado para:

- Desktop
- Tablet
- Mobile

Utilização de:
- Grid Bootstrap
- Media Queries
- Componentes responsivos

---

## 🚀 Possíveis Evoluções

- Sistema de login admin
- Dashboard administrativo
- Integração Stripe ou Mercado Pago
- API REST completa
- Dockerização
- Deploy em Cloud (Railway, Render, VPS)
- Autenticação JWT

---

## 🎯 Objetivo do Projeto

Demonstrar:

- Organização de código
- Separação frontend/backend
- Boas práticas de segurança
- Estrutura escalável
- Pensamento arquitetural

---

## 👩‍💻 Desenvolvido por

Janine  
Desenvolvedora Web Full Stack em formação  
Foco em backend, arquitetura e aplicações escaláveis

---

## 📌 Status do Projeto

✔️ Funcional  
✔️ Estruturado  
✔️ Pronto para expansão  
✔️ Ideal para portfólio técnico  

# 🚢 Cruzeiros & Turismo – Full Stack Web Application

![PHP](https://img.shields.io/badge/PHP-8.0+-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple)
![Architecture](https://img.shields.io/badge/Architecture-MVC-green)
![Status](https://img.shields.io/badge/Status-Production%20Ready-success)

Sistema Full Stack de Agência de Cruzeiros Marítimos com frontend responsivo e backend estruturado.

---

## 🌍 Demonstração

### 🏠 Página Inicial
![Home](docs/screenshots/home.png)

### 📦 Pacotes
![Pacotes](docs/screenshots/pacotes.png)

### 💳 Pagamento
![Pagamento](docs/screenshots/pagamento.png)

### 📊 Banco de Dados
![Banco](docs/screenshots/database.png)

---

## 🧱 Stack Tecnológica

### Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript (Vanilla)

### Backend
- PHP 8+
- MySQL
- PDO
- MVC Simplificado
- .env

---

## 🔄 Fluxo do Sistema

Usuário → Formulário → Controller → Model → MySQL → JSON → Feedback UI

---

## 📊 4️⃣ DIAGRAMA UML + ARQUITETURA VISUAL UML (Modelo Simplificado)

+------------------+
|  Pagamento       |
+------------------+
| id               |
| nome             |
| email            |
| destino          |
| forma_pagamento  |
| data_pagamento   |
+------------------+

+------------------+
|  Contato         |
+------------------+
| id               |
| nome             |
| email            |
| mensagem         |
| data_contato     |
+------------------+

+------------------+
|  Hospedagem      |
+------------------+
| id               |
| nome             |
| email            |
| destino          |
| data_reserva     |
+------------------+

## 🛡️ Segurança

✔ Prepared Statements  
✔ Sanitização de dados  
✔ Validação HTTP  
✔ Variáveis de ambiente  

---

## 🚀 Deploy

Pode ser hospedado em:
- Hostinger
- VPS
- Railway
- Render

---

## 👩‍💻 Desenvolvido por

Janine – Full Stack Developer 🚀

# 🐳 Setup Docker - Cruzeiros & Turismo

## Pré-requisitos
- Docker Desktop instalado e executando
- Docker Compose instalado

## Instruções de Deploy

### 1. Preparar o Ambiente

Navegar até a pasta raiz do projeto:
```bash
cd "Agência de Viagens Marítimas Cruzeiro"
```

### 2. Copiar Configuração Docker

```bash
cp .env.docker .env
```

Ou configure manualmente o arquivo `.env`:
```env
DB_HOST=db
DB_NAME=cruzeiros_turismo
DB_USER=root
DB_PASS=root
```

### 3. Iniciar os Contêineres

```bash
cd Docker
docker-compose up -d --build
```

**O que acontece:**
- O serviço `web` (PHP/Apache) inicia na porta 8080
- O serviço `db` (MySQL 8.0) inicia na porta 3306
- A BD é automaticamente criada com as tabelas do `banco.sql`

### 4. Verificar Status

```bash
docker-compose ps
```

### 5. Acessar a Aplicação

- **Frontend:** http://localhost:8080/Frontend/index.html
- **Backend (Status):** http://localhost:8080/Backend/public/index.php
- **Banco de Dados:** localhost:3306 (usuário: root, senha: root)

## Estrutura Docker

```
├── docker-compose.yml     # Orquestração dos serviços
├── Dockerfile.yml         # Definição da imagem web (PHP 8.2 + Apache)
└── mysql-data/           # Volume persistente do MySQL (criado automaticamente)
```

## Comandos Úteis

### Parar os contêineres
```bash
docker-compose down
```

### Parar e remover volumes (ATENÇÃO: deleta dados!)
```bash
docker-compose down -v
```

### Ver logs
```bash
docker-compose logs -f web
docker-compose logs -f db
```

### Acessar a BD
```bash
docker exec -it cruzeiros_db mysql -uroot -proot cruzeiros_turismo
```

### Acessar terminal do PHP
```bash
docker exec -it cruzeiros_web bash
```

## Troubleshooting

### Porta 8080 ou 3306 já em uso
Editar `docker-compose.yml` e mudar:
```yaml
ports:
  - "8888:80"      # Mude 8080 para 8888
  - "3307:3306"    # Mude 3306 para 3307
```

### Banco de dados não conecta
Verificar se o serviço MySQL está saudável:
```bash
docker-compose logs db
```

Se houver problema, reiniciar:
```bash
docker-compose restart db
```

## Testes de API

### Testar Contato
```bash
curl -X POST http://localhost:8080/Backend/public/processar_contato.php \
  -d "nome=João&email=joao@example.com&mensagem=Olá"
```

### Testar Hospedagem
```bash
curl -X POST http://localhost:8080/Backend/public/processar_hospedagem.php \
  -d "nome=Maria&email=maria@example.com&destino=Havaí&tipo_hospedagem=Cabine Luxo"
```

---
**Criado:** 2 de março de 2026
**Versão:** 1.0

