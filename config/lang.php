<?php
// Language Configuration and Helper Functions

session_start();

// Get current language from session or default to English
function getCurrentLanguage() {
    return $_SESSION['lang'] ?? 'en';
}

// Set language
function setLanguage($lang) {
    $allowedLangs = ['en', 'fr', 'ar'];
    if (in_array($lang, $allowedLangs)) {
        $_SESSION['lang'] = $lang;
        return true;
    }
    return false;
}

// Load translation file
function loadTranslations($lang = null) {
    if ($lang === null) {
        $lang = getCurrentLanguage();
    }
    
    $langFile = __DIR__ . '/../lang/' . $lang . '.php';
    
    if (file_exists($langFile)) {
        return require $langFile;
    }
    
    // Fallback to English
    return require __DIR__ . '/../lang/en.php';
}

// Translation helper function
function t($key, $default = '') {
    global $translations;
    
    $keys = explode('.', $key);
    $value = $translations;
    
    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default ?: $key;
        }
    }
    
    return $value;
}

// Get language display name
function getLanguageName($lang) {
    $names = [
        'en' => 'English',
        'fr' => 'Français',
        'ar' => 'العربية'
    ];
    return $names[$lang] ?? $lang;
}

// Initialize translations
$translations = loadTranslations();
$currentLang = getCurrentLanguage();
