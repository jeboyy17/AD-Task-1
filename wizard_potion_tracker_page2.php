<?php
$seasons = ["Spring", "Summer", "Autumn", "Winter"];
$rareIngredients = ["Mandrake Root", "Phoenix Feather", "Moon Water", "Shadow Blossom"];
$seasonRareUsed = [true, false, false, true];
$usedRareCount = 0;

echo "🌿 Rare Ingredient Usage Report:\n\n";

for ($i = 0; $i < count($seasons); $i++) {
    echo "🔎 " . $seasons[$i] . ": ";
    
    if ($seasonRareUsed[$i]) {
        echo "Used rare ingredient - " . $rareIngredients[$i] . "\n";
        $usedRareCount++;
    } else {
        echo "No rare ingredients used.\n";
    }
}

echo "\n🌈 Rare Ingredient Summary: $usedRareCount out of 4 seasons used rare ingredients.\n";

if ($usedRareCount === 4) {
    echo "🏆 Alchemist Supreme! Your mastery of rare herbs is unmatched.\n";
} elseif ($usedRareCount >= 2) {
    echo "🌟 You're on the right path to becoming a Master Alchemist.\n";
} else {
    echo "📚 Keep learning rare combinations to enhance your potions.\n";
}
?>
