# DesafioKabum

Segue abaixo os passos de inicialização desse projeto proposto pela Kabum! Em vies da minha candidatura a vaga de desenvolvedor:

1 - Clone este repositório direto na pasta onde fica seu servidor local.
2 - Inicie o seu servidor local seja ele qual for (Xampp, Lampp, Wampp... Entre outros).
3 - Rode os seguintes scripts no seu banco de dados para criar o Banco e a tabela necessária para armazenamento dos registros:

    *Primeiro* vamos criar o database: CREATE SCHEMA `desafio_kabum` ;

    *Segundo* vamos criar a tabela onde vão ser inclusos todos os cadastros: 

    CREATE TABLE `desafio_kabum2`.`cadastros` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `nome` VARCHAR(45) NOT NULL,
        `usuario` VARCHAR(45) NOT NULL,
        `senha` VARCHAR(45) NOT NULL,
        `data_nasc` DATE NOT NULL,
        `cpf` VARCHAR(45) NOT NULL,
        `rg` VARCHAR(45) NOT NULL,
        `telefone` VARCHAR(45) NOT NULL,
        `endereco` VARCHAR(45) NOT NULL,
        PRIMARY KEY (`id`));

4 - Acesse o sistema atraves do navegador pela url "localhost/desafiokabum/".
5 - Nessa tela inicial você pode optar por logar (caso já tenha um login) ou criar o seu cadastro caso não tenha (Que te levará para a tela de formulario de cadastro).
6 - Quando criar seu cadastro você será automaticamente redirecionado para a tela de login para entrar na sua nova conta.
7 - Dentro do sistema você poderá ver todos os cadastros já criados, editá-los ou exlcui-los, também adicionei uma barra de pesquisa utilizando o JS para dar uma diferenciada.
8 - Ao clicar no "lápis" ao lado do registro, você é enviado a tela de alterações, onde abrirá o formulário de cadastro com todas as informações preenchidas e você pode alterar o que quiser, e depois de alterar, é redirecionado a pagina do sistema com as informações já alteradas.
9 - Ao clicar na "lixeira" o registro é instantaneamente apagado da tabela de cadastro para sempre (cuidado).