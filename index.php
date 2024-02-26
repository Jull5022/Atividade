<!-- /////////////////  Júlio César módulo 3 turma "C" ////////////////-->   
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LVII</title>
</head>
<body>
<header>
    <div class="header">
        <h1>Atividade LVII 23/02</h1>
        </div>
    </header>
    <div class="container">

<!-- ///////////////// Questão 1 ////////////////-->
        <div class="card">
            <h2>1</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <input type="number" name="num_1" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["num_1"])) {
                $num_1 = $_POST["num_1"];
                if($num_1 >= 0){
                    $result_1 = sqrt($num_1);
                    $result_1 = number_format($result_1 , 2, ',', '');
                    $frase_1 = 'A raiz quadrada de';
                } else {
                    $result_1 = $num_1 * $num_1;
                    $frase_1 = 'O quadrado de';
                }
                
                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p> <?php echo"$frase_1 $num_1"; ?> é: </p>
                <p class="resultado"><?php echo $result_1; ?></p>
            <?php }?>
            
        </div>
<!-- /////////////////////////////////////////////////////-->

<!-- ///////////////// Questão 2 ////////////////////////-->
        
        <div class="card">
            <h2>2</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <p>A</p>
                <input type="number" name="numA_2" required>
                <p>B</p>
                <input type="number" name="numB_2" required>
                <p>C</p>
                <input type="number" name="numC_2" required>
                <p>D</p>
                <input type="number" name="numD_2" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["numA_2"])) {
                $numA_2 = $_POST["numA_2"];
                $numB_2 = $_POST["numB_2"];
                $numC_2 = $_POST["numC_2"];
                $numD_2 = $_POST["numD_2"];
                $resultMax_2 = max($numA_2,$numB_2,$numC_2,$numD_2);
                $resultMin_2 = min($numA_2,$numB_2,$numC_2,$numD_2);
                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Números Digitado: <?php echo "$numA_2, $numB_2, $numC_2, $numD_2"; ?></p>
                <p>Maior número Digitado:</p>
                <p class="resultado"><?php echo $resultMax_2; ?></p>
                <p>Menor número Digitado:</p>
                <p class="resultado"><?php echo $resultMin_2; ?></p>
            <?php }?>
            
        </div>
<!-- /////////////////////////////////////////////////////-->

<!-- ///////////////// Questão 3 ////////////////////////-->
        <div class="card">
            <h2>3</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <p>A</p>
                <input type="number" name="numA_3" required>
                <p>B</p>
                <input type="number" name="numB_3" required>
                <p>C</p>
                <input type="number" name="numC_3" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["numA_3"])) {
                $nums_3 = [$_POST["numA_3"],$_POST["numB_3"],$_POST["numC_3"]];
                arsort($nums_3);
                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Em ordem descendente:</p>
                <p class="resultado"><?php  
                foreach($nums_3 as $num_3){
                    echo $num_3 . ' ,';
                }
                 ?></p>
            <?php }?>
            
        </div>

<!-- /////////////////////////////////////////////////////-->

<!-- ///////////////// Questão 4 ////////////////////////-->
<div class="card">
            <h2>4</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <p>A</p>
                <input type="number" name="numA_4" required>
                <p>B</p>
                <input type="number" name="numB_4" required>
                <p>C</p>
                <input type="number" name="numC_4" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["numA_4"])) {
                $nums_4 = [$_POST["numA_4"],$_POST["numB_4"],$_POST["numC_4"]];
                asort($nums_4);
                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Em ordem ascendente:</p>
                <p class="resultado"><?php  
                foreach($nums_4 as $num_4){
                    echo $num_4 . ' ,';
                }
                 ?></p>
            <?php }?>
            
        </div>

<!-- /////////////////////////////////////////////////////-->

<!-- ///////////////// Questão 5 ////////////////////////-->
<div class="card">
            <h2>5</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <input type="number" name="num_5" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["num_5"])) {
                $num_5 = $_POST["num_5"];
                if($num_5 == 5){
                    $result_5 = 'O valor digitado é igual a 5';
                } elseif($num_5 == 200){
                    $result_5 = 'O valor digitado é igual a 200';
                } elseif($num_5 == 400){
                    $result_5 = 'O valor digitado é igual a 400';
                } elseif($num_5 > 500 && $num_5 < 1000){
                    $result_5 = 'O valor digitado está entre 500 e 1000';
                } else {
                    $result_5 = 'O valor inserido não é 5, 200, 400, nem está no intervalo de 500 a 1000';
                }

                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Em ordem ascendente:</p>
                <p class="resultado"><?php  echo $result_5 ;?></p>
            <?php }?>
            
        </div>



    </div>

<!-- /////////////////////////////////////////////////////-->

<!-- ///////////////// Questão 6 ////////////////////////-->
<div class="card">
            <h2>6</h2>
            <form action="index.php" method="post">
                <p>Digite um número</p>
                <input type="number" name="num_6" required>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["num_6"])) {
                $num_5 = $_POST["num_5"];
                if($num_5 == 5){
                    $result_5 = 'O valor digitado é igual a 5';
                } elseif($num_5 == 200){
                    $result_5 = 'O valor digitado é igual a 200';
                } elseif($num_5 == 400){
                    $result_5 = 'O valor digitado é igual a 400';
                } elseif($num_5 > 500 && $num_5 < 1000){
                    $result_5 = 'O valor digitado está entre 500 e 1000';
                } else {
                    $result_5 = 'O valor inserido não é 5, 200, 400, nem está no intervalo de 500 a 1000';
                }

                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Em ordem ascendente:</p>
                <p class="resultado"><?php  echo $result_5 ;?></p>
            <?php }?>
            
        </div>



    </div>

<!-- ///////////////// Questão 7 ////////////////////////-->
<div class="card">
            <h2>7</h2>
            <form action="index.php" method="post">
                
                
                <div class="nome">
                    <span>Primeira nota:</span><span>Peso:</span>
                </div>
                <div class="linha">
                    <input type="number" name="numA_7" required><input class="peso" type="number" name="pesoA" required>
                </div>
                <div class="nome">
                    <span>Segunda nota:</span><span>Peso:</span>
                </div>
                <div class="linha">
                    <input type="number" name="numB_7" required><input class="peso" type="number" name="pesoB" required>
                </div>
                <div class="nome">
                    <span>Terceira nota:</span><span>Peso:</span>
                </div>
                <div class="linha">
                    <input type="number" name="numC_7" required><input class="peso" type="number" name="pesoC" required>
                </div>
                <button>Calcular</button>
            </form>

            <?PHP
                $confirm = null;
                if (isset($_POST["numA_7"])) {
                $numA_7 = $_POST["numA_7"];
                $numB_7 = $_POST["numB_7"];
                $numC_7 = $_POST["numC_7"];
                $pesoA = $_POST["pesoA"];
                $pesoB = $_POST["pesoB"];
                $pesoC = $_POST["pesoC"];
                $media = (($numA_7 * $pesoA) + ($numB_7 * $pesoB) +($numC_7 * $pesoC)) / ($pesoA + $pesoB + $pesoC);
                $confirm = 2;
                }
            ?>

            <?php if($confirm == 2){?>
                <p>Primeira Nota: <?php  echo $numA_7 ;?></p>
                <p>Peso: <?php  echo $pesoA ;?></p>
                <p>Segunda Nota: <?php  echo $numB_7 ;?></p>
                <p>Peso: <?php  echo $pesoB ;?></p>
                <p>Terceira Nota: <?php  echo $numC_7 ;?></p>
                <p>Peso: <?php  echo $pesoC ;?></p>
                <p>A média do Aluno foi: <?php  echo $media ;?></p>
                <?php 
                    if ($media >= 7) {
                        ?><p class="resultado">Aprovado</p> <?php 
                    } else{
                        ?><p class="resultado">Reprovado</p> <?php 
                    }
                
                ?>
               
            <?php }?>
            
        </div>



    </div>
<!-- /////////////////  Júlio César módulo 3 turma "C" ////////////////-->   
</body>
</html>