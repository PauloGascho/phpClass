<?php

//cria uma váriavel e instacia a classe mysqli
//("endereço", "usuário", "senha", "bancodedados")
$conn = new mysqli("endereco","usuario","senha","banco");

//Condicional para a existência de erro e exibir o método de erro de conexão.
if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
    exit;
}

//método para preparar comando MySQL para enviar ao banco de dados:
//(..tabela(coluna1, coluna2) ..(?, ?)) -- valores serão recebidos pelos ?
$stmt = $conn->prepare("INSERT INTO tb_tabela (descoluna2, descoluna3) VALUES(?, ?)");
    
//método que insere valores aos parametros que foram preparados pelo prepare
//s para string, i para inteiro, f para float, b para blob
$stmt->bind_param("ss", $login, $pass);


//dados a serem inseridos aos parametros acima por referência
$login = "user";
$pass = "12345";

//executa o statement
$stmt->execute();

//adicionar mais itens na tabela atribuindo novos dados e instanciando o método execute
//basta repetir a tarefa de atribuição (pode ser feito um laço de repetição)
$login = "user2";
$pass = "54321";
$stmt->execute();

?>

<!--  Fazer consulta e exibição em navegador  -->

<?php

$conn = new mysqli("endereco","usuario","senha","banco");

if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
}

//atribui comando MySQL de query a uma váriavel
$result = $conn->query("SELECT * FROM tb_tabela ORDER BY descoluna1");

//laço para exibir linhas ($row) da tabela enquanto tiverem dados em cada cursor da variável $result
while ($row = $result->fetch_array()) {
    var_dump($row);
}

//fetch_assoc() retorna apenas nomes sem os indices

?>
