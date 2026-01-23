<?php
/**
 * Nuclear Option - Complete Laravel Reset
 * This will forcefully rebuild everything
 */

$basePath = dirname(__DIR__);

// Force delete all cache
function deleteDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) return false;
    }
    return rmdir($dir);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Nuclear Reset - Sinton</title>
    <style>
        body { font-family: monospace; background: #000; color: #0f0; padding: 20px; }
        .output { background: #111; padding: 20px; border: 1px solid #0f0; margin: 10px 0; }
        .error { color: #f00; }
        .success { color: #0f0; }
        .warning { color: #ff0; }
    </style>
</head>
<body>
    <h1>🔥 NUCLEAR RESET - COMPLETE CACHE WIPE</h1>
    
    <?php
    if (isset($_GET['execute'])) {
        echo '<div class="output">';
        
        $steps = [];
        
        // Step 1: Delete bootstrap cache
        $bootstrapCache = $basePath . '/bootstrap/cache';
        foreach (glob($bootstrapCache . '/*.php') as $file) {
            if (basename($file) !== '.gitignore') {
                if (unlink($file)) {
                    $steps[] = ['success', 'Deleted: ' . basename($file)];
                }
            }
        }
        
        // Step 2: Delete storage caches
        $cacheDirs = [
            '/storage/framework/cache',
            '/storage/framework/views',
            '/storage/framework/sessions',
        ];
        
        foreach ($cacheDirs as $dir) {
            $fullPath = $basePath . $dir;
            if (is_dir($fullPath)) {
                $files = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator($fullPath, RecursiveDirectoryIterator::SKIP_DOTS),
                    RecursiveIteratorIterator::CHILD_FIRST
                );
                
                foreach ($files as $file) {
                    if ($file->getFilename() !== '.gitignore') {
                        if ($file->isDir()) {
                            @rmdir($file->getRealPath());
                        } else {
                            @unlink($file->getRealPath());
                        }
                    }
                }
                $steps[] = ['success', 'Cleared: ' . $dir];
            }
        }
        
        // Step 3: Clear logs
        $logFile = $basePath . '/storage/logs/laravel.log';
        if (file_exists($logFile)) {
            file_put_contents($logFile, '');
            $steps[] = ['success', 'Cleared error logs'];
        }
        
        // Step 4: Try to run artisan commands via PHP
        chdir($basePath);
        
        // Clear config cache
        $output = [];
        exec('php artisan config:clear 2>&1', $output, $return);
        if ($return === 0) {
            $steps[] = ['success', 'Artisan: config:clear'];
        } else {
            $steps[] = ['warning', 'Artisan config:clear failed: ' . implode(' ', $output)];
        }
        
        // Clear route cache
        $output = [];
        exec('php artisan route:clear 2>&1', $output, $return);
        if ($return === 0) {
            $steps[] = ['success', 'Artisan: route:clear'];
        }
        
        // Clear view cache
        $output = [];
        exec('php artisan view:clear 2>&1', $output, $return);
        if ($return === 0) {
            $steps[] = ['success', 'Artisan: view:clear'];
        }
        
        // Display results
        foreach ($steps as $step) {
            $class = $step[0];
            $message = $step[1];
            echo "<div class='$class'>[$class] $message</div>";
        }
        
        echo '</div>';
        
        echo '<div class="output success">';
        echo '<h2>✅ RESET COMPLETE</h2>';
        echo '<p>All caches have been forcefully cleared.</p>';
        echo '<p><a href="https://sinton.asia" style="color: #0f0;">TEST WEBSITE NOW</a></p>';
        echo '</div>';
        
        echo '<div class="output warning">';
        echo '<h3>If still getting 500 error, the problem might be:</h3>';
        echo '<p>1. PHP 8.4 compatibility issue (try switching to PHP 8.3 or 8.2 in cPanel)</p>';
        echo '<p>2. Missing PHP extensions</p>';
        echo '<p>3. Server configuration issue</p>';
        echo '<p><a href="check-php.php" style="color: #ff0;">Check PHP Configuration</a></p>';
        echo '</div>';
        
    } else {
        ?>
        <div class="output warning">
            <h2>⚠️ WARNING</h2>
            <p>This will FORCEFULLY delete:</p>
            <ul>
                <li>All bootstrap cache files</li>
                <li>All storage cache files</li>
                <li>All view cache files</li>
                <li>All session files</li>
                <li>All error logs</li>
            </ul>
            <p>And attempt to run Laravel artisan commands to rebuild caches.</p>
            <p><a href="?execute=1" style="color: #f00; font-size: 20px; font-weight: bold;">EXECUTE NUCLEAR RESET</a></p>
        </div>
        <?php
    }
    ?>
</body>
</html>
