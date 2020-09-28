<h1>Sistema Gerenciamento de Revendas</h1>

<h2>Apresentaçao</h2>

<p>Documentação para utilização da API do Sistema de Gerenciamento de Revendas</p>

<h2>Autenticação</h2>

<p>Existem rotas publicas e privadas</p>

<h2>Rotas Públicas</h2>

<h3>Aqui será listado as rotas públicas da aplicação</h3>
<li>Criação de usuário</li>
<li>Login</li>
<li>Logout</li>
_______________________________________________________________________________________________________________________________________________
<h2>POST ../api/usuarios</h2>
<p>Cria um novo usuário no sistema</p>
<h3>Corpo request exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94474552-30355d00-01a4-11eb-99d8-eaba19f2ed2d.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94475033-e5681500-01a4-11eb-8eaf-037c5f414cb0.png)

_______________________________________________________________________________________________________________________________________________
<h2>POST ../api/login</h2>
<p> Gera um token que permite que o usuário tenha acesso as rotas privadas do sistema</p>
<h3>Corpo request exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94475790-fa917380-01a5-11eb-9535-e82bb8c8319c.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94475900-2280d700-01a6-11eb-8703-1cc65d008bb4.png)

_______________________________________________________________________________________________________________________________________________
<h2>GET ../api/logout</h2>
<p> Invalída o token em uso atual.</p>
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94476343-ba7ec080-01a6-11eb-9069-b9d63bb9fce1.png)
_______________________________________________________________________________________________________________________________________________
<h2>Rotas privadas</h2>

<h3>Aqui será listado as rotas privadas da aplicação</h3>
<li>Criação de clientes</li>
<li>Listagem de clientes</li>
<li>Mostrar um cliente especifico e seus veiculos</li>
<li>Editar cliente</li>
<li>Excluir cliente</li>
<li>Cadastrar veiculo do cliente atravez do seu id</li>
_______________________________________________________________________________________________________________________________________________
<h2>GET ../api/clientes</h2>
<p> Lista todos os clientes cadastrados pelo o usuario logado.</p>
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94478140-409c0680-01a9-11eb-967c-79329aa318f6.png)
_______________________________________________________________________________________________________________________________________________
<h2>GET ../api/clientes/{id}</h2>
<p> Mostra um cliente especifico e seus veiculos atravez do id.</p>
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94478705-02531700-01aa-11eb-8f7d-d32d5c19b646.png)
_______________________________________________________________________________________________________________________________________________
<h2>PUT ../api/clientes/{id}</h2>
<p> Editar um cliente especificado pelo seu id </p>
<h3>Corpo request exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94479155-bfde0a00-01aa-11eb-9624-ddcb89c9d770.png)
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94479207-cff5e980-01aa-11eb-8c4a-e7954cfa450d.png)
_______________________________________________________________________________________________________________________________________________
<h2>DESTROY ../api/clientes/{id}</h2>
<p> Deletar um cliente especificado pelo seu id </p>
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94479450-32e78080-01ab-11eb-926e-a8efdf552214.png)
_______________________________________________________________________________________________________________________________________________
<h2>POST ../api/veiculos</h2>
<p> Cadastra um veiculo de um cliente especifico </p>
<h3>Header</h3>
![image](https://user-images.githubusercontent.com/54003486/94476204-8c00e580-01a6-11eb-9097-2babb4cd2678.png)
<h3>Corpo request exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94480731-18aea200-01ad-11eb-81fe-1dd046b7a7d3.png)
<h3>Response exemplo</h3>
![image](https://user-images.githubusercontent.com/54003486/94480808-34b24380-01ad-11eb-8764-1e3d5b9805a9.png)
_______________________________________________________________________________________________________________________________________________





















