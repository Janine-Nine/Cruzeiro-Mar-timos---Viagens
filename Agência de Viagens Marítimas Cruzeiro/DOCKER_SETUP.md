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
