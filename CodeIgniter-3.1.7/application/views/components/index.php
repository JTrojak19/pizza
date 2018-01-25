<html>
<body>
<div>
    <?php
    if (sizeof($components) > 0 ) {
        foreach ($components as $component):
            echo "Nazwa: " . $component->name;
            echo "<br>";
            echo "Cena: " . $component->price;
            echo "<br>";
        ?>
    <?php endforeach;}
    ?>
    <button>Dodaj Nowy Składnik</button>
</div>
</body>
</html>