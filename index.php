<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário - Empresa X</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function verificarRespostas() {
            var v1 = document.querySelector('input[name="V1"]:checked').value;
            var v2 = document.querySelector('input[name="V2"]:checked');
            var v4 = document.querySelector('input[name="V4"]:checked');
            var v5 = document.querySelector('input[name="V5"]:checked');
            var v7 = document.querySelector('input[name="V7"]:checked');
            var v8 = document.querySelector('input[name="V8"]:checked');

            if (v1 == 2) {
                desativarPerguntas(['V2', 'V3', 'V4', 'V5', 'V6']);
                ativarPerguntas(['V7']);
            } else {
                ativarPerguntas(['V2']);
            }

            if (v2 && v2.value == 2) {
                desativarPerguntas(['V3', 'V4', 'V5', 'V6']);
                ativarPerguntas(['V7']);
            } else if (v1 == 1 && (!v2 || v2.value == 1)) {
                ativarPerguntas(['V3', 'V4']);
            }

            if (v4 && v4.value == 2) {
                desativarPerguntas(['V5']);
                ativarPerguntas(['V6']);
            } else if (v2 && v2.value == 1) {
                ativarPerguntas(['V5']);
            }

            if (v5 && v5.value == 1) {
                desativarPerguntas(['V6']);
                ativarPerguntas(['V8']);
            } else if (v4 && v4.value == 1) {
                ativarPerguntas(['V6']);
            }

            if (v7 && v7.value == 2) {
                desativarPerguntas(['V8', 'V9']);
                ativarPerguntas(['V10']);
            } else {
                ativarPerguntas(['V8']);
            }

            if (v8 && v8.value == 2) {
                desativarPerguntas(['V9']);
            } else if (v7 && v7.value == 1) {
                ativarPerguntas(['V9']);
            }
        }

        function desativarPerguntas(perguntas) {
            perguntas.forEach(function(pergunta) {
                var inputs = document.querySelectorAll('input[name^="' + pergunta + '"]');
                inputs.forEach(function(input) {
                    input.checked = false;
                    input.disabled = true;
                    input.classList.add("disable");
                });
            });
        }

        function ativarPerguntas(perguntas) {
            perguntas.forEach(function(pergunta) {
                var inputs = document.querySelectorAll('input[name^="' + pergunta + '"]');
                inputs.forEach(function(input) {
                    input.disabled = false;
                });
            });
        }

        window.addEventListener('load', verificarRespostas);
    </script>
</head>
<body class="bg-secondary">
    <div class="container">
    <h1 class="text-center">Questionário - Empresa X</h1>
    <form method="post" oninput="verificarRespostas()">
        <div class="bg-light mb-3 p-3 rounded">
            <p>1. Você tem telefone celular?</p>
            <input type="radio" name="V1" value="1" required> Sim<br>
            <input type="radio" name="V1" value="2" required> Não<br> 
        </div>
        <div class="bg-light mb-3 p-3 rounded">
            <p>2. O seu aparelho de celular é do tipo smartphone?</p>
            <input type="radio" name="V2" value="1" disabled> Sim<br>
            <input type="radio" name="V2" value="2" disabled> Não<br>
        </div>
        
        <div class="bg-light mb-3 p-3 rounded">
            <p>3. Você baixa aplicativos, mesmo que de vez em quando, para o seu aparelho de telefone celular?</p>
            <input type="radio" name="V3" value="1" disabled> Sim<br>
            <input type="radio" name="V3" value="2" disabled> Não<br>
            <input type="radio" name="V3" value="3" disabled> Não sabe o que são aplicativos<br>
        </div>
      

        <div class="bg-light mb-3 p-3 rounded">
            <p>4. Você sabia que a Empresa X desenvolveu um aplicativo?</p>
            <input type="radio" name="V4" value="1" disabled> Sim<br>
            <input type="radio" name="V4" value="2" disabled> Não<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>5. Você já baixou o aplicativo da Empresa X?</p>
            <input type="radio" name="V5" value="1" disabled> Sim<br>
            <input type="radio" name="V5" value="2" disabled> Não<br>
            <input type="radio" name="V5" value="3" disabled> Não sabe<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>6. Qual seria o seu interesse em baixar o aplicativo?</p>
            <input type="radio" name="V6" value="1" disabled> Nenhum interesse<br>
            <input type="radio" name="V6" value="2" disabled> Baixo<br>
            <input type="radio" name="V6" value="3" disabled> Médio<br>
            <input type="radio" name="V6" value="4" disabled> Alto interesse<br>
            <input type="radio" name="V6" value="5" disabled> Não sabe<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>7. Você acessa a Internet?</p>
            <input type="radio" name="V7" value="1" required> Sim<br>
            <input type="radio" name="V7" value="2" required> Não<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>8. Você tem conta em alguma rede social?</p>
            <input type="radio" name="V8" value="1" disabled> Sim<br>
            <input type="radio" name="V8" value="2" disabled> Não<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>9. Em quais redes sociais você tem conta?</p>
            <label><input type="checkbox" name="V9[]" value="Facebook" disabled> Facebook</label><br>
            <label><input type="checkbox" name="V9[]" value="Twitter" disabled> Twitter</label><br>
            <label><input type="checkbox" name="V9[]" value="Instagram" disabled> Instagram</label><br>
            <label><input type="checkbox" name="V9[]" value="WhatsApp" disabled> WhatsApp</label><br>
            <label><input type="checkbox" name="V9[]" value="Outra" disabled> Outra</label><br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>10. Qual é o seu nível de satisfação com a qualidade dos serviços prestados pela Empresa X?</p>
            <input type="number" name="V10" min="1" max="10" required><br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>11. Qual aspecto você considera mais importante para a sua satisfação com a Empresa X?</p>
            <input type="radio" name="V11" value="1" required> Preço<br>
            <input type="radio" name="V11" value="2" required> Rapidez do atendimento<br>
            <input type="radio" name="V11" value="3" required> Qualidade do atendimento<br>
            <input type="radio" name="V11" value="4" required> Qualidade na prestação dos serviços<br>
            <input type="radio" name="V11" value="5" required> Diversidade dos serviços oferecidos<br>
        </div>

        <div class="bg-light mb-3 p-3 rounded">
            <p>12. Qual aspecto você considera menos importante para a sua satisfação com a Empresa X?</p>
            <input type="radio" name="V12" value="1" required> Preço<br>
            <input type="radio" name="V12" value="2" required> Rapidez do atendimento<br>
            <input type="radio" name="V12" value="3" required> Qualidade do atendimento<br>
            <input type="radio" name="V12" value="4" required> Qualidade na prestação dos serviços<br>
            <input type="radio" name="V12" value="5" required> Diversidade dos serviços oferecidos<br>
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    </div>
    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innovare_virtual_v2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = $_POST['V1'];
    $v2 = isset($_POST['V2']) ? $_POST['V2'] : NULL;
    $v3 = isset($_POST['V3']) ? $_POST['V3'] : NULL;
    $v4 = isset($_POST['V4']) ? $_POST['V4'] : NULL;
    $v5 = isset($_POST['V5']) ? $_POST['V5'] : NULL;
    $v6 = isset($_POST['V6']) ? $_POST['V6'] : NULL;
    $v7 = $_POST['V7'];
    $v8 = isset($_POST['V8']) ? $_POST['V8'] : NULL;
    $v10 = $_POST['V10'];
    $v11 = $_POST['V11'];
    $v12 = $_POST['V12'];

    $v9 = isset($_POST['V9']) ? implode(',', $_POST['V9']) : NULL;

    
    $stmt = $conn->prepare("INSERT INTO questionario (v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11, $v12);

    if ($stmt->execute()) {
        echo "<script>
                alert('Respostas salvas com sucesso!');
                window.location.href = window.location.href.split('?')[0];
              </script>";
    } else {
        echo "Erro: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
