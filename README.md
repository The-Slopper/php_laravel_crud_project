# Serviço de Alunos (Laravel)

API de alunos com Laravel e Eloquent ORM.

## Metadados

| Campo | Valor |
|-------|-------|
| Linguagem | PHP 8.2 |
| Framework | Laravel 10 |
| ORM | Eloquent |
| Camada de view | Blade |
| Versão | 1.0.0 |
| Licença | MIT |
| Responsável | Equipe de Plataforma |

## Descrição

Serviço com o CRUD de alunos, busca por nome, cálculo de média e uma listagem em Blade.

## Endpoints

| Método | Rota | Descrição |
|--------|------|-----------|
| GET | `/alunos` | Lista de alunos (view Blade) |
| GET | `/alunos/{id}` | Detalhe de um aluno |
| GET | `/alunos/buscar?nome=` | Busca por nome |
| POST | `/alunos` | Cria um aluno |
| PUT | `/alunos/{id}` | Atualiza um aluno |
| DELETE | `/alunos/{id}` | Remove um aluno |
| GET | `/media` | Média das notas |

## Estrutura

```
php-laravel/
├── app/Models/Aluno.php
├── app/Http/Controllers/AlunoController.php
├── routes/web.php
├── resources/views/alunos.blade.php
└── tests/Feature/AlunoTest.php
```

## Como executar

```bash
composer install
php artisan serve
# servidor em http://localhost:8000
```

## Configuração

Conexão e variáveis em `.env`. Testes com `php artisan test` (PHPUnit).
