# 🌱 Código Aberto

**Uma nova experiência para desenvolvedores iniciantes e ONGs!**

Código Aberto é uma plataforma web que conecta desenvolvedores iniciantes a projetos voluntários, oferecendo experiência prática, networking e portfólio, ao mesmo tempo que ajuda organizações sociais a digitalizarem seus processos.

> *"A melhor forma de encontrar a si mesmo é se perder servindo aos outros."*  
> — Mahatma Gandhi

---

## 🚀 Objetivo

Facilitar a entrada de novos desenvolvedores no mercado de tecnologia ao mesmo tempo que impactamos positivamente causas sociais. A proposta une o útil ao necessário: quem precisa de experiência colabora com quem precisa de ajuda.

---

## 🧩 Problemas Identificados

- Falta de experiência prática para novos devs  
- Poucas oportunidades de networking  
- Acesso limitado a recursos tecnológicos  
- Dificuldade das ONGs em digitalizar processos  

---

## 💡 Nossa Solução

- Projetos reais para enriquecer o portfólio  
- Colaboração e conexões na área tech  
- Impacto social ampliado com tecnologia  
- Sistema de **match inteligente** entre devs e ONGs  

---

## 🛠️ Arquitetura do Projeto

- **Frontend**: Blade  
- **Backend**: Laravel  
- **Banco de Dados**: MySQL  

🔗 [Sitemap do Projeto](https://octopus.do/6lxv2i8ahcx)

---

## 🧪 Instruções de Instalação

Siga os passos abaixo para rodar o projeto localmente:

### Pré-requisitos

- PHP 8.1+  
- Composer  
- MySQL  
- Node.js e NPM (para assets)

### Passo a passo

1. **Clone o repositório**

```bash
git clone https://github.com/gpelincel/codigo-aberto.git
cd codigo-aberto
```

2. **Instale as dependências PHP**

```bash
composer install
```

3. **Configure o ambiente**

```bash
cp .env.example .env
```

Edite o arquivo `.env` com as configurações do seu banco de dados e outras variáveis necessárias.

4. **Gere a chave da aplicação**

```bash
php artisan key:generate
```

5. **Crie o banco de dados e rode as migrations**

```bash
php artisan migrate
```

6. **(Opcional) Popule o banco com dados iniciais**

```bash
php artisan db:seed
```

7. **Compile os assets do frontend**

```bash
npm install
npm run dev
```

8. **Inicie o servidor de desenvolvimento**

```bash
php artisan serve
```

Acesse: `http://localhost:8000`

---

## 🛠️ Ferramentas Utilizadas

- **Figma**: Prototipação colaborativa  
- **Trello**: Gestão de tarefas com metodologia Kanban  

---

## 👨‍💻 Equipe

- Felipe Matias  
- Gabriel Pelincel  
- Jorge Henrique  
- Pedro Henrique Santana  
- Yan Pansanato  

---

## 📜 Licença

Este projeto está sob a licença [MIT](LICENSE).