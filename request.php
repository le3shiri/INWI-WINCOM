<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request an Offer - Wincom</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Leaflet CSS for Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        .request-page {
            min-height: 100vh;
            background: #f9fafb;
            padding: 40px 20px;
        }
        
        .request-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 32px;
            transition: all 0.2s ease;
        }
        
        .back-link:hover {
            color: #ff33da;
            transform: translateX(-4px);
        }
        
        .request-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .request-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(255, 51, 218, 0.3);
        }
        
        .request-title {
            font-size: 36px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 12px;
        }
        
        .request-subtitle {
            font-size: 16px;
            color: #6b7280;
        }
        
        .request-form {
            background: white;
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }
        
        .form-label .required {
            color: #ff33da;
        }
        
        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #ff33da;
            background: white;
            box-shadow: 0 0 0 4px rgba(255, 51, 218, 0.1);
        }
        
        .form-select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 48px;
        }
        
        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        /* Map Section */
        .map-section {
            margin-bottom: 24px;
        }
        
        .map-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
        }
        
        .map-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }
        
        .use-location-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            background: white;
            border: 2px solid #ff33da;
            color: #ff33da;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Inter', sans-serif;
        }
        
        .use-location-btn:hover {
            background: #ff33da;
            color: white;
        }
        
        #map {
            width: 100%;
            height: 350px;
            border-radius: 16px;
            border: 2px solid #e5e7eb;
            overflow: hidden;
            margin-bottom: 12px;
        }
        
        .map-helper-text {
            font-size: 13px;
            color: #6b7280;
            font-style: italic;
        }
        
        /* Privacy Notice */
        .privacy-notice {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            padding: 16px;
            border-radius: 12px;
            font-size: 13px;
            color: #0369a1;
            margin-bottom: 24px;
        }
        
        /* Submit Button */
        .submit-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(255, 51, 218, 0.4);
        }
        
        .submit-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        /* Success Message */
        .success-message {
            background: #d1fae5;
            border: 2px solid #6ee7b7;
            color: #065f46;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            display: none;
            align-items: center;
            gap: 12px;
        }
        
        .success-message.show {
            display: flex;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .request-page {
                padding: 24px 16px;
            }
            
            .request-form {
                padding: 32px 24px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            
            .request-title {
                font-size: 28px;
            }
            
            #map {
                height: 280px;
            }
            
            .map-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
            
            .use-location-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="request-page">
        <div class="request-container">
            <!-- Back Link -->
            <a href="/" class="back-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Back to Home
            </a>
            
            <!-- Header -->
            <div class="request-header">
                <div class="request-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="20" r="1" fill="white"/>
                    </svg>
                </div>
                <h1 class="request-title">Request an Offer</h1>
                <p class="request-subtitle">Fill out the form below and we'll get back to you with a personalized quote within 24 hours.</p>
            </div>
            
            <!-- Success Message -->
            <div class="success-message" id="successMessage">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <path d="M8 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Your request has been submitted successfully! We'll contact you soon.</span>
            </div>
            
            <!-- Request Form -->
            <form class="request-form" id="requestForm">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">
                            Full Name <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="full_name" 
                            class="form-input" 
                            placeholder="John Doe"
                            required
                        >
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            Email Address <span class="required">*</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-input" 
                            placeholder="john@example.com"
                            required
                        >
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">
                            Phone Number <span class="required">*</span>
                        </label>
                        <input 
                            type="tel" 
                            name="phone" 
                            class="form-input" 
                            placeholder="(555) 123 4567"
                            required
                        >
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            ID Card Number <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="id_card" 
                            class="form-input" 
                            placeholder="e.g. AB123456 or 12345678"
                            required
                        >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">
                        Select Plan <span class="required">*</span>
                    </label>
                    <select name="plan" class="form-select" required>
                        <option value="">Choose a plan...</option>
                        <option value="basic">Basic Plan - $29.99/mo - Up to 100 Mbps</option>
                        <option value="premium">Premium Plan - $49.99/mo - Up to 500 Mbps</option>
                        <option value="ultimate">Ultimate Plan - $79.99/mo - Up to 1 Gbps</option>
                        <option value="business">Business Plan - $149.99/mo - Up to 2 Gbps</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">
                        Service Address <span class="required">*</span>
                    </label>
                    <textarea 
                        name="address" 
                        class="form-textarea" 
                        placeholder="Kenzi Tower Hotel Sky 28, Rue 79, Hay Tiziri, Arrondissement de Mers Sultan مرس السلطان, عربي"
                        required
                        id="addressField"
                    ></textarea>
                </div>
                
                <!-- Map Section -->
                <div class="map-section">
                    <div class="map-header">
                        <label class="map-label">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Select Location on Map
                        </label>
                        <button type="button" class="use-location-btn" id="useLocationBtn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="12" r="3" fill="currentColor"/>
                            </svg>
                            Use My Location
                        </button>
                    </div>
                    <div id="map"></div>
                    <p class="map-helper-text">Click on the map or drag the marker to select your service address. You can also use your current location.</p>
                    
                    <!-- Coordinate Display -->
                    <div style="margin-top: 12px; padding: 12px; background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 8px; font-size: 13px; color: #0369a1;">
                        <strong>Selected Position:</strong><br>
                        <span style="font-family: monospace; font-size: 14px;">
                            <span id="coordY">33°34'23.2"N</span> | 
                            <span id="coordX">7°35'23.3"W</span>
                        </span>
                    </div>
                </div>
                
                <!-- Hidden fields for coordinates -->
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <input type="hidden" name="position_x" id="positionX">
                <input type="hidden" name="position_y" id="positionY">
                
                <!-- Privacy Notice -->
                <div class="privacy-notice">
                    By submitting this form, you agree to be contacted by our team regarding your service request. We respect your privacy and will never share your information with third parties.
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="submit-button">
                    <span>Submit Request</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    
    <!-- Leaflet JS for Map -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize map (Casablanca coordinates as default)
            const map = L.map('map').setView([33.5731, -7.5898], 13);
        
        // Add tile layer (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19
        }).addTo(map);
        
        // Custom marker icon
        const customIcon = L.divIcon({
            className: 'custom-marker',
            html: `<div style="background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%); width: 40px; height: 40px; border-radius: 50% 50% 50% 0; transform: rotate(-45deg); box-shadow: 0 4px 12px rgba(255, 51, 218, 0.4); display: flex; align-items: center; justify-content: center;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(45deg);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="white" stroke-width="2"/><circle cx="12" cy="10" r="3" stroke="white" stroke-width="2"/></svg></div>`,
            iconSize: [40, 40],
            iconAnchor: [20, 40]
        });
        
        // Add draggable marker
        let marker = L.marker([33.5731, -7.5898], {
            draggable: true,
            icon: customIcon
        }).addTo(map);
        
        // Convert decimal degrees to DMS (Degrees Minutes Seconds) format
        function convertToDMS(decimal, isLatitude) {
            const absolute = Math.abs(decimal);
            const degrees = Math.floor(absolute);
            const minutesDecimal = (absolute - degrees) * 60;
            const minutes = Math.floor(minutesDecimal);
            const seconds = ((minutesDecimal - minutes) * 60).toFixed(1);
            
            // Determine direction
            let direction;
            if (isLatitude) {
                direction = decimal >= 0 ? 'N' : 'S';
            } else {
                direction = decimal >= 0 ? 'E' : 'W';
            }
            
            return `${degrees}°${minutes}'${seconds}"${direction}`;
        }
        
        // Update coordinate display only (fast, for real-time updates)
        function updateCoordinateDisplay(lat, lng) {
            console.log('Updating coordinates:', { lat, lng });
            
            // Store latitude and longitude (decimal format for processing)
            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);
            
            // Convert to DMS format for display
            const latDMS = convertToDMS(lat, true);
            const lngDMS = convertToDMS(lng, false);
            
            // Display in DMS format
            const coordXElement = document.getElementById('coordX');
            const coordYElement = document.getElementById('coordY');
            
            if (coordXElement && coordYElement) {
                coordXElement.textContent = lngDMS;
                coordYElement.textContent = latDMS;
                console.log('Coordinates updated in DOM:', { X: lngDMS, Y: latDMS });
            } else {
                console.error('Coordinate display elements not found');
            }
            
            // Store X, Y values (decimal format)
            document.getElementById('positionX').value = lng.toFixed(6);
            document.getElementById('positionY').value = lat.toFixed(6);
        }
        
        // Update coordinates with geocoding (slower, for final position)
        function updateCoordinates(lat, lng) {
            updateCoordinateDisplay(lat, lng);
            
            // Reverse geocoding to get address
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(response => response.json())
                .then(data => {
                    if (data.display_name) {
                        document.getElementById('addressField').value = data.display_name;
                    }
                })
                .catch(err => console.log('Geocoding error:', err));
        }
        
        // Initialize coordinates on page load
        console.log('Initializing map coordinates...');
        updateCoordinates(33.5731, -7.5898);
        
        // Update during marker drag (real-time, coordinates only)
        marker.on('drag', function(e) {
            const pos = marker.getLatLng();
            console.log('Marker dragging:', pos);
            updateCoordinateDisplay(pos.lat, pos.lng);
        });
        
        // Update on marker drag end (with geocoding)
        marker.on('dragend', function(e) {
            const pos = marker.getLatLng();
            updateCoordinates(pos.lat, pos.lng);
        });
        
        // Update on map click (with geocoding)
        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            updateCoordinates(e.latlng.lat, e.latlng.lng);
        });
        
        // Use current location button
        document.getElementById('useLocationBtn').addEventListener('click', function() {
            if ('geolocation' in navigator) {
                this.disabled = true;
                this.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg> Getting location...';
                
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        
                        map.setView([lat, lng], 15);
                        marker.setLatLng([lat, lng]);
                        updateCoordinates(lat, lng);
                        
                        this.disabled = false;
                        this.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" fill="currentColor"/></svg> Use My Location';
                    },
                    (error) => {
                        alert('Unable to get your location. Please select it manually on the map.');
                        this.disabled = false;
                        this.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" fill="currentColor"/></svg> Use My Location';
                    }
                );
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        });
        
        // Form submission
        document.getElementById('requestForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // For now, just log the data (will be saved to database later)
            console.log('Form submitted:', data);
            
            // Show success message
            document.getElementById('successMessage').classList.add('show');
            
            // Reset form
            this.reset();
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('successMessage').classList.remove('show');
            }, 5000);
        });
        
        }); // End DOMContentLoaded
    </script>
</body>
</html>
