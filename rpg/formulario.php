<!DOCTYPE html>
<html>
<head>
    <title>Criar Personagem</title>
</head>
<body>
    <h1>⚔️ Novo Personagem</h1>
    
    <form action="inserir.php" method="POST">
        
        <label>Nome do Herói:</label><br>
        <input type="text" name="nome_digitado" required><br><br>
        
        <label>Classe:</label><br>
        <select name="classe_escolhida">
            <option value="Guerreiro">Guerreiro</option>
            <option value="Mago">Mago</option>
            <option value="Arqueiro">Arqueiro</option>
        </select><br><br>
        
        <label>Vida Inicial:</label><br>
        <input type="number" name="vida_digitada" value="100"><br><br>
        
        <label>Mana Inicial:</label><br>
        <input type="number" name="mana_digitada" value="50"><br><br>
        
        <button type="submit">💾 Salvar no Banco</button>
    
    </form>
</body>
</html>