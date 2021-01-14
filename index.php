<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Naturreservatet</title>
</head>
<body>
    <h1>NATURRESERVATET WIE</h1>
    <h3>Ange önskat antal för respektive djur</h3>

    <form action="./result.php" method="post">
        <label for="monkeyQty" id="monkey">Apa</label> <br>
        <input placeholder="antal apa" type="text" name="monkey"> <br>
        <label for="qiraffeQty" id="giraffe">Giraff</label> <br>
        <input placeholder="antal giraff" type="text" name="giraffe"> <br>
        <label for="tigerQty" id="tiger">Tiger</label> <br>
        <input placeholder="antal tiger" type="text" name="tiger"> <br>
        <label for="coconutQty" id="coconut">Kokosnöt</label> <br>
        <input placeholder="antal kokosnöt" type="text" name="coconut"> <br><br>
        

        <button type="submit">Spara</button>
        <button type="reset">Reset</button>
    </form>
    
    
</body>
</html>