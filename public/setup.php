<?php
/**
 * Sinton Group - Deployment Setup Script
 * 
 * This script installs Composer dependencies on the server.
 * 
 * IMPORTANT: Delete this file after successful installation!
 * 
 * Usage: Visit https://sinton.asia/setup.php in your browser
 */

// Set time limit to avoid timeout
set_time_limit(600); // 10 minutes
ini_set('max_execution_time', 600);
ini_set('memory_limit', '512M');

// Security: Simple password protection
define('SETUP_PASSWORD', 'sinton2026'); // Change this!

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinton Setup</title>
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
        h1 {
            color: #0D5C7D;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .subtitle {
            color: #1BA098;
            margin-bottom: 30px;
            font-size: 16px;
        }
        .status {
            background: #f5f7fa;
            border-left: 4px solid #1BA098;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            line-height: 1.8;
            max-height: 400px;
            overflow-y: auto;
        }
        .error {
            border-left-color: #e74c3c;
            background: #fee;
        }
        .success {
            border-left-color: #2ecc71;
            background: #efe;
        }
        .warning {
            border-left-color: #f39c12;
            background: #ffeaa7;
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
            transition: transform 0.3s;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .step {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .step:last-child {
            border-bottom: none;
        }
        .step-title {
            font-weight: 600;
            color: #0D5C7D;
        }
        .step-status {
            color: #1BA098;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Sinton Group Setup</h1>
        <p class="subtitle">Automated Deployment Script</p>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'] ?? '';
            
            if ($password !== SETUP_PASSWORD) {
                echo '<div class="status error">❌ <strong>Error:</strong> Invalid password!</div>';
            } else {
                echo '<div class="status">';
                echo '<div class="step"><span class="step-title">Starting setup...</span></div>';
                
                // Get the base path (one level up from public)
                $basePath = dirname(__DIR__);
                
                // Check if composer.json exists
                if (!file_exists($basePath . '/composer.json')) {
                    echo '<div class="step"><span class="step-status">❌ ERROR:</span> composer.json not found!</div>';
                    echo '<div class="step">Expected path: ' . $basePath . '/composer.json</div>';
                    echo '</div>';
                } else {
                    echo '<div class="step"><span class="step-status">✓</span> Found composer.json</div>';
                    
                    // Check if composer is available
                    $composerPath = trim(shell_exec('which composer 2>/dev/null') ?: shell_exec('where composer 2>nul'));
                    
                    if (empty($composerPath)) {
                        // Try common paths
                        $possiblePaths = [
                            '/usr/local/bin/composer',
                            '/usr/bin/composer',
                            $basePath . '/composer.phar',
                            'composer.phar'
                        ];
                        
                        foreach ($possiblePaths as $path) {
                            if (file_exists($path)) {
                                $composerPath = $path;
                                break;
                            }
                        }
                    }
                    
                    if (empty($composerPath)) {
                        echo '<div class="step"><span class="step-status">⚠️ WARNING:</span> Composer not found in PATH</div>';
                        echo '<div class="step">Attempting to download composer...</div>';
                        
                        // Set environment variables for Composer
                        putenv('HOME=' . $basePath);
                        putenv('COMPOSER_HOME=' . $basePath . '/.composer');
                        
                        // Create .composer directory
                        if (!is_dir($basePath . '/.composer')) {
                            mkdir($basePath . '/.composer', 0755, true);
                        }
                        
                        // Download composer
                        $composerSetup = file_get_contents('https://getcomposer.org/installer');
                        if ($composerSetup) {
                            file_put_contents($basePath . '/composer-setup.php', $composerSetup);
                            
                            chdir($basePath);
                            
                            // Set environment and run installer
                            $envVars = 'HOME=' . escapeshellarg($basePath) . ' COMPOSER_HOME=' . escapeshellarg($basePath . '/.composer');
                            exec($envVars . ' php composer-setup.php 2>&1', $output, $return);
                            
                            if ($return === 0 && file_exists($basePath . '/composer.phar')) {
                                echo '<div class="step"><span class="step-status">✓</span> Composer downloaded successfully</div>';
                                $composerPath = $basePath . '/composer.phar';
                                unlink($basePath . '/composer-setup.php');
                            } else {
                                echo '<div class="step"><span class="step-status">❌ ERROR:</span> Failed to download composer</div>';
                                echo '<div class="step">' . implode('<br>', $output) . '</div>';
                            }
                        }
                    } else {
                        echo '<div class="step"><span class="step-status">✓</span> Found composer: ' . $composerPath . '</div>';
                    }
                    
                    if (!empty($composerPath)) {
                        echo '<div class="step"><span class="step-title">Running composer install...</span></div>';
                        echo '<div class="step" style="color: #888; font-size: 12px;">This may take several minutes...</div>';
                        
                        // Change to project directory
                        chdir($basePath);
                        
                        // Set environment variables
                        putenv('HOME=' . $basePath);
                        putenv('COMPOSER_HOME=' . $basePath . '/.composer');
                        
                        // Create .composer directory if it doesn't exist
                        if (!is_dir($basePath . '/.composer')) {
                            mkdir($basePath . '/.composer', 0755, true);
                        }
                        
                        // Run composer install with environment variables
                        $envVars = 'HOME=' . escapeshellarg($basePath) . ' COMPOSER_HOME=' . escapeshellarg($basePath . '/.composer');
                        $command = $envVars . ' php ' . escapeshellarg($composerPath) . ' install --optimize-autoloader --no-dev --no-interaction 2>&1';
                        
                        exec($command, $output, $returnCode);
                        
                        if ($returnCode === 0) {
                            echo '<div class="step"><span class="step-status">✓</span> Composer install completed successfully!</div>';
                            
                            // Check if vendor folder was created
                            if (is_dir($basePath . '/vendor')) {
                                echo '<div class="step"><span class="step-status">✓</span> Vendor folder created</div>';
                                
                                // Set permissions
                                chmod($basePath . '/storage', 0755);
                                chmod($basePath . '/bootstrap/cache', 0755);
                                
                                echo '<div class="step"><span class="step-status">✓</span> Permissions set</div>';
                                echo '</div>';
                                
                                echo '<div class="status success">';
                                echo '<strong>🎉 Setup Complete!</strong><br><br>';
                                echo '✓ Composer dependencies installed<br>';
                                echo '✓ Vendor folder created<br>';
                                echo '✓ Permissions configured<br><br>';
                                echo '<strong>Next steps:</strong><br>';
                                echo '1. Delete this setup.php file immediately!<br>';
                                echo '2. Visit <a href="https://sinton.asia">https://sinton.asia</a><br>';
                                echo '3. Verify all pages work correctly<br>';
                                echo '</div>';
                            } else {
                                echo '<div class="step"><span class="step-status">⚠️</span> Vendor folder not found after install</div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<div class="step"><span class="step-status">❌ ERROR:</span> Composer install failed</div>';
                            echo '<div class="step">Return code: ' . $returnCode . '</div>';
                            echo '<div class="step">Output:</div>';
                            echo '<div class="step"><pre>' . htmlspecialchars(implode("\n", $output)) . '</pre></div>';
                            echo '</div>';
                        }
                    }
                }
            }
        } else {
            ?>
            <form method="POST">
                <p style="margin-bottom: 20px;">Enter the setup password to begin installation:</p>
                <input type="password" name="password" placeholder="Setup Password" required autofocus>
                <button type="submit" class="btn">🚀 Start Setup</button>
            </form>
            
            <div class="status warning" style="margin-top: 30px;">
                <strong>⚠️ Security Notice:</strong><br>
                • Default password: <code>sinton2026</code><br>
                • This script will install Composer dependencies<br>
                • <strong>DELETE this file after successful setup!</strong><br>
                • The process may take 5-10 minutes
            </div>
            
            <div class="status" style="margin-top: 20px; font-size: 13px;">
                <strong>What this script does:</strong><br>
                1. Checks for composer.json<br>
                2. Locates or downloads Composer<br>
                3. Runs: composer install --optimize-autoloader --no-dev<br>
                4. Sets correct folder permissions<br>
                5. Verifies installation
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
