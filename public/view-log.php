<?php
/**
 * Show Full Error Log
 * Display the complete Laravel error for debugging
 */

$basePath = dirname(__DIR__);
$logFile = $basePath . '/storage/logs/laravel.log';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Log - Sinton</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Courier New', monospace;
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: #252526;
            border-radius: 8px;
            padding: 20px;
        }
        h1 {
            color: #4ec9b0;
            margin-bottom: 20px;
            font-family: 'Segoe UI', sans-serif;
        }
        .log {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 5px;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
            line-height: 1.6;
            font-size: 13px;
        }
        .error { color: #f48771; }
        .warning { color: #dcdcaa; }
        .info { color: #4fc1ff; }
        .btn {
            background: #0e639c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px 5px 20px 0;
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Laravel Error Log</h1>
        <a href="diagnose.php" class="btn">← Back to Diagnostics</a>
        <a href="?clear=1" class="btn">🗑️ Clear Log</a>
        
        <?php
        if (isset($_GET['clear'])) {
            if (file_exists($logFile)) {
                file_put_contents($logFile, '');
                echo '<div style="background: #1e1e1e; padding: 20px; border-radius: 5px; color: #4ec9b0; margin: 20px 0;">✓ Log file cleared</div>';
            }
        }
        
        if (file_exists($logFile)) {
            $content = file_get_contents($logFile);
            
            if (empty($content)) {
                echo '<div class="log">No errors logged yet.</div>';
            } else {
                // Get last 10000 characters to see the most recent error
                $content = substr($content, -10000);
                
                // Highlight error keywords
                $content = str_replace('ERROR', '<span class="error">ERROR</span>', $content);
                $content = str_replace('Exception', '<span class="error">Exception</span>', $content);
                $content = str_replace('WARNING', '<span class="warning">WARNING</span>', $content);
                $content = str_replace('INFO', '<span class="info">INFO</span>', $content);
                
                echo '<div class="log">' . $content . '</div>';
            }
        } else {
            echo '<div class="log">Log file not found at: ' . htmlspecialchars($logFile) . '</div>';
        }
        ?>
        
        <div style="margin-top: 20px; padding: 15px; background: #1e1e1e; border-radius: 5px;">
            <strong style="color: #4ec9b0;">Quick Actions:</strong><br><br>
            <a href="clear-cache.php" class="btn">Clear Cache</a>
            <a href="diagnose.php" class="btn">Run Diagnostics</a>
            <a href="https://sinton.asia" class="btn">Test Website</a>
        </div>
    </div>
</body>
</html>
