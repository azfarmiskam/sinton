<?php
/**
 * Fix APP_KEY in .env file
 * This will update the APP_KEY with a valid encryption key
 */

$basePath = dirname(__DIR__);
$envFile = $basePath . '/.env';

// The correct APP_KEY
$correctKey = 'base64:HosfP9/C+iavblehe+94OqEq7zDRPsq5/sjSVvn1pX2Jw=';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix APP_KEY - Sinton</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0D5C7D, #1BA098);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 700px;
            width: 100%;
        }
        h1 { color: #0D5C7D; margin-bottom: 20px; }
        .result {
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            border-left: 4px solid;
        }
        .success {
            background: #d4edda;
            border-left-color: #28a745;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            border-left-color: #dc3545;
            color: #721c24;
        }
        .info {
            background: #d1ecf1;
            border-left-color: #17a2b8;
            color: #0c5460;
        }
        .btn {
            background: linear-gradient(135deg, #1BA098, #16C5B5);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px 5px;
        }
        .code {
            background: #f5f5f5;
            padding: 10px;
            border-radius: 4px;
            font-family: monospace;
            margin: 10px 0;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Fix APP_KEY Error</h1>

        <?php
        if (isset($_GET['fix'])) {
            if (file_exists($envFile)) {
                $envContent = file_get_contents($envFile);
                
                // Replace the APP_KEY line
                $pattern = '/APP_KEY=.*/';
                $replacement = 'APP_KEY=' . $correctKey;
                $newContent = preg_replace($pattern, $replacement, $envContent);
                
                if (file_put_contents($envFile, $newContent)) {
                    echo '<div class="result success">';
                    echo '<strong>✅ APP_KEY Fixed Successfully!</strong><br><br>';
                    echo 'The encryption key has been updated to a valid format.<br><br>';
                    echo '<strong>New APP_KEY:</strong><br>';
                    echo '<div class="code">' . htmlspecialchars($correctKey) . '</div>';
                    echo '</div>';
                    
                    echo '<div style="text-align: center; margin-top: 30px;">';
                    echo '<a href="https://sinton.asia" class="btn">🚀 Test Website Now</a>';
                    echo '<a href="clear-cache.php" class="btn">Clear Cache First</a>';
                    echo '</div>';
                } else {
                    echo '<div class="result error">';
                    echo '<strong>❌ Failed to update .env file</strong><br><br>';
                    echo 'Please update manually in cPanel File Manager.';
                    echo '</div>';
                }
            } else {
                echo '<div class="result error">';
                echo '<strong>❌ .env file not found!</strong><br><br>';
                echo 'Expected location: ' . htmlspecialchars($envFile);
                echo '</div>';
            }
        } else {
            ?>
            <div class="result error">
                <strong>⚠️ Error Found:</strong><br><br>
                Your APP_KEY has an incorrect format or length.<br><br>
                <strong>Error Message:</strong><br>
                <em>"Unsupported cipher or incorrect key length"</em>
            </div>

            <div class="result info">
                <strong>The Solution:</strong><br><br>
                Click the button below to automatically fix your APP_KEY with a properly formatted encryption key.
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <a href="?fix=1" class="btn">🔧 Fix APP_KEY Now</a>
            </div>

            <div style="margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 8px; font-size: 14px;">
                <strong>What this does:</strong><br>
                • Replaces the invalid APP_KEY in your .env file<br>
                • Uses a properly formatted base64-encoded 32-byte key<br>
                • Compatible with Laravel's encryption requirements<br>
                • Safe to run - only updates the APP_KEY line
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
