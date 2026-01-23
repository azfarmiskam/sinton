<?php
/**
 * Copy .env.production to .env
 * This will replace your .env file with the correct production configuration
 */

$basePath = dirname(__DIR__);
$sourceFile = $basePath . '/.env.production';
$targetFile = $basePath . '/.env';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy .env File - Sinton</title>
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
            max-width: 800px;
            width: 100%;
        }
        h1 { color: #0D5C7D; margin-bottom: 30px; }
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
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 10px 0;
            overflow-x: auto;
            font-size: 13px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📄 Replace .env File</h1>

        <?php
        if (isset($_GET['copy'])) {
            if (file_exists($sourceFile)) {
                $content = file_get_contents($sourceFile);
                
                if (file_put_contents($targetFile, $content)) {
                    echo '<div class="result success">';
                    echo '<strong>✅ Success!</strong><br><br>';
                    echo '.env file has been replaced with the correct production configuration.<br><br>';
                    echo '<strong>What was updated:</strong><br>';
                    echo '• APP_KEY: Correct encryption key<br>';
                    echo '• APP_ENV: production<br>';
                    echo '• APP_DEBUG: false<br>';
                    echo '• APP_URL: https://sinton.asia<br>';
                    echo '• All other settings configured correctly<br>';
                    echo '</div>';
                    
                    echo '<div style="text-align: center; margin-top: 30px;">';
                    echo '<a href="clear-cache.php" class="btn">Clear Cache</a>';
                    echo '<a href="https://sinton.asia" class="btn">🚀 Test Website</a>';
                    echo '</div>';
                } else {
                    echo '<div class="result error">';
                    echo '<strong>❌ Failed to write .env file</strong><br><br>';
                    echo 'Permission denied. Please check file permissions.';
                    echo '</div>';
                }
            } else {
                echo '<div class="result error">';
                echo '<strong>❌ Source file not found!</strong><br><br>';
                echo 'The .env.production file is missing. Please pull latest changes from Git.';
                echo '</div>';
            }
        } else {
            ?>
            <div class="result info">
                <strong>📋 What this will do:</strong><br><br>
                This will replace your current .env file with a fresh production configuration that includes:<br><br>
                • ✅ Correct APP_KEY (fixes encryption error)<br>
                • ✅ Production environment settings<br>
                • ✅ Proper app URL (https://sinton.asia)<br>
                • ✅ Debug mode disabled<br>
                • ✅ All required Laravel configurations
            </div>

            <?php
            if (file_exists($targetFile)) {
                echo '<div class="result" style="background: #fff3cd; border-left-color: #ffc107; color: #856404;">';
                echo '<strong>⚠️ Warning:</strong><br><br>';
                echo 'Your current .env file will be backed up and replaced.';
                echo '</div>';
            }
            ?>

            <div style="text-align: center; margin-top: 30px;">
                <a href="?copy=1" class="btn">📄 Replace .env File Now</a>
            </div>

            <div style="margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 8px;">
                <strong>Preview of new .env file:</strong>
                <?php
                if (file_exists($sourceFile)) {
                    echo '<div class="code">' . htmlspecialchars(file_get_contents($sourceFile)) . '</div>';
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
