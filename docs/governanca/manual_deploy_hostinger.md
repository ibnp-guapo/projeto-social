# Manual de Operação — Esteira de CI/CD (GitHub Actions + Hostinger)

Este documento orienta a configuração e manutenção da esteira de Integração e Entrega Contínua (CI/CD) da **Escola Social de Guapó** (`social.ibnpguapo.org.br`).

---

## 1. Como Funciona a Esteira

A cada `git push` para a branch `main`:
1. **Job `test` (CI):** O GitHub inicializa um container Ubuntu com PHP 8.2, instala as dependências via Composer e roda todos os testes automatizados do **PHPUnit**.
2. **Barreira de Qualidade:** Se qualquer teste falhar, o deploy é **imediatamente abortado**, protegendo o ambiente de produção.
3. **Job `deploy` (CD):** Caso 100% dos testes sejam aprovados, o GitHub conecta via SSH no servidor da Hostinger e executa `scripts/deploy_hostinger.sh`, sincronizando a branch `main`, ajustando permissões e limpando o cache de views compiladas.

---

## 2. Configuração dos Secrets no Repositório GitHub

Para que o GitHub Actions consiga autenticar na Hostinger via SSH, é necessário cadastrar 4 segredos criptografados no GitHub:

1. Acesse o repositório no GitHub:  
   `https://github.com/ibnp-guapo/projeto-social` (ou `https://github.com/fabiooliveir/projeto-social`)
2. Vá em **Settings** > **Secrets and variables** > **Actions**.
3. Clique no botão verde **New repository secret** e adicione cada uma das seguintes chaves:

| Nome do Secret | Valor a Inserir | Descrição |
|---|---|---|
| `HOSTINGER_SSH_KEY` (ou `SSH_PRIVATE_KEY` / `SSH_KEY`) | *(Chave privada SSH)* | Pode ser configurada tanto no repositório quanto herdada do nível da **Organização** (`ibnp-guapo`). |
| `HOSTINGER_HOST` | `185.211.7.156` *(Opcional)* | IP do servidor da Hostinger (já possui fallback padrão no workflow). |
| `HOSTINGER_PORT` | `65002` *(Opcional)* | Porta SSH da Hostinger (já possui fallback padrão no workflow). |
| `HOSTINGER_USER` | `u451023057` *(Opcional)* | Usuário SSH da Hostinger (já possui fallback padrão no workflow). |

> [!NOTE]
> Como a chave privada SSH já está configurada nos Secrets da Organização (`ibnp-guapo`), a esteira herdará a autenticação automaticamente, utilizando os parâmetros de conexão padrão pré-configurados.

---

## 3. Disparo Manual de Deploy (Fallback)

Caso queira forçar uma atualização da produção sem fazer um novo commit:
1. Acesse a aba **Actions** no GitHub.
2. Clique no workflow **CI/CD - Test & Deploy to Hostinger** na barra lateral esquerda.
3. Clique em **Run workflow**, selecione a branch `main` e confirme no botão verde.

---

## 4. Deploy Manual via Terminal (Desenvolvedor)

Como o alias `Hostinger` já está configurado no seu arquivo `~/.ssh/config`, você também pode atualizar o servidor a qualquer momento diretamente pelo seu terminal local com o comando:

```bash
ssh Hostinger "bash ~/domains/social.ibnpguapo.org.br/projeto-social/scripts/deploy_hostinger.sh"
```
