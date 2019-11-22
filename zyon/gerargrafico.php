<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos_home.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <a href="logout.php">Fazer logout</a>
            <h1>Seja bem-vindo ao ZYON, a sua plataforma de aprendizado</h1>
        </div>
        <br><br>
        <nav id="menu">
            <ul>
                <li><a href="pagina_inicial.php">Home</a></li>
                <li><a href="#">Exercícios</a></li>
                <li><a href="gerargrafico.php">Gerador de gráficos</a></li>
                <li><a href="#">Ranking</a></li>
                <li><a href="meus-dados.php">Meus dados</a></li>
                <li><a href="info.php">Informações</a></li>
            </ul>
        </nav>
        <div class="contesquerda">
            <p>Criado por Cassiano Rafael, Gabriel Fazion e Nicolas Oliveira</p>
        </div>
        <div class="conteudo"><br>

            <div class="chartjs">
                <canvas id="myChart" width="400" height="400"></canvas>
                <scrip src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></scrip>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });

                </script>
            </div>
            <br><br>
        </div>
        <div class="rodape">
            <center>
                <p>Instituto Federal de São Paulo - Campus Campos do Jordão. Todos os direitos reservados.</p>
            </center>
        </div>
    </div>

</body>
