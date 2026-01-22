<?php
/**
 * Manual .env Fix Instructions
 */

$basePath = dirname(__DIR__);
$envFile = $basePath . '/.env';
$correctKey = 'base64:HosfP9/C+iavblehe+94OqEq7zDRPsq5/sjSVvn1pX2Jw=';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Fix - Sinton</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0D5C7D, #1BA098);
            min-height: 100vh;
            padding: 40px 20px;
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
        h2 { color: #1BA098; margin: 30px 0 15px; }
        .step {
            background: #f8f9fa;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            border-left: 4px solid #1BA098;
        }
        .code {
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 10px 0;
            overflow-x: auto;
            font-size: 14px;
        }
        .highlight {
            background: #fff3cd;
            padding: 3px 6px;
            border-radius: 3px;
            font-family: monospace;
        }
        .current-key {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            border-left: 4px solid #dc3545;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Manual .env File Fix</h1>
        
        <div class="current-key">
            <strong>⚠️ Current Problem:</strong><br>
            Your APP_KEY has an invalid format causing encryption errors.
        </div>

        <?php
        if (file_exists($envFile)) {
            $envContent = file_get_contents($envFile);
            preg_match('/APP_KEY=(.*)/', $envContent, $matches);
            $currentKey = isset($matches[1]) ? trim($matches[1]) : 'NOT FOUND';
            
            echo '<div class="current-key">';
            echo '<strong>Current APP_KEY in .env:</strong><br>';
            echo '<code style="word-break: break-all;">' . htmlspecialchars($currentKey) . '</code>';
            echo '</div>';
        }
        ?>

        <h2>📋 Step-by-Step Instructions</h2>

        <div class="step">
            <strong>Step 1: Open cPanel File Manager</strong><br>
            • Log into your GoDaddy cPanel<br>
            • Click on "File Manager"
        </div>

        <div class="step">
            <strong>Step 2: Navigate to .env file</strong><br>
            • Go to: <span class="highlight">public_html/sinton.asia/web/</span><br>
            • Find the file named <span class="highlight">.env</span><br>
            • Right-click → Edit
        </div>

        <div class="step">
            <strong>Step 3: Find the APP_KEY line</strong><br>
            • Look for a line that starts with <span class="highlight">APP_KEY=</span><br>
            • It should be near the top of the file (around line 3-5)
        </div>

        <div class="step">
            <strong>Step 4: Replace the entire line with this:</strong><br>
            <div class="code">APP_KEY=<?php echo $correctKey; ?></div>
            <br>
            <strong>⚠️ Important:</strong> Copy the ENTIRE line above, including "APP_KEY="
        </div>

        <div class="step">
            <strong>Step 5: Save the file</strong><br>
            • Click "Save Changes" in the editor<br>
            • Close the editor
        </div>

        <div class="step">
            <strong>Step 6: Clear the cache</strong><br>
            • Visit: <a href="clear-cache.php" target="_blank">clear-cache.php</a><br>
            • Click "Clear All Cache"
        </div>

        <div class="step">
            <strong>Step 7: Test your website</strong><br>
            • Visit: <a href="https://sinton.asia" target="_blank">https://sinton.asia</a><br>
            • It should work now! 🎉
        </div>

        <h2>✂️ Copy This Exact Line:</h2>
        <div class="code" style="font-size: 16px; user-select: all;">
APP_KEY=<?php echo $correctKey; ?>
        </div>

        <div class="success" style="margin-top: 30px;">
            <strong>✅ After fixing:</strong><br>
            1. The website should load without errors<br>
            2. Delete all these PHP files: setup.php, diagnose.php, clear-cache.php, fix-key.php, view-log.php, manual-fix.php<br>
            3. Your Sinton website will be live!
        </div>

        <h2>🆘 Still Having Issues?</h2>
        <div class="step">
            <strong>If the error persists:</strong><br>
            1. Make sure you copied the ENTIRE line including "APP_KEY="<br>
            2. Make sure there are NO spaces before or after the line<br>
            3. Make sure you saved the file<br>
            4. Clear cache again<br>
            5. Try in a different browser or incognito mode
        </div>
    </div>
</body>
</html>
