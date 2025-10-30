// Admin Dashboard JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const sidebar = document.querySelector('.admin-sidebar');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 1024) {
            if (!sidebar.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                sidebar.classList.remove('active');
            }
        }
    });
    
    // Console welcome message
    console.log('%c Wincom Admin Dashboard ', 'background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%); color: white; padding: 10px 20px; border-radius: 5px; font-size: 16px; font-weight: bold;');
    console.log('%c Welcome to the admin panel! ', 'color: #ff33da; font-size: 14px;');
});
