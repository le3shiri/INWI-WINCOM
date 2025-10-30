<?php
session_start();

// Hardcoded credentials (will be replaced with database later)
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin123');

$error = '';

// Check if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: /admin/dashboard.php');
    exit;
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: /admin/dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Wincom</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 50%, #d91ab8 100%);
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .login-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.1;
            background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" xmlns="http://www.w3.org/2000/svg"%3E%3Crect width="100" height="100" fill="%23ff33da"/%3E%3Cpath d="M0 0 L50 50 L100 0 L100 100 L50 50 L0 100 Z" fill="%23e91ec7" opacity="0.3"/%3E%3C/svg%3E');
            background-size: 100px 100px;
        }
        
        .login-box {
            background: white;
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 440px;
            position: relative;
            z-index: 1;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .login-logo {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }
        
        .login-logo-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(255, 51, 218, 0.4);
        }
        
        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            font-size: 14px;
            color: #6b7280;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #ff33da;
            background: white;
            box-shadow: 0 0 0 4px rgba(255, 51, 218, 0.1);
        }
        
        .login-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(255, 51, 218, 0.4);
        }
        
        .error-message {
            background: #fee2e2;
            color: #dc2626;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
            border: 1px solid #fecaca;
        }
        
        .back-link {
            text-align: center;
            margin-top: 24px;
        }
        
        .back-link a {
            color: #ff33da;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .back-link a:hover {
            color: #e91ec7;
        }
        
        .credentials-note {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13px;
            color: #0369a1;
            margin-top: 20px;
        }
        
        .credentials-note strong {
            display: block;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-background"></div>
        
        <div class="login-box">
            <div class="login-header">
                <div class="login-logo">
                    <div class="login-logo-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="20" r="1" fill="white"/>
                        </svg>
                    </div>
                </div>
                <h1 class="login-title">Admin Login</h1>
                <p class="login-subtitle">Sign in to access the dashboard</p>
            </div>
            
            <?php if ($error): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="form-input" 
                        placeholder="Enter your username"
                        required
                        autocomplete="username"
                    >
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-input" 
                        placeholder="Enter your password"
                        required
                        autocomplete="current-password"
                    >
                </div>
                
                <button type="submit" class="login-button">
                    Sign In
                </button>
            </form>
            
            <div class="credentials-note">
                <strong>Demo Credentials:</strong>
                Username: <code>admin</code><br>
                Password: <code>admin123</code>
            </div>
            
            <div class="back-link">
                <a href="/">← Back to Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>
