<?php
/**
 * Show Current .env Content
 * This will display what's actually in your .env file
 */

$basePath = dirname(__DIR__);
$envFile = $basePath . '/.env';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check .env - Sinton</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0D5C7D, #1BA098);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }
        h1 { color: #0D5C7D; margin-bottom: 30px; }
        .code {
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 20px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 20px 0;
            overflow-x: auto;
            font-size: 13px;
            line-height: 1.8;
        }
        .highlight {
            background: #ffc107;
            color: #000;
            padding: 2px 5px;
        }
        .good {
            background: #28a745;
            color: #fff;
            padding: 2px 5px;
        }
        .bad {
            background: #dc3545;
            color: #fff;
            padding: 2px 5px;
        }
        .info {
            background: #d1ecf1;
            border-left: 4px solid #17a2b8;
            color: #0c5460;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Current .env File Content</h1>

        <?php
        if (file_exists($envFile)) {
            $content = file_get_contents($envFile);
            
            // Extract APP_KEY
            preg_match('/APP_KEY=(.*)/', $content, $matches);
            $currentKey = isset($matches[1]) ? trim($matches[1]) : 'NOT FOUND';
            
            $correctKey = 'base64:HosfP9/C+iavblehe+94OqEq7zDRPsq5/sjSVvn1pX2Jw=';
            
            echo '<div class="info">';
            echo '<strong>Current APP_KEY:</strong><br>';
            echo '<code style="word-break: break-all; display: block; margin: 10px 0;">' . htmlspecialchars($currentKey) . '</code>';
            
            if ($currentKey === $correctKey) {
                echo '<span class="good">✓ CORRECT KEY!</span><br><br>';
                echo 'Your APP_KEY is correct. The error might be from cached files.';
            } else {
                echo '<span class="bad">✗ WRONG KEY!</span><br><br>';
                echo 'Your APP_KEY is still incorrect. It needs to be updated.';
            }
            echo '</div>';
            
            // Show full content with highlighting
            $displayContent = htmlspecialchars($content);
            $displayContent = str_replace(htmlspecialchars($currentKey), '<span class="highlight">' . htmlspecialchars($currentKey) . '</span>', $displayContent);
            
            echo '<h2 style="margin-top: 30px;">Full .env File:</h2>';
            echo '<div class="code">' . $displayContent . '</div>';
            
            if ($currentKey !== $correctKey) {
                echo '<div class="info" style="background: #fff3cd; border-left-color: #ffc107; color: #856404;">';
                echo '<strong>⚠️ Action Required:</strong><br><br>';
                echo '1. In cPanel File Manager, edit: <code>public_html/sinton.asia/web/.env</code><br>';
                echo '2. Find the line: <code>APP_KEY=' . htmlspecialchars($currentKey) . '</code><br>';
                echo '3. Replace it with: <code>APP_KEY=' . htmlspecialchars($correctKey) . '</code><br>';
                echo '4. Save the file<br>';
                echo '5. Clear cache and test';
                echo '</div>';
            }
            
        } else {
            echo '<div class="info" style="background: #f8d7da; border-left-color: #dc3545; color: #721c24;">';
            echo '<strong>❌ .env file not found!</strong><br><br>';
            echo 'Expected location: ' . htmlspecialchars($envFile);
            echo '</div>';
        }
        ?>

        <div style="margin-top: 40px; padding: 20px; background: #f8f9fa; border-radius: 8px;">
            <strong>The correct APP_KEY should be:</strong><br>
            <div class="code" style="margin-top: 10px; user-select: all;">base64:HosfP9/C+iavblehe+94OqEq7zDRPsq5/sjSVvn1pX2Jw=</div>
        </div>
    </div>
</body>
</html>
