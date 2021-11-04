# Projeto SIO 21/22 - Agência de viagens

### **Equipa**

| NMEC  | Name              |                   email  |
| ----- | ----------------- | -----------------------: |
| 98474 | João Reis         |       joaoreis16@ua.pt   |
| 98595 | Diogo Cruz        |         diogophc@ua.pt   |
| 98388 | Ricardo Rodriguez | ricardorodriguez@ua.pt   |
| 93310 | Gonçalo Pereira   |  pereira.goncalo@ua.pt   |

## Possíveis vulnerabilidades a explorar

* **CWE-79** Cross-site Scripting
* **CWE-89** SQL Injection
* **CWE-200** Exposure of Sensitive Information to an Unauthorized Actor
* **CWE-257** Storing Passwords in a Recoverable Format
* **CWE-259** Use of Hard-coded Password
* **CWE-321** Use of Hard-coded Cryptographic Key
* **CWE-362** Race Condition
* **CWE-434** Unrestricted Upload of File with Dangerous Type
* **CWE-476** NULL Pointer Dereference
* **CWE-601** URL Redirection to Untrusted Site ('Open Redirect')
* **CWE-798** Use of Hard-coded Credentials

## **SQL Database**

Entidades

* utilizador {*id, nome, password, mail*}
* viagem {*id, nome, preco, descricao, local, avaliacao*}

## Páginas

* Viagens (tabela de viagens, pode sofrer sql injection)
* Detalhes viagem (página especifica da viagem, pode ter comentários para fazer injeção de html/js???)
* Login (sql injection ou problemas de autenticação??, hash functions)
* Contato (injeção de html/js)

## Possíveis páginas

* Shopping cart (podemos mexer com injeção de html/js ou criptografia, pq pode ter dados bancários e isso)
Códigos de cupão (dentro da shopping cart)


* CWE-79 : Cross-site Scripting
* CWE-89 : SQL Injection
* CWE-798 : Use of Hard-coded Credentials
* CWE-434 : Unrestricted Upload of File with Dangerous Type
* CWE-601 : URL Redirection to Untrusted Site ('Open Redirect')
* CWE-259 : Use of Hard-coded Password
* CWE-476 : NULL Pointer Dereference
* CWE-257 : Storing Passwords in a Recoverable Format