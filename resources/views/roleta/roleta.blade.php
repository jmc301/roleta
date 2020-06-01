<!DOCTYPE html>

<?php
	$graus = rand ( 720, 1444 ) ;
	$tempo = (5 + ( $graus / 720 ));
	$mensagem = "";

    if ($graus >= 727 && $graus <= 770) {
    	$mensagem = "Tente outra vez!";
    }
    if ($graus >= 896 && $graus <= 944) {
    	$mensagem = "Tente outra vez!";
    }
    if ($graus >= 1086 && $graus <= 1129) {
    	$mensagem = "Tente outra vez!";
    }
    if ($graus >= 1254 && $graus <= 1303) {
    	$mensagem = "Tente outra vez!";
    }

    if ($graus >= 771 && $graus <= 810) {
    	$mensagem = "Parabéns, você ganhou 10% de Desconto!";
    }
    if ($graus >= 1041 && $graus <= 1085) {
    	$mensagem = "Parabéns, você ganhou 10% de Desconto!";
    }
    if ($graus >= 1400 && $graus <= 1445) {
    	$mensagem = "Parabéns, você ganhou 10% de Desconto!";
    }
    if ($graus >= 1130 && $graus <= 1169) {
    	$mensagem = "Parabéns, você ganhou 10% de Desconto!";
    }

    if ($graus >= 811 && $graus <= 851) {
    	$mensagem = "Parabéns, você ganhou 3% de Desconto!";
    }
    if ($graus >= 995 && $graus <= 1040) {
    	$mensagem = "Parabéns, você ganhou 3% de Desconto!";
    }
    if ($graus >= 1170 && $graus <= 1211) {
    	$mensagem = "Parabéns, você ganhou 3% de Desconto!";
    }
    if ($graus >= 1353 && $graus <= 1399) {
    	$mensagem = "Parabéns, você ganhou 3% de Desconto!";
    }

    if ($graus >= 852 && $graus <= 895) {
    	$mensagem = "Parabéns, você ganhou 5% de Desconto!";
    }
    if ($graus >= 945 && $graus <= 994) {
    	$mensagem = "Parabéns, você ganhou 5% de Desconto!";
    }
    if ($graus >= 1212 && $graus <= 1254) {
    	$mensagem = "Parabéns, você ganhou 5% de Desconto!";
    }
    if ($graus >= 1304 && $graus <= 1352) {
    	$mensagem = "Parabéns, você ganhou 5% de Desconto!";
    }
?>

<head>
    <meta charset="UTF-8">
    <title>Roleta de Desconto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style type="text/css">

        .navbar {
        	z-index: 999;
        }

		.mensagem {
			  font-size: 20px;
			  animation-name: mensagem;
			  animation-duration: 5s;
			  transition: 1;			
		}

		.tamanho {
		 	width: 650px;
		 	position: relative;
		 	align-content: center;		
		 	margin-top: 1px;
		}    	

		.tamanho:hover {
			width: 670px;
			transition: 0.5s;
		}

		.rotacao {			
			animation: rotacao <?php echo $tempo . "s" ?>  1;							
			animation-fill-mode: forwards;
		}

        img.rotacao.tamanho {
        	border-radius: 40%;	
        }

		@keyframes rotacao {
		    0% {
		         transform: rotate(10deg);
		    }
		    100% {
		         transform: rotate( <?php echo $graus . "deg" ?> );
		    }
		}		

		@keyframes mensagem {
		  0% {font-size: 20px;}
		  25% {font-size: 25px;}
		  50% {font-size: 25px;}
		  75% {font-size: 20px;}
		  100% {font-size: 20px;}
		}

		.seta {
		    position: absolute;
		    left: 48.5%;
		    border-bottom: 0px solid transparent;
		    border-left: 20px solid transparent;
		    border-right: 20px solid transparent;
		    border-top: 40px solid #33c9dc;
		    width: 0;
		    height: 0;
		    z-index: 999;
		}		

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(){ 
        	$('#mensagem').hide();
            setTimeout(function() {            	
                $("#mensagem").show();
            }, <?php echo (($tempo + 1) * 1000) ?> );
        }, false);
    </script>    
</head>

<body>   
   <form action="index.php">
	   	 <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
	   	 	 <h1>Roleta de Desconto</h1>
	   	 	 <div class="mensagem" id="mensagem">
   			      <font color="blue"><?php echo $mensagem ?></font>
   		     </div>
	   	 	<!-- <button class="btn btn-primary mb-2">Meu Desconto</button> -->
	   	 </nav>

	   	 <div class="seta" align="center"></div>

		 <div align="center" class="raio">
		 	<a href="index.php">
		    	<img src="roleta.jpg" class="rotacao tamanho" title="Clique aqui para Desconto"> 
		    </a>
		 </div>        
   </form>
</body>

</html>