<?php
// List of adjectives
$adjectives = [
    'Epic', 'Golden', 'Mysterious', 'Witty', 'Fearless', 'Electric', 'Ancient', 'Funky', 'Savage', 'Silent'
];

// List of nouns
$nouns = [
    'Wolves', 'Squad', 'Alliance', 'Crew', 'Legends', 'Circle', 'Society', 'Order', 'Squadron', 'League'
];

// Generate random name
$adjective = $adjectives[array_rand($adjectives)];
$noun = $nouns[array_rand($nouns)];
$clubName = "$adjective $noun";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Club Name Generator</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f3f3f3;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 80px;
        }

        h1 {
            color: #222;
        }

        .name {
            font-size: 2em;
            margin: 30px 0;
            color: #4CAF50;
        }

        button {
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 50px;
            font-size: 0.8em;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>🔮 Random Club Name Generator</h1>
    <div class="name"><?= htmlspecialchars($clubName) ?></div>
    <form method="post">
        <button type="submit">Generate Another</button>
    </form>
    <footer>
        Made with PHP • <?= date("Y") ?>
    </footer>
</body>
</html>
