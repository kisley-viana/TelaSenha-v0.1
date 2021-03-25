<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- CSS da Página -->
    <link href="/css/usuarioGuiche.css" rel="stylesheet">
    <!-- Icons Feather -->
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Usuário Guichê - TelaSenha</title>
</head>
<body onload="escondeDiv()">

    <!-- Conteúdo da Página -->
    <div class="container pagina">
        <div class="row">
            <div class="col-sm">
                <h4>Número atual:</h4>
                <div class="chamada">
                    <input id="numero" value="0"></input>
                </div>
                <br>
                <button class="btn btn-primary" onClick="proximoNumero()"><i data-feather="arrow-right"></i> Próximo número</button>&nbsp
                <button class="btn btn-warning" onClick="chamarNovamente()"><i data-feather="alert-octagon"></i> Chamar Novamente</button>
            </div>
            <div class="col-sm">
                <h4>Seu Guichê:</h4>
                <div>
                    <input class="guiche" id="guiche" value=""></input>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid formNumeros">
            <h4>Imprimir números:</h4>
            
                <label for="de">De:</label>
                <input class="form-control" id="de">
                <label for="ate">Até:</label>
                <input class="form-control" id="ate">
                <button class="btn btn-success" onclick="imprimir()"><i data-feather="printer"></i> Imprimir números</button>
            
        </div>
    </div>
    <div id="impressao" style="margin: auto;">
        
    </div>

    
    <!-- Load Feather -->
    <script>
      feather.replace()
    </script>
    
    <!-- Imprimir Números -->
    <script>
        function escondeDiv()
        {
            var div = document.getElementById('impressao').style.display = 'none';
        }
        
        function imprimir()
        {
            var de = document.getElementById('de');
            de = Number(de.value);
            var ate = document.getElementById('ate');
            ate = Number(ate.value);
            var i = Number(de);
            var valores = [ate.length];
            //console.log('valor de'+valores);
            while(i<=ate)
            {
                valores[i]='<span style="font-size:70px; border: solid; padding: 1%">'+i+'</span>'; 
                //console.log(i);
                document.getElementById('impressao').innerHTML = valores;
                i++;
            }
            var div = document.getElementById('impressao').innerHTML,
            impressao = window.open('about:blank');
            impressao.document.write(div);
            impressao.window.print();
            impressao.close();
        }
    </script>

    <!-- Valor do Guichê -->
    <script>
        var guiche = document.getElementById("guiche");
        while(guiche.value <=0)
        {
            var valor = prompt('Campo guichê está sem valor. Digite qual seu guichê:');
            //console.log(valor);
            guiche.value = valor;
        }        
    </script>

    <!-- Funções dos Botões da tela -->
    <script>
        function proximoNumero()
        {
            var numero = document.getElementById('numero');
            var calculo = Number(numero.value);
            numero.value = calculo+1;
        }
        function chamarNovamente()
        {
            var numero = document.getElementById('numero');
            var valor = Number(numero.value);
            numero.value=valor;
        }
    </script>

    <!-- Pacotes JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>