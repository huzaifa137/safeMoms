@extends('layouts.apps')

@section('content')

    <style>
/* ===== RESOURCES PAGE RESPONSIVE STYLES ===== */

/* Base Styles */
.resources-page {
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%);
}

/* Hero Section */
@media (max-width: 1200px) {
    .resources-hero {
        padding: 100px 5% 60px 5% !important;
    }
    .resources-hero h1 {
        font-size: 56px !important;
    }
}

@media (max-width: 992px) {
    .resources-hero {
        padding: 80px 5% 50px 5% !important;
    }
    .resources-hero h1 {
        font-size: 48px !important;
    }
    .resources-hero p {
        font-size: 18px !important;
        max-width: 700px !important;
    }
    .resources-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    .faq-title {
        font-size: 40px !important;
    }
    .faq-question {
        font-size: 17px !important;
    }
}

@media (max-width: 768px) {
    .resources-hero {
        padding: 60px 4% 40px 4% !important;
    }
    .resources-hero h1 {
        font-size: 36px !important;
        letter-spacing: -1px !important;
    }
    .resources-hero p {
        font-size: 16px !important;
        max-width: 600px !important;
        line-height: 1.6 !important;
    }
    .resources-hero-badge {
        padding: 10px 25px !important;
        font-size: 13px !important;
        margin-bottom: 20px !important;
    }
    .resources-grid {
        grid-template-columns: 1fr !important;
        gap: 25px !important;
    }
    .resource-card {
        padding: 30px !important;
    }
    .resource-icon {
        width: 60px !important;
        height: 60px !important;
        font-size: 24px !important;
    }
    .resource-badge {
        padding: 6px 14px !important;
        font-size: 11px !important;
    }
    .resource-title {
        font-size: 20px !important;
    }
    .resource-description {
        font-size: 14px !important;
        margin-bottom: 25px !important;
    }
    .resource-download-btn {
        padding: 10px 20px !important;
        font-size: 13px !important;
    }
    .faq-section {
        padding: 80px 5% !important;
    }
    .faq-title {
        font-size: 32px !important;
    }
    .faq-subtitle {
        font-size: 16px !important;
        max-width: 500px !important;
    }
    .faq-item {
        padding: 25px !important;
    }
    .faq-question {
        font-size: 16px !important;
    }
    .faq-contact {
        padding: 30px !important;
        margin-top: 40px !important;
    }
    .faq-contact-title {
        font-size: 18px !important;
    }
    .faq-contact-btn {
        padding: 14px 30px !important;
        font-size: 15px !important;
    }
}

@media (max-width: 576px) {
    .resources-hero {
        padding: 50px 4% 30px 4% !important;
    }
    .resources-hero h1 {
        font-size: 28px !important;
    }
    .resources-hero p {
        font-size: 15px !important;
        margin-bottom: 35px !important;
    }
    .resources-hero-badge {
        padding: 8px 20px !important;
        font-size: 12px !important;
    }
    .resources-hero-badge i,
    .resources-hero-badge svg {
        font-size: 14px !important;
        width: 14px !important;
        height: 14px !important;
    }
    .resources-grid {
        gap: 20px !important;
    }
    .resource-card {
        padding: 25px !important;
    }
    .resource-icon {
        width: 55px !important;
        height: 55px !important;
        font-size: 22px !important;
    }
    .resource-badge {
        padding: 5px 12px !important;
        font-size: 10px !important;
    }
    .resource-title {
        font-size: 18px !important;
        margin-bottom: 12px !important;
    }
    .resource-description {
        font-size: 13px !important;
        margin-bottom: 20px !important;
    }
    .resource-meta {
        gap: 10px !important;
    }
    .resource-meta-item {
        gap: 5px !important;
    }
    .resource-meta-item i,
    .resource-meta-item svg {
        font-size: 12px !important;
        width: 12px !important;
        height: 12px !important;
    }
    .resource-meta-item span {
        font-size: 12px !important;
    }
    .resource-download-btn {
        padding: 10px 18px !important;
        font-size: 12px !important;
        gap: 8px !important;
    }
    .faq-section {
        padding: 60px 4% !important;
    }
    .faq-title {
        font-size: 28px !important;
    }
    .faq-subtitle {
        font-size: 15px !important;
        margin-bottom: 40px !important;
    }
    .faq-item {
        padding: 20px !important;
    }
    .faq-question {
        font-size: 15px !important;
        margin-bottom: 8px !important;
    }
    .faq-answer {
        font-size: 13px !important;
    }
    .faq-toggle {
        width: 35px !important;
        height: 35px !important;
        font-size: 18px !important;
    }
    .faq-contact {
        padding: 25px !important;
        margin-top: 30px !important;
    }
    .faq-contact-title {
        font-size: 16px !important;
    }
    .faq-contact-text {
        font-size: 14px !important;
        margin-bottom: 20px !important;
    }
    .faq-contact-btn {
        padding: 12px 25px !important;
        font-size: 14px !important;
        gap: 10px !important;
    }
}

@media (max-width: 375px) {
    .resources-hero h1 {
        font-size: 24px !important;
    }
    .resources-hero p {
        font-size: 14px !important;
    }
    .resource-card {
        padding: 20px !important;
    }
    .resource-icon {
        width: 50px !important;
        height: 50px !important;
        font-size: 20px !important;
    }
    .resource-title {
        font-size: 17px !important;
    }
    .resource-description {
        font-size: 12px !important;
    }
    .resource-download-btn {
        padding: 8px 16px !important;
        font-size: 11px !important;
    }
    .faq-title {
        font-size: 24px !important;
    }
    .faq-subtitle {
        font-size: 14px !important;
    }
    .faq-item {
        padding: 18px !important;
    }
    .faq-question {
        font-size: 14px !important;
    }
    .faq-answer {
        font-size: 12px !important;
    }
}

/* Grid Responsive */
@media (min-width: 769px) and (max-width: 992px) {
    .resources-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (min-width: 993px) and (max-width: 1200px) {
    .resources-grid {
        grid-template-columns: repeat(3, 1fr) !important;
    }
}

/* Landscape Mode */
@media (max-width: 992px) and (orientation: landscape) {
    .resources-hero {
        padding: 70px 5% 40px 5% !important;
    }
    .resources-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    .faq-section {
        padding: 70px 5% !important;
    }
}

/* Tablet Portrait */
@media (min-width: 768px) and (max-width: 992px) and (orientation: portrait) {
    .resources-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

/* Large Desktop */
@media (min-width: 1400px) {
    .resources-grid {
        max-width: 1400px !important;
        margin: 0 auto !important;
    }
}

/* Fix for iOS devices */
@supports (-webkit-touch-callout: none) {
    .resource-card,
    .faq-item,
    .faq-contact {
        backdrop-filter: none !important;
    }
}

/* Hover effects for desktop */
@media (min-width: 992px) {
    .resource-card:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 35px 60px rgba(0,0,0,0.12) !important;
    }
    .resource-download-btn:hover {
        transform: scale(1.05) !important;
    }
    .faq-contact-btn:hover {
        transform: scale(1.05) !important;
        background: #3bc43d !important;
    }
}
</style>

    <div class="resources-page"
        style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #E7E9ED 0%, #E7E9ED 100%);">

        <!-- Hero Section -->
        <section class="resources-hero"
            style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
            <!-- Background Elements -->
            <div
                style="position: absolute; top: 10%; right: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(128,143,189,0.08) 0%, rgba(128,143,189,0) 70%);">
            </div>
            <div
                style="position: absolute; bottom: 20%; left: 10%; width: 150px; height: 150px; border: 2px dashed #46DE48; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);">
            </div>

            <div style="position: relative; z-index: 2;">
                <div class="resources-hero-badge"
                    style="display: inline-flex; align-items: center; padding: 12px 30px; background: #373358, rgba(70,222,72,0.1)); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.8);">
                    <i class="bi bi-journal" style="color: #373358; margin-right: 10px;"></i>
                    KNOWLEDGE RESOURCES
                </div>

                <h1
                    style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                    Essential <span style="color: #373358;">Resources</span><br>for Every Journey
                </h1>

                <p style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    Download comprehensive guides, templates, and educational materials designed for mothers, navigators,
                    and partners. All resources are freely available.
                </p>
            </div>
        </section>

        <!-- Resource Grid -->
        <section style="padding: 100px 10% 100px 10%; background: #E7E9ED;">
            <div style="max-width: 1200px; margin: 0 auto;">
                <div class="resources-grid"
                    style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">

                    <!-- Resource 1 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #DD3134;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                MOTHER'S GUIDE
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Pregnancy Health Guide
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Comprehensive 12-page guide covering nutrition, exercise, warning signs, and trimester-specific
                            care for expectant mothers.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-file-text" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">12 pages</span>
                                </div>

                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(221,49,52,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 2 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #91746E;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #91746E, #DCCEC1); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(145,116,110,0.1); color: #91746E; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                PREPARATION
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Birth Preparedness Checklist
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Essential checklist for delivery preparation including hospital bag items, transport
                            arrangements, and emergency contacts.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-file-text" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">2 pages</span>
                                </div>
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-hdd" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">0.8 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #91746E, #DCCEC1); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(145,116,110,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 3 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #46DE48;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                WARNING SIGNS
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Danger Signs Poster
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Visual poster showing critical warning signs during pregnancy that require immediate medical
                            attention. Available in 4 languages.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-globe" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">4 languages</span>
                                </div>
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-hdd" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">1.2 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(70,222,72,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 4 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #373358;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #373358, #A3B4E0); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(128,143,189,0.1); color: #373358; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                TRAINING
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Navigator Training Manual
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Complete 84-page training curriculum for youth navigators covering protocols, best practices,
                            and emergency response procedures.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-journal-text" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">84 pages</span>
                                </div>
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-hdd" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">8.5 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #373358, #A3B4E0); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(128,143,189,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 5 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #DD3134;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(221,49,52,0.1); color: #DD3134; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                MENTAL HEALTH
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Postpartum Mental Health Guide
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Guide for recognizing and addressing postpartum depression and anxiety, with support strategies
                            and referral pathways.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-file-text" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">16 pages</span>
                                </div>
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-hdd" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">3.1 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #DD3134, #ff6b6b); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(221,49,52,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Resource 6 -->
                    <div class="resource-card"
                        style="background: white; border-radius: 25px; padding: 40px; box-shadow: 0 25px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; transition: all 0.3s ease; border-top: 5px solid #46DE48;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                            <div class="resource-icon"
                                style="width: 70px; height: 70px; background: linear-gradient(135deg, #46DE48, #80E681); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 28px;">
                                <i class="bi bi-hospital"></i>
                            </div>
                            <div class="resource-badge"
                                style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800;">
                                REFERRAL
                            </div>
                        </div>

                        <h3 class="resource-title"
                            style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800; line-height: 1.3;">
                            Emergency Referral Protocol
                        </h3>

                        <p class="resource-description"
                            style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 30px;">
                            Step-by-step protocol for emergency maternal referrals, including transport coordination and
                            facility communication procedures.
                        </p>

                        <div
                            style="display: flex; justify-content: space-between; align-items: center; padding-top: 25px; border-top: 1px solid #f0f0f0;">
                            <div class="resource-meta" style="display: flex; align-items: center; gap: 15px;">
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-file-text" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">8 pages</span>
                                </div>
                                <div class="resource-meta-item" style="display: flex; align-items: center; gap: 8px;">
                                    <i class="bi bi-hdd" style="color: #373358; font-size: 14px;"></i>
                                    <span style="font-size: 13px; color: #373358; font-weight: 600;">1.8 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void()" class="resource-download-btn"
                                style="display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #46DE48, #80E681); color: white; text-decoration: none; padding: 12px 24px; border-radius: 20px; font-weight: 800; font-size: 14px; box-shadow: 0 10px 20px rgba(70,222,72,0.2); transition: all 0.3s ease;">
                                Download <i class="bi bi-download" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section"
            style="padding: 120px 10%; background: linear-gradient(135deg, #363558 0%, #434961 100%); color: white; position: relative;">
            <!-- Grid Pattern -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;">
            </div>

            <div style="position: relative; z-index: 2; max-width: 1000px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <div
                        style="display: inline-flex; align-items: center; background: rgba(255,255,255,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <span style="color: #46DE48; margin-right: 10px;">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <div style="font-size: 14px; font-weight: 800;">FREQUENTLY ASKED QUESTIONS</div>
                    </div>

                    <h2 class="faq-title" style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                        Common <span style="color: #46DE48;">Questions</span> Answered
                    </h2>

                    <p class="faq-subtitle"
                        style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                        Find quick answers to the most common questions about safeMom Navigator services, registration, and
                        partnerships.
                    </p>
                </div>

                <!-- FAQ Items -->
                <div style="display: grid; gap: 20px;">
                    <!-- FAQ 1 -->
                    <div class="faq-item"
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div class="faq-question"
                                    style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How do I
                                    register for safeMom Navigator services?</div>
                                <div class="faq-answer"
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; display: block;">
                                    Registration is simple! You can register by calling our toll-free number (+256 700 123
                                    456), visiting any local health center in our coverage areas, or through community
                                    health workers. No documents are required for initial registration.
                                </div>
                            </div>
                            <div class="faq-toggle"
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item"
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div class="faq-question"
                                    style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">Is there a
                                    cost for the services?</div>
                                <div class="faq-answer"
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; display: block;">
                                    All safeMom Navigator services are completely free of charge. This includes SMS
                                    reminders, home visits by navigators, emergency transport coordination, and all
                                    educational materials. We are funded through partnerships and grants.
                                </div>
                            </div>
                            <div class="faq-toggle"
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item"
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div class="faq-question"
                                    style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">What areas
                                    do you cover?</div>
                                <div class="faq-answer"
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; display: block;">
                                    We currently operate in 24 districts across Uganda's four regions: Central (7
                                    districts), Eastern (5 districts), Northern (6 districts), and Western (6 districts).
                                    We're expanding to reach all 135 districts by 2025.
                                </div>
                            </div>
                            <div class="faq-toggle"
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item"
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div class="faq-question"
                                    style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How do I
                                    become a youth navigator?</div>
                                <div class="faq-answer"
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; display: block;">
                                    We recruit youth (18-30 years) from local communities. Requirements include completion
                                    of secondary education, passion for maternal health, and commitment to serving your
                                    community. Training is provided free of charge.
                                </div>
                            </div>
                            <div class="faq-toggle"
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item"
                        style="background: rgba(255,255,255,0.05); border-radius: 25px; overflow: hidden; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
                        <div
                            style="padding: 30px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                            <div style="flex: 1;">
                                <div class="faq-question"
                                    style="font-size: 18px; font-weight: 800; margin-bottom: 10px; color: white;">How can my
                                    organization partner with safeMom Navigator?</div>
                                <div class="faq-answer"
                                    style="font-size: 14px; opacity: 0.8; line-height: 1.6; display: block;">
                                    We partner with health facilities, NGOs, government agencies, and corporate
                                    organizations. Partnership opportunities include program implementation, funding,
                                    research collaboration, and advocacy. Contact our partnerships team at
                                    partnerships@safemomug.org
                                </div>
                            </div>
                            <div class="faq-toggle"
                                style="width: 40px; height: 40px; background: rgba(70,222,72,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 20px; flex-shrink: 0;">
                                -
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Contact -->
                <div class="faq-contact"
                    style="background: rgba(70,222,72,0.1); padding: 40px; border-radius: 25px; backdrop-filter: blur(10px); border: 1px solid rgba(70,222,72,0.2); margin-top: 50px; text-align: center;">
                    <div class="faq-contact-title"
                        style="font-size: 20px; font-weight: 800; margin-bottom: 15px; color: white;">Still have questions?
                    </div>
                    <p class="faq-contact-text"
                        style="font-size: 16px; opacity: 0.8; margin-bottom: 25px; max-width: 600px; margin-left: auto; margin-right: auto;">
                        Contact our support team for personalized assistance with any questions not covered here.
                    </p>
                    <a href="javascript:void()" class="faq-contact-btn"
                        style="display: inline-flex; align-items: center; gap: 12px; background: #46DE48; color: white; text-decoration: none; padding: 16px 35px; border-radius: 25px; font-weight: 800; font-size: 16px; box-shadow: 0 10px 20px rgba(70,222,72,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-telephone"></i> Contact Support <i class="bi bi-arrow-right"
                            style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>
        </section>

    </div>


@endsection