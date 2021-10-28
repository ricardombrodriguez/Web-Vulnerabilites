# Projeto Agência de viagens

## Vulnerabilidades
* login
* pesquisa
* Comentários

## SQL

Entidades
* utilizador {id, nome, password, mail}
* viagem {id, nome, preco, descricao, local, avaliacao}

## Páginas

Viagens (tabela de viagens, pode sofrer sql injection)
Detalhes viagem (página especifica da viagem, pode ter comentários para fazer injeção de html/js???)
Login (sql injection ou problemas de autenticação??, hash functions)
Contato (injeção de html/js)

## Possíveis páginas
Shopping cart (podemos mexer com injeção de html/js ou criptografia, pq pode ter dados bancários e isso)
Códigos de cupão (dentro da shopping cart)
