@extends('layouts.apps')

@section('content')

<style>
/* ===== CONTACT PAGE - FULLY RESPONSIVE ===== */
/* No layout changes - only responsive overrides */

/* Base Container */
@media (max-width: 1400px) {
    .contact-section {
        padding-left: 8% !important;
        padding-right: 8% !important;
    }
}

@media (max-width: 1200px) {
    .contact-section {
        padding: 100px 8% 60px 8% !important;
    }
    .contact-hero-title {
        font-size: 52px !important;
    }
    .contact-hero-text {
        font-size: 19px !important;
        max-width: 650px !important;
    }
    .contact-form-container {
        padding: 50px !important;
    }
    .contact-form-title {
        font-size: 28px !important;
    }
}

@media (max-width: 992px) {
    /* Hero Section */
    .contact-section {
        padding: 80px 6% 50px 6% !important;
    }
    .contact-hero-badge {
        padding: 8px 25px !important;
        font-size: 13px !important;
        margin-bottom: 25px !important;
    }
    .contact-hero-title {
        font-size: 48px !important;
        margin-bottom: 20px !important;
    }
    .contact-hero-text {
        font-size: 18px !important;
        margin-bottom: 40px !important;
        max-width: 600px !important;
    }
    .contact-hero-divider {
        width: 120px !important;
    }
    
    /* Main Layout - Stack Columns */
    div[style*="display: flex; gap: 60px; align-items: stretch"] {
        flex-direction: column !important;
        gap: 40px !important;
    }
    
    /* Left Column - Contact Cards */
    div[style*="flex: 1; display: flex; flex-direction: column; gap: 25px"] {
        flex: none !important;
        width: 100% !important;
    }
    
    /* Right Column - Contact Form */
    div[style*="flex: 1.5"] {
        flex: none !important;
        width: 100% !important;
    }
    
    /* Contact Cards */
    div[style*="background: white; border-radius: 25px; padding: 40px"] {
        padding: 35px !important;
    }
    
    /* Form Container */
    .contact-form-container {
        padding: 45px !important;
    }
    
    /* Form Row */
    div[style*="display: flex; gap: 25px; margin-bottom: 25px"] {
        gap: 20px !important;
    }
    
    /* Address Banner */
    .address-banner {
        padding: 60px 8% !important;
    }
    .address-banner-icon {
        font-size: 28px !important;
        margin-bottom: 20px !important;
    }
    .address-banner-title {
        font-size: 24px !important;
    }
    .address-banner-text {
        font-size: 15px !important;
    }
    
    /* Emergency Banner */
    .emergency-banner {
        padding: 20px 6% !important;
        gap: 15px !important;
    }
    .emergency-icon {
        font-size: 24px !important;
    }
    .emergency-title {
        font-size: 18px !important;
    }
    .emergency-number {
        font-size: 24px !important;
    }
}

@media (max-width: 768px) {
    /* Hero Section */
    .contact-section {
        padding: 60px 5% 40px 5% !important;
    }
    .contact-hero-badge {
        padding: 7px 22px !important;
        font-size: 12px !important;
        margin-bottom: 20px !important;
    }
    .contact-hero-title {
        font-size: 40px !important;
        letter-spacing: -0.5px !important;
    }
    .contact-hero-text {
        font-size: 16px !important;
        margin-bottom: 35px !important;
        max-width: 500px !important;
    }
    .contact-hero-divider {
        width: 100px !important;
        height: 4px !important;
    }
    
    /* Contact Cards */
    div[style*="background: white; border-radius: 25px; padding: 40px"] {
        padding: 30px !important;
    }
    div[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 25px"] {
        gap: 15px !important;
        margin-bottom: 20px !important;
    }
    div[style*="width: 60px; height: 60px"] {
        width: 55px !important;
        height: 55px !important;
        font-size: 22px !important;
    }
    div[style*="font-weight: 900; color: #363558; font-size: 18px"] {
        font-size: 17px !important;
    }
    div[style*="font-size: 16px; color: #91746E"] {
        font-size: 15px !important;
        padding-left: 5px !important;
    }
    div[style*="font-size: 13px; color: #373358"] {
        font-size: 12px !important;
    }
    
    /* Social Card */
    div[style*="font-weight: 900; color: #363558; margin-bottom: 25px; font-size: 18px"] {
        font-size: 17px !important;
        margin-bottom: 20px !important;
    }
    div[style*="width: 50px; height: 50px"] {
        width: 45px !important;
        height: 45px !important;
        font-size: 18px !important;
    }
    div[style*="display: flex; gap: 15px"] {
        gap: 12px !important;
    }
    
    /* Form Container */
    .contact-form-container {
        padding: 40px 30px !important;
    }
    div[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 50px"] {
        gap: 15px !important;
        margin-bottom: 35px !important;
    }
    div[style*="width: 70px; height: 70px"] {
        width: 60px !important;
        height: 60px !important;
        font-size: 24px !important;
    }
    .contact-form-title {
        font-size: 26px !important;
    }
    div[style*="font-size: 16px; color: #373358; margin-top: 8px"] {
        font-size: 14px !important;
        margin-top: 5px !important;
    }
    
    /* Form Row - Stack on Mobile */
    div[style*="display: flex; gap: 25px; margin-bottom: 25px"] {
        flex-direction: column !important;
        gap: 20px !important;
        margin-bottom: 20px !important;
    }
    
    /* Form Fields */
    input[type="text"],
    input[type="email"],
    select,
    textarea {
        padding: 16px 20px !important;
        font-size: 15px !important;
    }
    
    label {
        font-size: 13px !important;
        margin-bottom: 10px !important;
    }
    
    textarea {
        height: 150px !important;
    }
    
    /* Submit Button */
    button[type="submit"] {
        padding: 20px !important;
        font-size: 17px !important;
    }
    button[type="submit"] i {
        font-size: 22px !important;
    }
    
    /* Address Banner */
    .address-banner {
        padding: 50px 5% !important;
    }
    .address-banner-icon {
        font-size: 26px !important;
        margin-bottom: 18px !important;
    }
    .address-banner-title {
        font-size: 22px !important;
        margin-bottom: 15px !important;
    }
    .address-banner-text {
        font-size: 14px !important;
    }
    
    /* Emergency Banner */
    .emergency-banner {
        padding: 18px 5% !important;
        gap: 12px !important;
    }
    .emergency-icon {
        font-size: 22px !important;
    }
    .emergency-title {
        font-size: 17px !important;
    }
    .emergency-number {
        font-size: 22px !important;
    }
}

@media (max-width: 576px) {
    /* Hero Section */
    .contact-section {
        padding: 50px 4% 30px 4% !important;
    }
    .contact-hero-badge {
        padding: 6px 18px !important;
        font-size: 11px !important;
        letter-spacing: 0.5px !important;
    }
    .contact-hero-title {
        font-size: 32px !important;
    }
    .contact-hero-text {
        font-size: 15px !important;
        margin-bottom: 30px !important;
    }
    .contact-hero-divider {
        width: 80px !important;
        height: 3px !important;
    }
    
    /* Contact Cards */
    div[style*="background: white; border-radius: 25px; padding: 40px"] {
        padding: 25px !important;
        border-left-width: 4px !important;
    }
    div[style*="width: 60px; height: 60px"] {
        width: 50px !important;
        height: 50px !important;
        font-size: 20px !important;
    }
    div[style*="font-weight: 900; color: #363558; font-size: 18px"] {
        font-size: 16px !important;
    }
    div[style*="font-size: 16px; color: #91746E"] {
        font-size: 14px !important;
    }
    
    /* Social Card */
    div[style*="font-weight: 900; color: #363558; margin-bottom: 25px; font-size: 18px"] {
        font-size: 16px !important;
        margin-bottom: 18px !important;
    }
    div[style*="width: 50px; height: 50px"] {
        width: 42px !important;
        height: 42px !important;
        font-size: 17px !important;
    }
    div[style*="display: flex; gap: 15px"] {
        gap: 10px !important;
        flex-wrap: wrap !important;
    }
    
    /* Form Container */
    .contact-form-container {
        padding: 30px 25px !important;
        border-radius: 25px !important;
    }
    div[style*="width: 70px; height: 70px"] {
        width: 55px !important;
        height: 55px !important;
        font-size: 22px !important;
    }
    .contact-form-title {
        font-size: 24px !important;
    }
    div[style*="font-size: 16px; color: #373358; margin-top: 8px"] {
        font-size: 13px !important;
    }
    
    /* Form Fields */
    input[type="text"],
    input[type="email"],
    select,
    textarea {
        padding: 14px 18px !important;
        font-size: 14px !important;
        border-radius: 12px !important;
    }
    
    textarea {
        height: 130px !important;
    }
    
    /* Submit Button */
    button[type="submit"] {
        padding: 18px !important;
        font-size: 16px !important;
        border-radius: 12px !important;
    }
    button[type="submit"] i {
        font-size: 20px !important;
    }
    
    /* Privacy Text */
    div[style*="font-size: 13px; color: #373358; text-align: center; margin-top: 25px"] {
        font-size: 12px !important;
        margin-top: 20px !important;
    }
    
    /* Address Banner */
    .address-banner {
        padding: 40px 4% !important;
    }
    .address-banner-icon {
        font-size: 24px !important;
        margin-bottom: 15px !important;
    }
    .address-banner-title {
        font-size: 20px !important;
        margin-bottom: 12px !important;
    }
    .address-banner-text {
        font-size: 13px !important;
    }
    
    /* Emergency Banner */
    .emergency-banner {
        padding: 15px 4% !important;
        gap: 10px !important;
        flex-wrap: wrap !important;
    }
    .emergency-icon {
        font-size: 20px !important;
    }
    .emergency-title {
        font-size: 16px !important;
        width: 100% !important;
        text-align: center !important;
    }
    .emergency-number {
        font-size: 20px !important;
        width: 100% !important;
        text-align: center !important;
    }
    .emergency-banner div[style*="flex: 1"] {
        flex: none !important;
        width: 100% !important;
        order: -1 !important;
    }
}

@media (max-width: 375px) {
    /* Hero Section */
    .contact-hero-title {
        font-size: 28px !important;
    }
    .contact-hero-text {
        font-size: 14px !important;
    }
    .contact-hero-badge {
        padding: 5px 15px !important;
        font-size: 10px !important;
    }
    
    /* Contact Cards */
    div[style*="background: white; border-radius: 25px; padding: 40px"] {
        padding: 20px !important;
    }
    div[style*="width: 60px; height: 60px"] {
        width: 45px !important;
        height: 45px !important;
        font-size: 18px !important;
    }
    div[style*="font-weight: 900; color: #363558; font-size: 18px"] {
        font-size: 15px !important;
    }
    div[style*="font-size: 16px; color: #91746E"] {
        font-size: 13px !important;
    }
    
    /* Social Card */
    div[style*="width: 50px; height: 50px"] {
        width: 40px !important;
        height: 40px !important;
        font-size: 16px !important;
    }
    
    /* Form Container */
    .contact-form-container {
        padding: 25px 20px !important;
    }
    .contact-form-title {
        font-size: 22px !important;
    }
    
    /* Address Banner */
    .address-banner-title {
        font-size: 18px !important;
    }
    .address-banner-text {
        font-size: 12px !important;
    }
    
    /* Emergency Banner */
    .emergency-number {
        font-size: 18px !important;
    }
    .emergency-number a {
        font-size: 18px !important;
    }
}

/* Landscape Mode */
@media (max-width: 992px) and (orientation: landscape) {
    div[style*="display: flex; gap: 60px; align-items: stretch"] {
        flex-direction: row !important;
    }
    
    div[style*="flex: 1; display: flex; flex-direction: column; gap: 25px"] {
        flex: 1 !important;
        width: auto !important;
    }
    
    div[style*="flex: 1.5"] {
        flex: 1.2 !important;
        width: auto !important;
    }
    
    div[style*="display: flex; gap: 25px; margin-bottom: 25px"] {
        flex-direction: row !important;
    }
}

/* Small Landscape */
@media (max-width: 768px) and (orientation: landscape) {
    div[style*="display: flex; gap: 60px; align-items: stretch"] {
        flex-direction: column !important;
    }
    
    .emergency-banner {
        flex-wrap: nowrap !important;
    }
    .emergency-banner div[style*="flex: 1"] {
        width: auto !important;
        order: 0 !important;
    }
    .emergency-title {
        width: auto !important;
    }
    .emergency-number {
        width: auto !important;
    }
}

/* Tablet Portrait Specific */
@media (min-width: 768px) and (max-width: 992px) and (orientation: portrait) {
    div[style*="display: flex; gap: 60px; align-items: stretch"] {
        flex-direction: column !important;
    }
}

/* Fix hover effects for touch devices */
@media (hover: none) and (pointer: coarse) {
    div[style*="transition: all 0.4s ease"]:hover {
        transform: translateY(0) !important;
        box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15) !important;
    }
    
    button[type="submit"]:hover {
        background: linear-gradient(to right, #363558, #2d2a4a) !important;
        transform: translateY(0) !important;
        box-shadow: 0 15px 35px rgba(54, 53, 88, 0.4) !important;
    }
    
    a[style*="transition: all 0.3s ease"]:hover {
        transform: scale(1) !important;
        box-shadow: none !important;
    }
}

/* Fix for iOS devices */
@supports (-webkit-touch-callout: none) {
    div[style*="backdrop-filter: blur(10px)"] {
        backdrop-filter: none !important;
    }
    
    input,
    select,
    textarea {
        -webkit-appearance: none !important;
        appearance: none !important;
    }
}

/* Large Desktop */
@media (min-width: 1400px) {
    section[style*="max-width: 800px"] {
        max-width: 900px !important;
    }
}

/* Print styles */
@media print {
    section {
        break-inside: avoid;
    }
    
    button[type="submit"],
    .emergency-banner,
    a[style*="width: 50px"] {
        display: none !important;
    }
}
</style>

<style>
/* ========== SPACING REDUCTIONS FOR CONTACT PAGE ========== */

/* Override top margin */
div[style*="margin-top: 8em"] {
    margin-top: 4em !important;
}

/* Hero Section */
.contact-section[style*="padding: 120px 10% 80px 10%"] {
    padding: 40px 5% 30px 5% !important;
}

.contact-hero-badge[style*="padding: 10px 30px; margin-bottom: 30px"] {
    padding: 6px 15px !important;
    margin-bottom: 15px !important;
    font-size: 12px !important;
}

.contact-hero-title[style*="font-size: 56px; margin-bottom: 25px"] {
    font-size: 36px !important;
    margin-bottom: 8px !important;
}

.contact-hero-text[style*="font-size: 20px; margin: 0 auto 50px auto"] {
    font-size: 15px !important;
    margin-bottom: 20px !important;
}

.contact-hero-divider[style*="height: 5px; width: 150px"] {
    height: 3px !important;
    width: 80px !important;
}

/* Contact Section */
section[style*="padding: 0 10% 120px 10%"] {
    padding: 0 5% 40px 5% !important;
}

div[style*="display: flex; gap: 60px; align-items: stretch"] {
    gap: 20px !important;
}

/* Left Column - Contact Cards */
div[style*="flex: 1; display: flex; flex-direction: column; gap: 25px"] {
    gap: 10px !important;
}

/* Contact Cards */
div[style*="background: white; border-radius: 25px; padding: 40px"] {
    padding: 15px !important;
}

div[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 25px"] {
    gap: 10px !important;
    margin-bottom: 10px !important;
}

div[style*="width: 60px; height: 60px; border-radius: 15px; font-size: 24px"] {
    width: 40px !important;
    height: 40px !important;
    font-size: 18px !important;
}

div[style*="font-weight: 900; color: #363558; font-size: 18px"] {
    font-size: 15px !important;
}

div[style*="font-size: 13px; color: #373358; font-weight: 600"] {
    font-size: 11px !important;
}

div[style*="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px"] {
    font-size: 13px !important;
    padding-left: 5px !important;
}

/* Social Card */
div[style*="font-weight: 900; color: #363558; margin-bottom: 25px; font-size: 18px"] {
    font-size: 15px !important;
    margin-bottom: 12px !important;
    gap: 8px !important;
}

div[style*="width: 50px; height: 50px; border-radius: 12px; font-size: 20px"] {
    width: 35px !important;
    height: 35px !important;
    font-size: 16px !important;
}

div[style*="display: flex; gap: 15px; justify-content: center"] {
    gap: 8px !important;
}

/* Right Column - Contact Form */
.contact-form-container[style*="padding: 60px"] {
    padding: 20px !important;
}

div[style*="display: flex; align-items: center; gap: 20px; margin-bottom: 50px"] {
    gap: 10px !important;
    margin-bottom: 20px !important;
}

div[style*="width: 70px; height: 70px; border-radius: 20px; font-size: 28px"] {
    width: 45px !important;
    height: 45px !important;
    font-size: 20px !important;
}

.contact-form-title[style*="font-weight: 900; font-size: 32px; line-height: 1.1"] {
    font-size: 22px !important;
}

div[style*="font-size: 16px; color: #373358; margin-top: 8px; font-weight: 600"] {
    font-size: 13px !important;
    margin-top: 4px !important;
}

/* Form Styles */
div[style*="display: flex; gap: 25px; margin-bottom: 25px"] {
    gap: 12px !important;
    margin-bottom: 12px !important;
}

label[style*="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px"] {
    font-size: 12px !important;
    margin-bottom: 6px !important;
}

input[type="text"],
input[type="email"],
select,
textarea {
    padding: 12px 15px !important;
    font-size: 14px !important;
    border-radius: 12px !important;
}

textarea[style*="height: 180px"] {
    height: 120px !important;
}

div[style*="margin-bottom: 40px"] {
    margin-bottom: 20px !important;
}

/* Submit Button */
button[type="submit"][style*="padding: 22px; border-radius: 15px; font-size: 18px"] {
    padding: 12px !important;
    font-size: 15px !important;
    gap: 8px !important;
}

button[type="submit"] i[style*="font-size: 24px"] {
    font-size: 18px !important;
}

/* Privacy Text */
div[style*="font-size: 13px; color: #373358; text-align: center; margin-top: 25px; line-height: 1.6"] {
    font-size: 11px !important;
    margin-top: 12px !important;
}

/* Address Banner */
.address-banner[style*="padding: 80px 10%"] {
    padding: 30px 5% !important;
}

.address-banner-icon[style*="font-size: 32px; margin-bottom: 25px"] {
    font-size: 24px !important;
    margin-bottom: 12px !important;
}

.address-banner-title[style*="font-size: 28px; font-weight: 800; margin-bottom: 20px"] {
    font-size: 22px !important;
    margin-bottom: 8px !important;
}

.address-banner-text[style*="font-size: 16px; opacity: 0.8; line-height: 1.6"] {
    font-size: 13px !important;
}

/* Emergency Banner */
.emergency-banner[style*="padding: 25px 10%; display: flex; justify-content: center; align-items: center; gap: 20px"] {
    padding: 15px 5% !important;
    gap: 10px !important;
}

.emergency-icon[style*="font-size: 28px"] {
    font-size: 20px !important;
}

.emergency-title[style*="font-size: 20px; font-weight: 800; margin-bottom: 5px"] {
    font-size: 16px !important;
    margin-bottom: 2px !important;
}

.emergency-number[style*="font-size: 28px; font-weight: 900"] {
    font-size: 20px !important;
}

/* Background decorative elements */
div[style*="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px"] {
    width: 100px !important;
    height: 100px !important;
    bottom: -25px !important;
    right: -25px !important;
}

/* Responsive overrides */
@media (max-width: 992px) {
    .contact-section[style*="padding: 40px 5% 30px 5%"] {
        padding: 30px 4% 20px 4% !important;
    }
    
    .contact-hero-title[style*="font-size: 36px"] {
        font-size: 30px !important;
    }
    
    div[style*="display: flex; gap: 20px; align-items: stretch"] {
        flex-direction: column !important;
    }
}

@media (max-width: 768px) {
    .contact-hero-title[style*="font-size: 30px"] {
        font-size: 26px !important;
    }
    
    .contact-hero-text[style*="font-size: 15px"] {
        font-size: 14px !important;
    }
    
    div[style*="display: flex; gap: 12px; margin-bottom: 12px"] {
        flex-direction: column !important;
        gap: 8px !important;
    }
    
    .contact-form-container[style*="padding: 20px"] {
        padding: 15px !important;
    }
    
    .address-banner[style*="padding: 30px 5%"] {
        padding: 20px 4% !important;
    }
    
    .address-banner-title[style*="font-size: 22px"] {
        font-size: 18px !important;
    }
    
    .emergency-banner[style*="padding: 15px 5%"] {
        padding: 10px 4% !important;
        flex-wrap: wrap !important;
    }
    
    .emergency-title[style*="font-size: 16px"] {
        font-size: 14px !important;
    }
    
    .emergency-number[style*="font-size: 20px"] {
        font-size: 18px !important;
    }
}

@media (max-width: 576px) {
    .contact-hero-title[style*="font-size: 26px"] {
        font-size: 22px !important;
    }
    
    .contact-hero-text[style*="font-size: 14px"] {
        font-size: 13px !important;
    }
    
    div[style*="width: 40px; height: 40px; border-radius: 15px; font-size: 18px"] {
        width: 35px !important;
        height: 35px !important;
        font-size: 16px !important;
    }
    
    div[style*="font-size: 15px"] {
        font-size: 13px !important;
    }
    
    div[style*="font-size: 13px"] {
        font-size: 11px !important;
    }
    
    .contact-form-title[style*="font-size: 22px"] {
        font-size: 18px !important;
    }
    
    .emergency-number[style*="font-size: 18px"] {
        font-size: 16px !important;
    }
    
    .emergency-banner {
        flex-direction: column !important;
        text-align: center !important;
    }
    
    div[style*="width: 35px; height: 35px; border-radius: 12px; font-size: 16px"] {
        width: 30px !important;
        height: 30px !important;
        font-size: 14px !important;
    }
}

/* Disable hover animations on touch devices */
@media (hover: none) and (pointer: coarse) {
    div[onmouseover],
    div[onmouseout] {
        transition: none !important;
    }
    
    div[onmouseover]:hover {
        transform: none !important;
        box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15) !important;
    }
    
    a[onmouseover]:hover,
    button[onmouseover]:hover {
        transform: none !important;
    }
}
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%); margin-top: 8em; padding-bottom: 0; overflow: hidden;">

    <!-- Hero Section -->
    <section class="contact-section" style="padding: 120px 10% 80px 10%; text-align: center;">
        <div class="contact-hero-badge" style="display: inline-block; padding: 10px 30px; background: #2d2a4a; color: white; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 30px; letter-spacing: 1px; box-shadow: 0 10px 30px rgba(54, 53, 88, 0.3);">
            CONTACT US
        </div>
        <h1 class="contact-hero-title" style="font-size: 56px; font-weight: 900; color: #363558; margin-bottom: 25px; line-height: 1.1;">
            Get in <span style="color: #363558;">Touch</span> With Us
        </h1>
        <p class="contact-hero-text" style="font-size: 20px; color: #91746E; max-width: 700px; margin: 0 auto 50px auto; line-height: 1.7;">
            Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
        </p>
        <div class="contact-hero-divider" style="height: 5px; width: 150px; background: linear-gradient(to right, #46DE48, #46DE48); margin: 0 auto; border-radius: 2px;"></div>
    </section>

    <!-- Contact Section -->
    <section style="padding: 0 10% 120px 10%;">
        <div style="display: flex; gap: 60px; align-items: stretch;">

            <!-- Left Column - Contact Cards -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 25px;">
                <!-- Address Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #DD3134;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #DD3134, #DD3134); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Office Address</div>
                            <div style="font-size: 13px; color: #373358; font-weight: 600;">Visit Our Headquarters</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        Plot 45, Maternal Health Center<br>
                        Kampala, Uganda
                    </div>
                </div>

                <!-- Phone Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #46DE48;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #46DE48, #46DE48); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Phone Numbers</div>
                            <div style="font-size: 13px; color: #373358; font-weight: 600;">Call Us Anytime</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        24/7 Helpline: <span style="color: #363558; font-weight: 800;">+256 700 123 456</span><br>
                        Office: <span style="color: #363558; font-weight: 800;">+256 700 987 654</span>
                    </div>
                </div>

                <!-- Email Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #373358;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #373358, #373358); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <div style="font-weight: 900; color: #363558; font-size: 18px;">Email Addresses</div>
                            <div style="font-size: 13px; color: #373358; font-weight: 600;">Send Us an Email</div>
                        </div>
                    </div>
                    <div style="font-size: 16px; color: #91746E; line-height: 1.6; padding-left: 10px;">
                        General: <span style="color: #363558; font-weight: 800;">hello@safemomug.org</span><br>
                        Partnerships: <span style="color: #363558; font-weight: 800;">partners@safemomug.org</span>
                    </div>
                </div>

                <!-- Social Card -->
                <div style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transition: all 0.4s ease; border-left: 6px solid #91746E;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                    <div style="font-weight: 900; color: #363558; margin-bottom: 25px; font-size: 18px; display: flex; align-items: center; gap: 15px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #373358, #373358); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 22px;">
                            <i class="bi bi-globe"></i>
                        </div>
                        Follow Us on Social Media
                    </div>
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <a href="javascript:void()"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #4267B2, #3b5998); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(66, 103, 178, 0.4)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">f</a>
                        <a href="javascript:void()"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #1DA1F2, #1a91da); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(29, 161, 242, 0.4)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">𝕩</a>
                        <a href="javascript:void()"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #E1306C, #C13584); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(225, 48, 108, 0.4)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">ig</a>
                        <a href="javascript:void()"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #0077B5, #006699); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0, 119, 181, 0.4)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">in</a>
                        <a href="javascript:void()"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #FF0000, #cc0000); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; font-weight: 900; text-decoration: none; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.15) translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(255, 0, 0, 0.4)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">yt</a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div style="flex: 1.5;">
                <div class="contact-form-container" style="background: white; border-radius: 30px; padding: 60px; box-shadow: 0 25px 60px rgba(128, 143, 189, 0.2); height: 100%;">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 50px; color: #363558;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px; box-shadow: 0 15px 35px rgba(221, 49, 52, 0.3);">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <div>
                            <div class="contact-form-title" style="font-weight: 900; font-size: 32px; line-height: 1.1;">Send Us a Message</div>
                            <div style="font-size: 16px; color: #373358; margin-top: 8px; font-weight: 600;">We'll get back to you within 24 hours</div>
                        </div>
                    </div>

                    <form>
                        <div style="display: flex; gap: 25px; margin-bottom: 25px;">
                            <div style="flex: 1;">
                                <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Your Name <span style="color: #DD3134;">*</span></label>
                                <input type="text" placeholder="Full name"
                                    style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease;"
                                    onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'"
                                    onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                            </div>
                            <div style="flex: 1;">
                                <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Email Address <span style="color: #DD3134;">*</span></label>
                                <input type="email" placeholder="your@email.com"
                                    style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease;"
                                    onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'"
                                    onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                            </div>
                        </div>

                        <div style="margin-bottom: 25px;">
                            <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Subject</label>
                            <select
                                style="width: 100%; padding: 18px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; transition: all 0.3s ease; appearance: none;"
                                onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'"
                                onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'">
                                <option>General Inquiry</option>
                                <option>Partnership Interest</option>
                                <option>Volunteer Application</option>
                                <option>Media Request</option>
                                <option>Emergency Support</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 40px;">
                            <label style="display: block; font-size: 14px; font-weight: 800; color: #363558; margin-bottom: 12px;">Your Message <span style="color: #DD3134;">*</span></label>
                            <textarea placeholder="How can we help you? Please provide details..."
                                style="width: 100%; height: 180px; padding: 20px 25px; border-radius: 15px; border: 2px solid #DCCEC1; outline: none; background: #fdfaf3; color: #363558; font-size: 16px; font-weight: 600; resize: none; transition: all 0.3s ease;"
                                onfocus="this.style.borderColor='#46DE48'; this.style.boxShadow='0 0 0 3px rgba(70, 222, 72, 0.2)'; this.style.backgroundColor='white'"
                                onblur="this.style.borderColor='#DCCEC1'; this.style.boxShadow='none'; this.style.backgroundColor='#fdfaf3'"></textarea>
                        </div>

                        <button type="submit"
                            style="width: 100%; background: linear-gradient(to right, #363558, #2d2a4a); color: white; border: none; padding: 22px; border-radius: 15px; font-weight: 900; font-size: 18px; display: flex; align-items: center; justify-content: center; gap: 15px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 15px 35px rgba(54, 53, 88, 0.4);"
                            onmouseover="this.style.background='linear-gradient(to right, #DD3134, #ff6b6b)'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(221, 49, 52, 0.5)'"
                            onmouseout="this.style.background='linear-gradient(to right, #363558, #2d2a4a)'; this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(54, 53, 88, 0.4)'">
                            <i class="bi bi-send" style="font-size: 24px;"></i> Send Message
                        </button>

                        <div style="font-size: 13px; color: #373358; text-align: center; margin-top: 25px; line-height: 1.6;">
                            By submitting this form, you agree to our <a href="javascript:void()"
                                style="color: #363558; font-weight: 700; text-decoration: none; border-bottom: 1px solid #DCCEC1;">Privacy Policy</a> and consent to receive communications from safeMom.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Address Banner -->
    <section class="address-banner" style="padding: 80px 10%; background: linear-gradient(135deg, #363558 0%, #2d2a4a 100%); color: white; text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(to right, #DD3134, #46DE48, #373358);"></div>

        <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="address-banner-icon" style="font-size: 32px; margin-bottom: 25px;">
                <i class="bi bi-geo-alt"></i>
            </div>
            <div class="address-banner-title" style="font-size: 28px; font-weight: 800; margin-bottom: 20px; line-height: 1.3;">Plot 45, Maternal Health Center, Kampala, Uganda</div>
            <div class="address-banner-text" style="font-size: 16px; opacity: 0.8; line-height: 1.6;">
                Our headquarters are open Monday through Friday from 8:00 AM to 5:00 PM. <br>
                For emergencies, our helpline operates 24/7.
            </div>
        </div>

        <div style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
    </section>

    <!-- Emergency Banner -->
    <section class="emergency-banner" style="background: linear-gradient(90deg, #DD3134 0%, #DD3134 100%); padding: 25px 10%; display: flex; justify-content: center; align-items: center; color: white; gap: 20px;">
        <div class="emergency-icon" style="font-size: 28px; font-weight: 900;">
            <i class="bi bi-exclamation-triangle"></i>
        </div>
        <div style="flex: 1; text-align: center;">
            <div class="emergency-title" style="font-size: 20px; font-weight: 800; margin-bottom: 5px;">Emergency 24/7 Helpline</div>
            <div class="emergency-number" style="font-size: 28px; font-weight: 900; letter-spacing: 1px;">
                <a href="tel:+256700123456" style="color: white; text-decoration: none; border-bottom: 2px dashed white; padding-bottom: 3px;">+256 700 123 456</a>
            </div>
        </div>
        <div class="emergency-icon" style="font-size: 28px; font-weight: 900;">
            <i class="bi bi-exclamation-triangle"></i>
        </div>
    </section>

</div>

@endsection