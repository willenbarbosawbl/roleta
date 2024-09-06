<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roleta</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
            position: relative;
            width: 80vw; /* 80% da largura da tela */
            height: 80vw; /* Mantém a altura proporcional à largura */
            max-width: 800px; /* Limita a largura máxima */
            max-height: 800px; /* Limita a altura máxima */
        }

        .roleta {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 10px solid #333;
            position: relative;
            background: conic-gradient(
                #ff0000 0% 8.33%, 
                #00ff00 8.33% 16.66%, 
                #0000ff 16.66% 25%, 
                #ffff00 25% 33.33%, 
                #ff00ff 33.33% 41.66%, 
                #00ffff 41.66% 50%, 
                #ff0000 50% 58.33%, 
                #00ff00 58.33% 66.66%, 
                #0000ff 66.66% 75%, 
                #ffff00 75% 83.33%, 
                #ff00ff 83.33% 91.66%, 
                #00ffff 91.66% 100%
            );
            transform-origin: center;
            position: relative;
            transition: transform 4s ease-out; /* Move a transição para o CSS */
        }

        .seta {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 30px solid #333;
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .numero {
            position: absolute;
            font-size: 24px; /* Aumenta o tamanho da fonte */
            font-weight: bold;
            color: #fff;
            width: 40px; /* Ajuste conforme necessário */
            height: 30px;
            line-height: 30px;
            text-align: center;
            transform-origin: center;
            /* Posiciona o número ao longo da borda da roleta */
            transform: rotate(calc(30deg * var(--i))) translateY(-calc(50% - 15px)) rotate(calc(-30deg * var(--i)));
        }

        .numero:nth-child(1) { --i: 0; }
        .numero:nth-child(2) { --i: 1; }
        .numero:nth-child(3) { --i: 2; }
        .numero:nth-child(4) { --i: 3; }
        .numero:nth-child(5) { --i: 4; }
        .numero:nth-child(6) { --i: 5; }
        .numero:nth-child(7) { --i: 6; }
        .numero:nth-child(8) { --i: 7; }
        .numero:nth-child(9) { --i: 8; }
        .numero:nth-child(10) { --i: 9; }
        .numero:nth-child(11) { --i: 10; }
        .numero:nth-child(12) { --i: 11; }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="seta"></div>
        <div class="roleta" id="roleta">
            <!-- Números dentro da roleta -->
            <div class="numero">1</div>
            <div class="numero">2</div>
            <div class="numero">3</div>
            <div class="numero">4</div>
            <div class="numero">5</div>
            <div class="numero">6</div>
            <div class="numero">7</div>
            <div class="numero">8</div>
            <div class="numero">9</div>
            <div class="numero">10</div>
            <div class="numero">11</div>
            <div class="numero">12</div>
        </div>
        <button onclick="girarRoleta()">Girar Roleta</button>
    </div>
    <script>
        let anguloAtual = 0;

        function girarRoleta() {
            const roleta = document.getElementById('roleta');
            const angulo = Math.floor(Math.random() * 360);
            anguloAtual += angulo + 3600; // Adiciona rotação extra para suavizar o movimento
            roleta.style.transform = `rotate(${anguloAtual}deg)`;
        }
    </script>
</body>
</html>
