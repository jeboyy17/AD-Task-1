<?php
$wizardName = "Eldrin the Wise";
$seasons = ["Spring", "Summer", "Autumn", "Winter"];
$potionsPerSeason = [5, 8, 3, 6];
$totalPotions = 0;

echo "🌟 Welcome, $wizardName!\n";
echo "📜 Potion Brewing Report by Season:\n\n";

for ($i = 0; $i < count($seasons); $i++) {
    echo "🔮 " . $seasons[$i] . " - Potions brewed: " . $potionsPerSeason[$i] . "\n";
    $totalPotions += $potionsPerSeason[$i];
}

echo "\n🧪 Total Potions Brewed: $totalPotions\n";

if ($totalPotions >= 20) {
    echo "🎉 Excellent work, $wizardName! You are ready for the Grand Alchemy Fair!\n";
} elseif ($totalPotions >= 10) {
    echo "👍 Good effort! You can improve next season.\n";
} else {
    echo "⚠️ Not enough potions. Study the scrolls and brew more!\n";
}
?>