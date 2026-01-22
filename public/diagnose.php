<?php
/**
 * Diagnostic Script for Sinton Group
 * Check Laravel configuration and permissions
 * 
 * Visit: https://sinton.asia/diagnose.php
 */

$basePath = dirname(__DIR__);
$errors = [];
$warnings = [];
$success = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinton Diagnostics</title>
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
            max-width: 900px;
            margin: 0 auto;
        }
        h1 { color: #0D5C7D; margin-bottom: 30px; }
        .check {
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
        .warning {
            background: #fff3cd;
            border-left-color: #ffc107;
            color: #856404;
        }
        .info {
            background: #d1ecf1;
            border-left-color: #17a2b8;
            color: #0c5460;
        }
        .code {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            font-family: monospace;
            margin: 10px 0;
            overflow-x: auto;
        }
        .btn {
            background: linear-gradient(135deg, #1BA098, #16C5B5);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Sinton Group - System Diagnostics</h1>

        <?php
        // Check 1: .env file
        if (file_exists($basePath . '/.env')) {
            $success[] = "✓ .env file exists";
            
            // Check APP_KEY
            $envContent = file_get_contents($basePath . '/.env');
            if (strpos($envContent, 'APP_KEY=base64:') !== false && strlen(trim(explode('APP_KEY=', $envContent)[1])) > 20) {
                $success[] = "✓ APP_KEY is set";
            } else {
                $errors[] = "✗ APP_KEY is missing or invalid";
            }
            
            // Check APP_DEBUG
            if (strpos($envContent, 'APP_DEBUG=true') !== false) {
                $warnings[] = "⚠ APP_DEBUG is set to true (should be false in production)";
            } else {
                $success[] = "✓ APP_DEBUG is set correctly";
            }
        } else {
            $errors[] = "✗ .env file is MISSING!";
        }

        // Check 2: Vendor folder
        if (is_dir($basePath . '/vendor')) {
            $success[] = "✓ Vendor folder exists";
        } else {
            $errors[] = "✗ Vendor folder is MISSING!";
        }

        // Check 3: Storage permissions
        $storageWritable = is_writable($basePath . '/storage');
        if ($storageWritable) {
            $success[] = "✓ Storage folder is writable";
        } else {
            $errors[] = "✗ Storage folder is NOT writable (needs 755 permissions)";
        }

        // Check 4: Bootstrap cache permissions
        $cacheWritable = is_writable($basePath . '/bootstrap/cache');
        if ($cacheWritable) {
            $success[] = "✓ Bootstrap cache is writable";
        } else {
            $errors[] = "✗ Bootstrap cache is NOT writable (needs 755 permissions)";
        }

        // Check 5: PHP version
        $phpVersion = phpversion();
        if (version_compare($phpVersion, '8.2.0', '>=')) {
            $success[] = "✓ PHP version: $phpVersion (compatible)";
        } else {
            $errors[] = "✗ PHP version: $phpVersion (Laravel 12 requires PHP 8.2+)";
        }

        // Check 6: Required PHP extensions
        $requiredExtensions = ['mbstring', 'xml', 'ctype', 'json', 'fileinfo', 'tokenizer'];
        foreach ($requiredExtensions as $ext) {
            if (extension_loaded($ext)) {
                $success[] = "✓ PHP extension '$ext' is loaded";
            } else {
                $errors[] = "✗ PHP extension '$ext' is MISSING";
            }
        }

        // Check 7: index.php
        if (file_exists(__DIR__ . '/index.php')) {
            $success[] = "✓ index.php exists in public folder";
        } else {
            $errors[] = "✗ index.php is MISSING from public folder";
        }

        // Check 8: .htaccess
        if (file_exists(__DIR__ . '/.htaccess')) {
            $success[] = "✓ .htaccess exists in public folder";
        } else {
            $warnings[] = "⚠ .htaccess is missing (may cause routing issues)";
        }

        // Check 9: Error logs
        $logFile = $basePath . '/storage/logs/laravel.log';
        $hasErrors = false;
        $lastError = '';
        
        if (file_exists($logFile)) {
            $logContent = file_get_contents($logFile);
            if (!empty($logContent)) {
                // Get last 2000 characters
                $lastError = substr($logContent, -2000);
                $hasErrors = true;
            }
        }

        // Display results
        if (!empty($errors)) {
            echo '<h2 style="color: #dc3545; margin-top: 30px;">❌ Errors Found</h2>';
            foreach ($errors as $error) {
                echo '<div class="check error">' . htmlspecialchars($error) . '</div>';
            }
        }

        if (!empty($warnings)) {
            echo '<h2 style="color: #ffc107; margin-top: 30px;">⚠️ Warnings</h2>';
            foreach ($warnings as $warning) {
                echo '<div class="check warning">' . htmlspecialchars($warning) . '</div>';
            }
        }

        if (!empty($success)) {
            echo '<h2 style="color: #28a745; margin-top: 30px;">✅ Passed Checks</h2>';
            foreach ($success as $item) {
                echo '<div class="check success">' . htmlspecialchars($item) . '</div>';
            }
        }

        // Show error log if exists
        if ($hasErrors) {
            echo '<h2 style="color: #dc3545; margin-top: 30px;">📋 Recent Error Log</h2>';
            echo '<div class="code">' . htmlspecialchars($lastError) . '</div>';
        }

        // Solutions
        if (!empty($errors)) {
            echo '<h2 style="margin-top: 30px;">🔧 Quick Fixes</h2>';
            
            if (in_array("✗ .env file is MISSING!", $errors)) {
                echo '<div class="check info">';
                echo '<strong>Fix .env file:</strong><br>';
                echo '1. In cPanel File Manager, go to: public_html/sinton.asia/web/<br>';
                echo '2. Copy .env.example to .env<br>';
                echo '3. Edit .env and add this APP_KEY:<br>';
                echo '<div class="code">APP_KEY=base64:V40Ht9ID8gXxfSswisZlnaQamQikdYDSYUXc5lzZpRh8Y=</div>';
                echo '<a href="?create_env=1" class="btn">Auto-Create .env File</a>';
                echo '</div>';
            }
            
            if (strpos(implode('', $errors), 'NOT writable') !== false) {
                echo '<div class="check info">';
                echo '<strong>Fix Permissions:</strong><br>';
                echo 'In cPanel File Manager, set these to 755:<br>';
                echo '• storage/ (and all subfolders)<br>';
                echo '• bootstrap/cache/<br>';
                echo '</div>';
            }
        }

        // Auto-create .env if requested
        if (isset($_GET['create_env']) && !file_exists($basePath . '/.env')) {
            $envExample = file_get_contents($basePath . '/.env.example');
            $envContent = str_replace(
                'APP_KEY=',
                'APP_KEY=base64:V40Ht9ID8gXxfSswisZlnaQamQikdYDSYUXc5lzZpRh8Y=',
                $envExample
            );
            $envContent = str_replace('APP_DEBUG=true', 'APP_DEBUG=false', $envContent);
            $envContent = str_replace('APP_ENV=local', 'APP_ENV=production', $envContent);
            $envContent = str_replace('APP_URL=http://localhost', 'APP_URL=https://sinton.asia', $envContent);
            
            if (file_put_contents($basePath . '/.env', $envContent)) {
                echo '<div class="check success" style="margin-top: 20px;">';
                echo '✓ .env file created successfully!<br>';
                echo '<a href="diagnose.php" class="btn">Re-run Diagnostics</a>';
                echo '</div>';
            } else {
                echo '<div class="check error" style="margin-top: 20px;">';
                echo '✗ Failed to create .env file. Please create it manually.';
                echo '</div>';
            }
        }
        ?>

        <div style="margin-top: 40px; padding: 20px; background: #f8f9fa; border-radius: 8px;">
            <strong>Next Steps:</strong><br>
            1. Fix all errors shown above<br>
            2. <a href="https://sinton.asia" class="btn">Test Website</a><br>
            3. Delete setup.php and diagnose.php after everything works
        </div>
    </div>
</body>
</html>
