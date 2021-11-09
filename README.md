# Primeiro projeto de SIO 2021/2022

## Descrição do projeto

Com o intuito de explorar e prevenir vulnerabilidades em projetos de software, foi desenvolvida um Web site de uma agência de viagens, denominada Spoton.
Neste site é possível fazer login, caso o utilizador já tenha uma conta, caso contrário, terá que se registar. Para além disto, na página principal, é possível pesquisar sobre as várias viagens disponiveis e ver mais detalhes sobre as mesmas. Na página de detalhes, pode-se adicionar a viagem ao carrinho e fazer comentários sobre a mesma viagem. Após o utilizador escolher as viagens que pretende adquirir, passará para a compra dos mesmos, onde pode inserir códigos de desconto.
As linguagens de programação utilizadas neste projeto são em PHP (para back-end), HTML e CSS (para o front-end) e MySQL (para a base de dados). Para fazer a ligação site - base de dados utilizamos as potencialidades do Docker.

#
## Vulnerabilidades exploradas no projeto

**CWE-79**: Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting')

**CWE-89**: Improper Neutralization of Special Elements used in an SQL Command ('SQL Injection')

**CWE-256**: Plaintext Storage of a Password

**CWE-521** Weak Password Requirements

**CWE-352**: Cross-Site Request Forgery (CSRF)

**CWE-494**: Download of Code Without Integrity Check

**CWE-20**: Improper Input Validation

**CWE-200**: Exposure of Sensitive Information to an Unauthorized Actor

**CWE-184**: Incomplete List of Disallowed Inputs

**CWE-615**: Inclusion of Sensitive Information in Source Code Comments

#
## **Autores**

| NMEC  | Name              |                   email  |
| ----- | ----------------- | -----------------------: |
| 98474 | João Reis         |       joaoreis16@ua.pt   |
| 98595 | Diogo Cruz        |         diogophc@ua.pt   |
| 98388 | Ricardo Rodriguez | ricardorodriguez@ua.pt   |
| 93310 | Gonçalo Pereira   |  pereira.goncalo@ua.pt   |
