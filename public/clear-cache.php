<?php
/**
 * Clear Laravel Cache
 * This script clears all Laravel cache files
 * 
 * Visit: https://sinton.asia/clear-cache.php
 */

$basePath = dirname(__DIR__);
$cleared = [];
$errors = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear Cache - Sinton</title>
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
        h1 { color: #0D5C7D; margin-bottom: 30px; }
        .result {
            padding: 15px;
            margin: 10px 0;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>🧹 Clear Laravel Cache</h1>

        <?php
        if (isset($_GET['clear'])) {
            // 1. Clear bootstrap cache
            $bootstrapCache = $basePath . '/bootstrap/cache';
            $files = glob($bootstrapCache . '/*.php');
            foreach ($files as $file) {
                if (basename($file) !== '.gitignore') {
                    if (unlink($file)) {
                        $cleared[] = "Deleted: " . basename($file);
                    } else {
                        $errors[] = "Failed to delete: " . basename($file);
                    }
                }
            }
            
            // 2. Clear storage cache
            $storageCacheDirs = [
                $basePath . '/storage/framework/cache/data',
                $basePath . '/storage/framework/views',
                $basePath . '/storage/framework/sessions'
            ];
            
            foreach ($storageCacheDirs as $dir) {
                if (is_dir($dir)) {
                    $files = glob($dir . '/*');
                    $count = 0;
                    foreach ($files as $file) {
                        if (is_file($file) && basename($file) !== '.gitignore') {
                            if (unlink($file)) {
                                $count++;
                            }
                        }
                    }
                    if ($count > 0) {
                        $cleared[] = "Cleared $count files from " . basename(dirname($dir)) . '/' . basename($dir);
                    }
                }
            }
            
            // 3. Clear logs (optional - keep last 100 lines)
            $logFile = $basePath . '/storage/logs/laravel.log';
            if (file_exists($logFile)) {
                $lines = file($logFile);
                if (count($lines) > 100) {
                    $lastLines = array_slice($lines, -100);
                    file_put_contents($logFile, implode('', $lastLines));
                    $cleared[] = "Trimmed log file (kept last 100 lines)";
                }
            }
            
            // 4. Recreate cache directories
            $dirs = [
                $basePath . '/storage/framework/cache/data',
                $basePath . '/storage/framework/views',
                $basePath . '/storage/framework/sessions',
                $basePath . '/bootstrap/cache'
            ];
            
            foreach ($dirs as $dir) {
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                    $cleared[] = "Created directory: " . str_replace($basePath, '', $dir);
                }
            }
            
            // Display results
            if (!empty($cleared)) {
                echo '<div class="result success">';
                echo '<strong>✅ Cache Cleared Successfully!</strong><br><br>';
                foreach ($cleared as $item) {
                    echo '• ' . htmlspecialchars($item) . '<br>';
                }
                echo '</div>';
            }
            
            if (!empty($errors)) {
                echo '<div class="result error">';
                echo '<strong>❌ Some Errors Occurred:</strong><br><br>';
                foreach ($errors as $error) {
                    echo '• ' . htmlspecialchars($error) . '<br>';
                }
                echo '</div>';
            }
            
            echo '<div style="margin-top: 30px; text-align: center;">';
            echo '<a href="https://sinton.asia" class="btn">🚀 Test Website Now</a>';
            echo '<a href="diagnose.php" class="btn">🔍 Run Diagnostics</a>';
            echo '</div>';
            
        } else {
            ?>
            <p style="margin-bottom: 30px;">This will clear all Laravel cache files including:</p>
            <ul style="margin-left: 20px; margin-bottom: 30px; line-height: 2;">
                <li>Bootstrap cache (config, routes, services)</li>
                <li>View cache</li>
                <li>Application cache</li>
                <li>Session files</li>
                <li>Trim error logs</li>
            </ul>
            
            <div style="text-align: center;">
                <a href="?clear=1" class="btn">🧹 Clear All Cache</a>
            </div>
            
            <div style="margin-top: 30px; padding: 20px; background: #fff3cd; border-radius: 8px; border-left: 4px solid #ffc107;">
                <strong>⚠️ Note:</strong> This is safe to run and will help fix 500 errors caused by cached configuration.
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
