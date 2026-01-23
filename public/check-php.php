<?php
/**
 * Check PHP Configuration
 * Identify if there's a PHP compatibility issue
 */

$basePath = dirname(__DIR__);
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Check - Sinton</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; }
        .good { color: green; font-weight: bold; }
        .bad { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #0D5C7D; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 PHP Configuration Check</h1>
        
        <h2>PHP Version</h2>
        <table>
            <tr>
                <th>Setting</th>
                <th>Value</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>PHP Version</td>
                <td><?php echo PHP_VERSION; ?></td>
                <td><?php echo version_compare(PHP_VERSION, '8.2.0', '>=') ? '<span class="good">✓ Compatible</span>' : '<span class="bad">✗ Too Old</span>'; ?></td>
            </tr>
            <tr>
                <td>PHP 8.4 Warning</td>
                <td><?php echo version_compare(PHP_VERSION, '8.4.0', '>=') ? 'YES - Using PHP 8.4' : 'No'; ?></td>
                <td><?php echo version_compare(PHP_VERSION, '8.4.0', '>=') ? '<span class="warning">⚠️ Laravel 12 is tested on 8.2-8.3</span>' : '<span class="good">✓ OK</span>'; ?></td>
            </tr>
        </table>

        <h2>Required PHP Extensions</h2>
        <table>
            <tr>
                <th>Extension</th>
                <th>Status</th>
            </tr>
            <?php
            $required = ['openssl', 'pdo', 'mbstring', 'tokenizer', 'xml', 'ctype', 'json', 'bcmath', 'fileinfo'];
            foreach ($required as $ext) {
                $loaded = extension_loaded($ext);
                echo '<tr>';
                echo '<td>' . $ext . '</td>';
                echo '<td>' . ($loaded ? '<span class="good">✓ Loaded</span>' : '<span class="bad">✗ Missing</span>') . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

        <h2>Encryption Test</h2>
        <?php
        try {
            $key = 'base64:HosfP9/C+iavblehe+94OqEq7zDRPsq5/sjSVvn1pX2Jw=';
            $keyDecoded = base64_decode(substr($key, 7));
            
            echo '<table>';
            echo '<tr><td>Key Length</td><td>' . strlen($keyDecoded) . ' bytes</td><td>';
            if (strlen($keyDecoded) === 32) {
                echo '<span class="good">✓ Correct (32 bytes)</span>';
            } else {
                echo '<span class="bad">✗ Wrong length</span>';
            }
            echo '</td></tr>';
            
            // Try to create encrypter
            if (class_exists('Illuminate\Encryption\Encrypter')) {
                try {
                    $encrypter = new Illuminate\Encryption\Encrypter($keyDecoded, 'aes-256-cbc');
                    echo '<tr><td>Encrypter Test</td><td>Created successfully</td><td><span class="good">✓ Works</span></td></tr>';
                } catch (Exception $e) {
                    echo '<tr><td>Encrypter Test</td><td>' . $e->getMessage() . '</td><td><span class="bad">✗ Failed</span></td></tr>';
                }
            }
            echo '</table>';
            
        } catch (Exception $e) {
            echo '<p class="bad">Error: ' . $e->getMessage() . '</p>';
        }
        ?>

        <h2>File Permissions</h2>
        <table>
            <tr>
                <th>Path</th>
                <th>Writable</th>
            </tr>
            <?php
            $paths = [
                '/storage' => $basePath . '/storage',
                '/storage/logs' => $basePath . '/storage/logs',
                '/storage/framework' => $basePath . '/storage/framework',
                '/bootstrap/cache' => $basePath . '/bootstrap/cache',
            ];
            
            foreach ($paths as $label => $path) {
                $writable = is_writable($path);
                echo '<tr>';
                echo '<td>' . $label . '</td>';
                echo '<td>' . ($writable ? '<span class="good">✓ Writable</span>' : '<span class="bad">✗ Not Writable</span>') . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

        <h2>Recommendation</h2>
        <?php
        if (version_compare(PHP_VERSION, '8.4.0', '>=')) {
            echo '<div style="background: #fff3cd; padding: 20px; border-radius: 5px; border-left: 4px solid #ffc107;">';
            echo '<h3 style="color: #856404;">⚠️ PHP 8.4 Detected</h3>';
            echo '<p><strong>Action Required:</strong> Switch to PHP 8.3 or 8.2 in cPanel</p>';
            echo '<p>Laravel 12 is officially tested on PHP 8.2 and 8.3. PHP 8.4 may have compatibility issues.</p>';
            echo '<p><strong>How to change:</strong></p>';
            echo '<ol>';
            echo '<li>In cPanel, find "MultiPHP Manager" or "Select PHP Version"</li>';
            echo '<li>Select your domain: sinton.asia</li>';
            echo '<li>Change PHP version to 8.3 or 8.2</li>';
            echo '<li>Save and test website again</li>';
            echo '</ol>';
            echo '</div>';
        } else {
            echo '<div style="background: #d4edda; padding: 20px; border-radius: 5px; border-left: 4px solid #28a745;">';
            echo '<p class="good">✓ PHP version is compatible</p>';
            echo '</div>';
        }
        ?>

        <div style="margin-top: 30px; text-align: center;">
            <a href="nuclear-reset.php" style="display: inline-block; background: #dc3545; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold;">Try Nuclear Reset</a>
            <a href="https://sinton.asia" style="display: inline-block; background: #28a745; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-left: 10px;">Test Website</a>
        </div>
    </div>
</body>
</html>
