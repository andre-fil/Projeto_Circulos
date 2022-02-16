<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <nav id="navbar" >
            <ul class="menu">
                <li>Realizar cadastro</li>
                <li>lorem ipsumS</li>
                <li>Paróquisa Sto.Antônio de Pádua</li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="cadastro">
            <h3>Cadastro</h3>
      
            <form method="POST" action="envia.php">
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Informe o nome"  >
                </div>
                <div>
                    <label for="name">Data de nascimento:</label>
                   <input type="date" name="data" id="data" placeholder="Informe a data de nascimento">
                </div>
                <div>
                    <label for="name">Telefone:</label>
                   <input type="tel" name="fone" id="fone" placeholder="Informe o Nº de telefone">
                </div>
                <div>
                    <label for="name">Rua:</label>
                   <input type="text" name="rua" id="rua" placeholder="Informe a rua">
                </div>
                <div>
                    <label for="name">Bairro:</label>
                   <input type="text" name="bairro" id="bairro" placeholder="Informe o bairro">
                </div>
                <div>
                    <label for="name">Cidade:</label>
                   <input type="text" name="city" id="city" placeholder="Informe a cidade">
                </div>
                <div>
                    <label for="name">Número:</label>
                   <input type="number" name="num" id="num" placeholder="S/N">
                </div>
                <div>
                    <label for="name">Estado:</label>
                   <input type="text" name="estado" id="estado" placeholder="Informe o Estado">
                </div>
                <div>
                    <label for="cor">Cor:</label>
                    <select name="cor" id="cor">
                        <option value="vermelho">vermelho</option>
                        <option value="amarelo">amarelo</option>
                        <option value="azul">azul</option>
                        <option value="verde">verde</option>
                        <option value="laranja">laranja</option>
                        <option value="rosa">rosa</option>

                    </select>
                </div>
                    <br>
                    <input type="submit" value="Cadastrar">
               
            </form>
      


        </section>

    </main>


    <footer>

    </footer>
    
</body>
</html>