<form action="cadastrar.php" method="post">
    <label for="jogador"></label> Jogador:</label> <input type="text" name="jogador" id="jogador"/><br/>
    
    <label for="posicao">Posição:</label>
    <select name="posicao" id="posicao">
        <option value="Goleiro">Goleiro</option>
        <option value="Central">Central</option>
        <option value="Ala">Ala</option>
        <option value="Pivô">Pivô</option>
    </select><br><br>
    <input type="submit" value="Cadastrar">
</form>