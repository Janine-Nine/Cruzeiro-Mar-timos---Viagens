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
