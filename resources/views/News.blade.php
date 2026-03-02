@extends('layouts.apps')

@section('content')

<style>
/* ===== NEWSROOM PAGE - FULLY RESPONSIVE ===== */
/* No layout changes - only responsive overrides */

/* Hero Section */
@media (max-width: 1200px) {
    .newsroom-section {
        padding-left: 5% !important;
        padding-right: 5% !important;
    }
    .newsroom-title {
        font-size: 56px !important;
    }
}

@media (max-width: 992px) {
    .newsroom-section {
        padding: 80px 5% 60px 5% !important;
    }
    .newsroom-title {
        font-size: 48px !important;
    }
    .newsroom-title span {
        font-size: 18px !important;
        letter-spacing: 4px !important;
    }
    .newsroom-subtitle {
        font-size: 18px !important;
    }
    .featured-story {
        flex-direction: column !important;
        min-height: auto !important;
    }
    .featured-image-container {
        flex: none !important;
        width: 100% !important;
        clip-path: none !important;
        height: 400px !important;
    }
    .featured-content {
        padding: 50px !important;
    }
    .featured-title {
        font-size: 36px !important;
    }
    .news-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 30px !important;
    }
    .as-seen-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 30px !important;
    }
    .newsletter-form {
        flex-direction: column !important;
        max-width: 500px !important;
    }
    .newsletter-input {
        width: 100% !important;
        padding: 20px 30px !important;
        font-size: 16px !important;
    }
    .newsletter-button {
        width: 100% !important;
        padding: 20px 30px !important;
        font-size: 16px !important;
    }
}

@media (max-width: 768px) {
    .newsroom-section {
        padding: 60px 4% 40px 4% !important;
    }
    .newsroom-title {
        font-size: 40px !important;
    }
    .newsroom-title span {
        font-size: 16px !important;
        letter-spacing: 3px !important;
        margin-bottom: 15px !important;
    }
    .newsroom-subtitle {
        font-size: 16px !important;
        margin-bottom: 40px !important;
    }
    .newsroom-hero-btn {
        padding: 12px 30px !important;
        font-size: 14px !important;
    }
    .featured-image-container {
        height: 350px !important;
    }
    .featured-badge {
        top: 30px !important;
        left: 30px !important;
        padding: 10px 25px !important;
        font-size: 12px !important;
    }
    .featured-content {
        padding: 40px !important;
    }
    .featured-title {
        font-size: 32px !important;
        margin-bottom: 20px !important;
    }
    .featured-quote {
        font-size: 16px !important;
        margin-bottom: 40px !important;
        padding-left: 20px !important;
    }
    .featured-quote span {
        font-size: 50px !important;
    }
    .featured-btn {
        padding: 15px 30px !important;
        font-size: 15px !important;
        gap: 10px !important;
    }
    .featured-share {
        font-size: 14px !important;
    }
    .news-grid {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    .news-card {
        transform: rotate(0deg) !important;
    }
    .news-card:hover {
        transform: translateY(-10px) !important;
    }
    .news-card-image {
        height: 220px !important;
    }
    .news-card-badge {
        top: 20px !important;
        left: 20px !important;
        padding: 6px 16px !important;
        font-size: 11px !important;
    }
    .news-card-content {
        padding: 30px !important;
    }
    .news-card-title {
        font-size: 22px !important;
        margin-bottom: 15px !important;
    }
    .news-card-excerpt {
        font-size: 15px !important;
        margin-bottom: 25px !important;
    }
    .news-card-date {
        font-size: 13px !important;
    }
    .news-card-link {
        font-size: 13px !important;
    }
    .view-all {
        margin-top: 70px !important;
    }
    .view-all-line {
        width: 60px !important;
    }
    .view-all-text {
        font-size: 16px !important;
    }
    .as-seen-section {
        padding-bottom: 80px !important;
    }
    .as-seen-container {
        padding: 50px 30px !important;
    }
    .as-seen-title {
        font-size: 12px !important;
        letter-spacing: 3px !important;
        margin-bottom: 40px !important;
    }
    .as-seen-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 20px !important;
    }
    .as-seen-item {
        padding: 30px 15px !important;
    }
    .as-seen-item span {
        font-size: 20px !important;
    }
    .newsletter-section {
        padding-bottom: 100px !important;
    }
    .newsletter-container {
        padding: 60px 40px !important;
    }
    .newsletter-title {
        font-size: 40px !important;
        margin-bottom: 20px !important;
    }
    .newsletter-description {
        font-size: 18px !important;
        margin-bottom: 40px !important;
    }
    .newsletter-form {
        max-width: 100% !important;
    }
    .newsletter-input {
        padding: 18px 25px !important;
        font-size: 16px !important;
        border-radius: 15px !important;
    }
    .newsletter-button {
        padding: 18px 25px !important;
        font-size: 16px !important;
        border-radius: 15px !important;
    }
    .newsletter-count {
        font-size: 13px !important;
        margin-top: 25px !important;
    }
}

@media (max-width: 576px) {
    .newsroom-section {
        padding: 40px 4% 30px 4% !important;
    }
    .newsroom-title {
        font-size: 32px !important;
    }
    .newsroom-title span {
        font-size: 14px !important;
        letter-spacing: 2px !important;
        margin-bottom: 12px !important;
    }
    .newsroom-subtitle {
        font-size: 15px !important;
        margin-bottom: 35px !important;
    }
    .newsroom-hero-btn {
        padding: 10px 25px !important;
        font-size: 13px !important;
    }
    .featured-image-container {
        height: 300px !important;
    }
    .featured-badge {
        top: 20px !important;
        left: 20px !important;
        padding: 8px 20px !important;
        font-size: 11px !important;
    }
    .featured-content {
        padding: 30px !important;
    }
    .featured-meta {
        gap: 10px !important;
        margin-bottom: 20px !important;
    }
    .featured-dot {
        width: 8px !important;
        height: 8px !important;
    }
    .featured-date {
        font-size: 13px !important;
    }
    .featured-title {
        font-size: 26px !important;
        margin-bottom: 15px !important;
    }
    .featured-quote {
        font-size: 15px !important;
        margin-bottom: 30px !important;
        padding-left: 15px !important;
    }
    .featured-quote span {
        font-size: 40px !important;
        top: -10px !important;
    }
    .featured-btn {
        padding: 12px 25px !important;
        font-size: 14px !important;
        gap: 8px !important;
    }
    .featured-btn span {
        font-size: 20px !important;
    }
    .featured-share {
        gap: 8px !important;
        font-size: 13px !important;
    }
    .featured-share span {
        font-size: 18px !important;
    }
    .news-grid {
        gap: 25px !important;
    }
    .news-card-image {
        height: 200px !important;
    }
    .news-card-badge {
        padding: 5px 14px !important;
        font-size: 10px !important;
    }
    .news-card-content {
        padding: 25px !important;
    }
    .news-card-title {
        font-size: 20px !important;
        margin-bottom: 12px !important;
    }
    .news-card-excerpt {
        font-size: 14px !important;
        margin-bottom: 20px !important;
    }
    .news-card-footer {
        padding-top: 20px !important;
    }
    .news-card-date {
        font-size: 12px !important;
    }
    .news-card-link {
        font-size: 12px !important;
        gap: 5px !important;
    }
    .news-card-link span {
        font-size: 18px !important;
    }
    .view-all {
        margin-top: 50px !important;
    }
    .view-all-line {
        width: 40px !important;
    }
    .view-all-text {
        font-size: 14px !important;
    }
    .as-seen-section {
        padding-bottom: 60px !important;
    }
    .as-seen-container {
        padding: 40px 20px !important;
        border-radius: 20px !important;
    }
    .as-seen-title {
        font-size: 11px !important;
        letter-spacing: 2px !important;
        margin-bottom: 30px !important;
    }
    .as-seen-grid {
        gap: 15px !important;
    }
    .as-seen-item {
        padding: 25px 10px !important;
        border-radius: 15px !important;
    }
    .as-seen-item span {
        font-size: 16px !important;
    }
    .newsletter-section {
        padding-bottom: 80px !important;
    }
    .newsletter-container {
        padding: 50px 30px !important;
        border-radius: 25px !important;
    }
    .newsletter-title {
        font-size: 32px !important;
        margin-bottom: 15px !important;
    }
    .newsletter-description {
        font-size: 16px !important;
        margin-bottom: 35px !important;
        max-width: 100% !important;
    }
    .newsletter-input {
        padding: 16px 20px !important;
        font-size: 15px !important;
        border-radius: 12px !important;
    }
    .newsletter-button {
        padding: 16px 20px !important;
        font-size: 15px !important;
        border-radius: 12px !important;
    }
    .newsletter-count {
        font-size: 12px !important;
        margin-top: 20px !important;
    }
}

@media (max-width: 375px) {
    .newsroom-title {
        font-size: 28px !important;
    }
    .newsroom-title span {
        font-size: 12px !important;
        letter-spacing: 1.5px !important;
    }
    .newsroom-subtitle {
        font-size: 14px !important;
    }
    .featured-image-container {
        height: 250px !important;
    }
    .featured-content {
        padding: 25px !important;
    }
    .featured-title {
        font-size: 22px !important;
    }
    .featured-quote {
        font-size: 14px !important;
    }
    .featured-btn {
        padding: 10px 20px !important;
        font-size: 13px !important;
    }
    .news-card-title {
        font-size: 18px !important;
    }
    .news-card-excerpt {
        font-size: 13px !important;
    }
    .as-seen-grid {
        grid-template-columns: 1fr !important;
    }
    .as-seen-item span {
        font-size: 18px !important;
    }
    .newsletter-title {
        font-size: 28px !important;
    }
    .newsletter-description {
        font-size: 15px !important;
    }
}

/* Landscape Mode */
@media (max-width: 992px) and (orientation: landscape) {
    .featured-story {
        min-height: 450px !important;
    }
    .featured-image-container {
        height: 350px !important;
    }
    .news-grid {
        grid-template-columns: repeat(3, 1fr) !important;
    }
}

/* Tablet Portrait Specific */
@media (min-width: 768px) and (max-width: 992px) and (orientation: portrait) {
    .news-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    .as-seen-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

/* Fix hover effects for touch devices */
@media (hover: none) and (pointer: coarse) {
    .news-card:hover {
        transform: rotate(0deg) !important;
        box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15) !important;
    }
    .featured-btn:hover {
        background-color: #363558 !important;
        transform: none !important;
    }
    .newsletter-button:hover {
        transform: none !important;
        box-shadow: 0 15px 30px rgba(54, 53, 88, 0.4) !important;
    }
}

/* Fix for iOS devices */
@supports (-webkit-touch-callout: none) {
    .featured-story,
    .news-card,
    .as-seen-item,
    .newsletter-container {
        -webkit-backdrop-filter: none !important;
        backdrop-filter: none !important;
    }
}

/* Large Desktop */
@media (min-width: 1400px) {
    .newsroom-section {
        max-width: 1400px !important;
        margin: 0 auto !important;
    }
    .featured-story {
        max-width: 1400px !important;
        margin: 0 auto !important;
    }
    .news-grid {
        max-width: 1400px !important;
        margin: 0 auto !important;
    }
}

/* Print styles */
@media print {
    .newsroom-section {
        break-inside: avoid;
    }
    .news-card {
        break-inside: avoid;
    }
}
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #E7E9ED; padding-bottom: 80px; padding-top: 100px; overflow: hidden;">

    <!-- Hero Section -->
    <section class="newsroom-section" style="padding: 100px 10% 80px 10%; text-align: center; position: relative;">
        <div style="position: absolute; top: 50px; left: 10%; width: 100px; height: 100px; background: #46DE48; opacity: 0.1; border-radius: 50%;"></div>
        <div style="position: absolute; top: 150px; right: 10%; width: 150px; height: 150px; background: #DD3134; opacity: 0.1; border-radius: 50%;"></div>
        
        <h1 class="newsroom-title" style="font-size: 64px; font-weight: 900; color: #363558; margin-bottom: 30px; line-height: 1; position: relative; z-index: 2;">
            <span style="display: block; font-size: 20px; color: #DD3134; font-weight: 700; letter-spacing: 5px; margin-bottom: 20px;">UPDATES & STORIES</span>
            safeMom Newsroom
        </h1>
        <p class="newsroom-subtitle" style="font-size: 20px; color: #91746E; max-width: 800px; margin: 0 auto 60px auto; line-height: 1.6; position: relative; z-index: 2;">
            Stay up to date with our latest expansions, community impact stories, and innovations in maternal health.
        </p>
        <div class="newsroom-hero-btn" style="display: inline-block; padding: 15px 40px; background: #363558; color: white; border-radius: 10px; font-size: 16px; font-weight: 800; position: relative; z-index: 2; box-shadow: 0 10px 30px rgba(54, 53, 88, 0.3);">Explore Our Latest News</div>
    </section>

    <!-- Featured Story -->
    <section class="newsroom-section" style="padding: 0 10% 100px 10%;">
        <div class="featured-story" style="border-radius: 40px; overflow: hidden; display: flex; min-height: 500px; background: white; box-shadow: 0 30px 60px rgba(128, 143, 189, 0.2); position: relative;">
            <div class="featured-image-container" style="flex: 1.3; position: relative; overflow: hidden; clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);">
                <div style="width: 100%; height: 100%; background: linear-gradient(45deg, #363558, #2d2a4a); position: relative;">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=800" style="width: 100%; height: 100%; object-fit: cover; mix-blend-mode: overlay; opacity: 0.7;">
                </div>
                <div class="featured-badge" style="position: absolute; top: 40px; left: 40px; background: #DD3134; color: white; padding: 12px 30px; border-radius: 10px; font-size: 14px; font-weight: 900; transform: rotate(-5deg); box-shadow: 0 10px 20px rgba(221, 49, 52, 0.4);">FEATURED STORY</div>
            </div>
            <div class="featured-content" style="flex: 1; padding: 70px 60px; display: flex; flex-direction: column; justify-content: center; position: relative;">
                <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: #46DE48; border-radius: 50%; opacity: 0.1;"></div>
                
                <div class="featured-meta" style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                    <div class="featured-dot" style="width: 10px; height: 10px; background: #46DE48; border-radius: 50%;"></div>
                    <div class="featured-date" style="font-size: 15px; color: #373358; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">March 15, 2024 • Press Release</div>
                </div>
                
                <h2 class="featured-title" style="font-size: 44px; color: #363558; font-weight: 900; margin-bottom: 30px; line-height: 1.1;">safeMom Navigator Expands to Northern Uganda</h2>
                
                <p class="featured-quote" style="color: #91746E; line-height: 1.8; margin-bottom: 50px; font-size: 18px; position: relative; padding-left: 30px;">
                    <span style="position: absolute; left: 0; top: 0; font-size: 60px; line-height: 1; color: #DD3134; font-weight: 900; opacity: 0.3;">"</span>
                    We are thrilled to announce our official launch in Gulu and Lira districts, bringing our network of youth navigators to over 500 new mothers this month alone.
                </p>
                
                <div style="display: flex; align-items: center; gap: 30px;">
                    <a href="javascript:void()" class="featured-btn" style="color: white; font-weight: 900; text-decoration: none; display: flex; align-items: center; gap: 15px; background: #363558; padding: 20px 40px; border-radius: 15px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#DD3134'; this.style.transform='translateY(-5px)'" onmouseout="this.style.backgroundColor='#363558'; this.style.transform='translateY(0)'">Read Full Story <span style="font-size: 24px;">⟶</span></a>
                    <a href="javascript:void()" class="featured-share" style="color: #363558; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px;">Share <span style="font-size: 20px;">↗</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Cards -->
    <section class="newsroom-section" style="padding: 0 10% 120px 10%; position: relative;">
        <div style="position: absolute; top: -50px; left: 5%; width: 200px; height: 200px; background: #373358; opacity: 0.05; border-radius: 50%;"></div>
        
        <div class="news-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 50px; position: relative; z-index: 2;">
            
            <div class="news-card" style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(-1deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(-1deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div class="news-card-image" style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="news-card-badge" style="position: absolute; top: 25px; left: 25px; background: #46DE48; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">INNOVATION</div>
                </div>
                <div class="news-card-content" style="padding: 40px 35px;">
                    <h3 class="news-card-title" style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">New SMS Language Support: Swahili & Luganda</h3>
                    <p class="news-card-excerpt" style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">Our reminder system now supports two additional local languages to improve accessibility.</p>
                    <div class="news-card-footer" style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div class="news-card-date" style="font-size: 14px; color: #373358; font-weight: 800;">Feb 28, 2024</div>
                        <a href="javascript:void()" class="news-card-link" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>

            <div class="news-card" style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(1deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(1deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div class="news-card-image" style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="news-card-badge" style="position: absolute; top: 25px; left: 25px; background: #DD3134; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">COMMUNITY</div>
                </div>
                <div class="news-card-content" style="padding: 40px 35px;">
                    <h3 class="news-card-title" style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">Navigator Spotlight: Meet Sarah from Jinja</h3>
                    <p class="news-card-excerpt" style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">Discover how one young leader is transforming maternal health outcomes in her village.</p>
                    <div class="news-card-footer" style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div class="news-card-date" style="font-size: 14px; color: #373358; font-weight: 800;">Feb 12, 2024</div>
                        <a href="javascript:void()" class="news-card-link" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>

            <div class="news-card" style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 50px rgba(128, 143, 189, 0.15); transform: rotate(-2deg); transition: all 0.4s ease;" onmouseover="this.style.transform='rotate(0deg) translateY(-20px)'; this.style.boxShadow='0 30px 60px rgba(128, 143, 189, 0.25)'" onmouseout="this.style.transform='rotate(-2deg)'; this.style.boxShadow='0 20px 50px rgba(128, 143, 189, 0.15)'">
                <div class="news-card-image" style="height: 250px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="news-card-badge" style="position: absolute; top: 25px; left: 25px; background: #373358; color: white; padding: 8px 20px; border-radius: 30px; font-size: 12px; font-weight: 900; transform: rotate(-5deg);">PARTNERSHIPS</div>
                </div>
                <div class="news-card-content" style="padding: 40px 35px;">
                    <h3 class="news-card-title" style="font-size: 26px; color: #363558; margin-bottom: 25px; font-weight: 900; line-height: 1.2;">safeMom Joins Global Health Alliance</h3>
                    <p class="news-card-excerpt" style="font-size: 16px; color: #91746E; line-height: 1.7; margin-bottom: 30px;">A new partnership aimed at scaling our low-tech emergency referral model nationwide.</p>
                    <div class="news-card-footer" style="display: flex; align-items: center; justify-content: space-between; border-top: 2px solid #DCCEC1; padding-top: 25px;">
                        <div class="news-card-date" style="font-size: 14px; color: #373358; font-weight: 800;">Jan 25, 2024</div>
                        <a href="javascript:void()" class="news-card-link" style="color: #363558; font-weight: 900; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">READ MORE <span style="font-size: 20px;">→</span></a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Newsletter -->
    <section class="newsroom-section newsletter-section" style="padding: 0 10% 120px 10%;">
        <div class="newsletter-container" style="background: #46DE48; border-radius: 40px; padding: 100px 80px; color: white; text-align: center; position: relative; overflow: hidden; box-shadow: 0 30px 60px rgba(221, 49, 52, 0.3);">
            <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: white; border-radius: 50%; opacity: 0.1;"></div>
            <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: white; border-radius: 50%; opacity: 0.1;"></div>
            
            <h2 class="newsletter-title" style="font-size: 52px; font-weight: 900; margin-bottom: 30px; line-height: 1.1; position: relative; z-index: 2;">Never Miss an Update</h2>
            <p class="newsletter-description" style="font-size: 20px; opacity: 0.9; margin-bottom: 60px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6; position: relative; z-index: 2;">
                Subscribe to our monthly newsletter for the latest updates, impact stories, and innovations in maternal health.
            </p>
            
            <div class="newsletter-form" style="display: flex; gap: 20px; justify-content: center; position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
                <input type="email" placeholder="Your email address" class="newsletter-input" style="flex: 1; padding: 25px 35px; border-radius: 20px; border: none; font-size: 18px; background: rgba(255,255,255,0.9); color: #363558; font-weight: 600;">
                <button class="newsletter-button" style="background: #363558; color: white; border: none; padding: 25px 60px; border-radius: 20px; font-weight: 900; font-size: 18px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 15px 30px rgba(54, 53, 88, 0.4);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(54, 53, 88, 0.6)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(54, 53, 88, 0.4)'">Subscribe Now</button>
            </div>
            
            <div class="newsletter-count" style="font-size: 14px; opacity: 0.8; margin-top: 30px; position: relative; z-index: 2;">
                Join over 10,000 subscribers who receive our monthly updates
            </div>
        </div>
    </section>

</div>

@endsection