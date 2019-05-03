<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		table{
			width:300px;
			margin:auto;
			background-color:rgba(255,255,204,1);
			border:2px solid rgba(255,0,0,1);
			padding:5px;			
		}
		
		td{
			text-align:center;
		}
		
		
		</style>
        
    </head>

    <body>
    
    	<form action="pagina_busqueda_pdo.php" method="post">
        <table><tr><td>
        	Seccion </td><td><input type="text" name="seccion"></td></tr>
            <tr><td>p origen </td><td> <input type="text" name="p_origen"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviando" value="Dale">
        </td></tr></table>
        </form>
    
    
    </body>
</html>