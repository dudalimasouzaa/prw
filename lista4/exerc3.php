<!DOCTYPE html>
	<html>
	    <head>
	        <meta charset="utf-8">
	    </head>
	    <body>
	        <form method="post" name="f_estado">
	        </label>ESTADO: <select id="est" name="escEst" onchange="habilitar()">
	            <option>Selecionar...</option>
	            <option>Acre</option>
	            <option>Alagoas</option>
	            <option>Amapá</option>
	            <option>Amazonas</option>
	            <option>Bahia</option>
	            <option>Ceará</option>
	            <option>Distrito Federal</option>
	            <option>Espírito Santo</option>
	            <option>Goiás</option>
	            <option>Maranhão</option>
	            <option>Mato Grosso</option>
	            <option>Mato Grosso do Sul</option>
	            <option>Minas Gerais</option>
	            <option>Pará</option>
	            <option>Paraíba</option>
	            <option>Paraná</option>
	            <option>Pernambuco</option>
	            <option>Piauí</option>
	            <option>Rio de Janeiro</option>
	            <option>Rio Grande do Norte</option>
	            <option>Rio Grande do Sul</option>
	            <option>Rondônia</option>
	            <option>Roraima</option>
	            <option>Santa Catarina</option>
	            <option>São Paulo</option>
	            <option>Sergipe</option>
	            <option>Tocantins</option>
	        </select>
	

	        <br><br><input id="btnEnviar" type="submit" value="Enviar">
	        </form>
	

	        <br><br><p>CAPITAL: 
	        <?php
	        $est = $_POST["escEst"];
	

	        switch ($est) {
	            case "Acre": echo "RIO BRANCO"; break;
	            case "Alagoas": echo "MACEIÓ"; break;
	            case "Amapá": echo "MACAPÁ"; break;
	            case "Amazonas": echo "MANAUS"; break;
	            case "Bahia": echo "SALVADOR"; break;
	            case "Ceará": echo "FORTALEZA"; break;
	            case "Distrito Federal": echo "BRASÍLIA"; break;
	            case "Espírito Santo": echo "VITÓRIA"; break;
	            case "Goiás": echo "GOIÂNIA"; break;
	            case "Maranhão": echo "SÃO LUÍS"; break;
	            case "Mato Grosso": echo "CUIABÁ"; break;
	            case "Mato Grosso do Sul": echo "CAMPO GRANDE"; break;
	            case "Minas Gerais": echo "BELO HORIZONTE"; break;
	            case "Pará": echo "BELÉM"; break;
	            case "Paraíba": echo "JOÃO PESSOA"; break;
	            case "Paraná": echo "CURITIBA"; break;
	            case "Pernambuco": echo "RECIFE"; break;
	            case "Piauí": echo "TERESINA"; break;
	            case "Rio de Janeiro": echo "RIO DE JANEIRO"; break;
	            case "Rio Grande do Norte": echo "NATAL"; break;
	            case "Rio Grande do Sul": echo "PORTO ALEGRE"; break;
	            case "Rondônia": echo "PORTO VELHO"; break;
	            case "Roraima": echo "BOA VISTA"; break;
	            case "Santa Catarina": echo "FLORIANÓPOLIS"; break;
	            case "São Paulo": echo "SÃO PAULO"; break;
	            case "Sergipe": echo "ARACAJU"; break;
	            case "Tocantins": echo "PALMAS"; break;
	            default: echo " "; break;
	        }
	        ?>
	        </p>
	    </body>
	</html>
