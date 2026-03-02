@extends('layouts.apps')

@section('content')

<style>
/* ===== ANIMATION KEYFRAMES ===== */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

@keyframes floatRight {
    0% { transform: translateY(0px) rotate(15deg); }
    50% { transform: translateY(-15px) rotate(15deg); }
    100% { transform: translateY(0px) rotate(15deg); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

@keyframes checkmarkPop {
    0% { transform: scale(0.8); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}

@keyframes rotateIn {
    from {
        opacity: 0;
        transform: rotate(-10deg) scale(0.9);
    }
    to {
        opacity: 1;
        transform: rotate(0deg) scale(1);
    }
}

@keyframes numberCount {
    from { opacity: 0; transform: scale(0.8); }
    to { opacity: 1; transform: scale(1); }
}

@keyframes badgePulse {
    0% { box-shadow: 0 8px 20px rgba(70,222,72,0.3); }
    50% { box-shadow: 0 12px 30px rgba(70,222,72,0.5); }
    100% { box-shadow: 0 8px 20px rgba(70,222,72,0.3); }
}

@keyframes growBar {
    from { height: 0; opacity: 0; }
    to { opacity: 1; }
}

@keyframes growProgress {
    from { width: 0; }
    to { width: var(--target-width); }
}

@keyframes scaleIn {
    from { transform: scale(0); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

/* ===== ANIMATION CLASSES ===== */
.animate-on-load {
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
}

.animate-on-load-delay-1 {
    animation: fadeInUp 0.8s ease-out 0.2s forwards;
    opacity: 0;
}

.animate-on-load-delay-2 {
    animation: fadeInUp 0.8s ease-out 0.4s forwards;
    opacity: 0;
}

.animate-on-load-delay-3 {
    animation: fadeInUp 0.8s ease-out 0.6s forwards;
    opacity: 0;
}

.animate-on-load-delay-4 {
    animation: fadeInUp 0.8s ease-out 0.8s forwards;
    opacity: 0;
}

.animate-on-load-delay-5 {
    animation: fadeInUp 0.8s ease-out 1.0s forwards;
    opacity: 0;
}

.slide-in-left {
    animation: slideInLeft 0.8s ease-out forwards;
    opacity: 0;
}

.slide-in-right {
    animation: slideInRight 0.8s ease-out forwards;
    opacity: 0;
}

.fade-in {
    animation: fadeIn 1s ease-out forwards;
    opacity: 0;
}

.floating-bg {
    animation: float 6s ease-in-out infinite;
}

.floating-bg-right {
    animation: floatRight 8s ease-in-out infinite;
}

.pulse-element {
    animation: pulse 2s ease-in-out infinite;
}

.badge-pulse {
    animation: badgePulse 3s ease-in-out infinite;
}

.shimmer-effect {
    position: relative;
    overflow: hidden;
}
.shimmer-effect::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 3s infinite;
}

.rotate-in {
    animation: rotateIn 0.6s ease-out forwards;
}

.number-animate {
    animation: numberCount 0.8s ease-out forwards;
}

/* ===== CHART BAR ANIMATIONS ===== */
.chart-bars, .chart-bars-green, .regional-bar {
    animation: growBar 1.2s ease-out forwards;
    transform-origin: bottom;
}

.chart-bars {
    animation-name: growBar;
    animation-duration: 1.2s;
}

.chart-bars-green {
    animation-name: growBar;
    animation-duration: 1.4s;
    animation-delay: 0.2s;
}

.regional-bar {
    animation-name: growBar;
    animation-duration: 1.2s;
}

.regional-bar:nth-child(1) { animation-delay: 0.1s; }
.regional-bar:nth-child(2) { animation-delay: 0.2s; }
.regional-bar:nth-child(3) { animation-delay: 0.3s; }
.regional-bar:nth-child(4) { animation-delay: 0.4s; }

/* ===== PROGRESS BAR ANIMATIONS ===== */
.progress-fill {
    animation: growProgress 1.5s ease-out forwards;
    width: 0;
}

/* ===== HOVER EFFECTS ===== */
.stat-card,
.report-card,
.story-card,
.regional-progress-container > div,
.summary-impact > div > div {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.stat-card:hover,
.report-card:hover,
.story-card:hover,
.regional-progress-container > div:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.12) !important;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 20px 40px rgba(0,0,0,0.25) !important;
}

.report-card:hover .report-icon {
    transform: scale(1.1) rotate(5deg);
}

.story-card:hover .story-image img {
    transform: scale(1.05);
}

.story-image img {
    transition: transform 0.5s ease;
}

.story-badge {
    transition: all 0.3s ease;
}
.story-card:hover .story-badge {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.stat-icon,
.report-icon,
.region-name,
.region-number,
.summary-number,
.summary-label {
    transition: all 0.3s ease;
}

.region-name {
    transition: color 0.3s ease;
}
.regional-progress-container > div:hover .region-name {
    color: #DD3134 !important;
}

.region-number {
    transition: transform 0.3s ease, color 0.3s ease;
}
.regional-progress-container > div:hover .region-number {
    transform: scale(1.2);
}

button,
.download-link {
    transition: all 0.3s ease !important;
}
button:hover,
.download-link:hover {
    transform: translateY(-3px);
    filter: brightness(1.1);
}

.download-link span {
    transition: transform 0.3s ease;
}
.download-link:hover span {
    transform: translateX(5px);
}

/* ===== STAGGER CHILDREN ===== */
.stagger-children > * {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}
.stagger-children > *:nth-child(1) { animation-delay: 0.1s; }
.stagger-children > *:nth-child(2) { animation-delay: 0.2s; }
.stagger-children > *:nth-child(3) { animation-delay: 0.3s; }
.stagger-children > *:nth-child(4) { animation-delay: 0.4s; }
.stagger-children > *:nth-child(5) { animation-delay: 0.5s; }

/* ===== QUOTE ANIMATION ===== */
.story-content div[style*="font-size: 32px"] {
    animation: scaleIn 0.8s ease-out forwards;
    transform-origin: top left;
}

/* ===== RESPONSIVE STYLES ===== */
@media (max-width: 1200px) {
    section {
        padding-left: 5% !important;
        padding-right: 5% !important;
    }
}

@media (max-width: 992px) {
    h1 {
        font-size: 48px !important;
    }
    h2 {
        font-size: 40px !important;
    }
    .stats-grid {
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 20px !important;
    }
    .regional-layout {
        flex-direction: column !important;
        gap: 40px !important;
    }
    .stories-grid {
        grid-template-columns: 1fr !important;
    }
    .reports-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    .chart-bars {
        width: 15px !important;
    }
}

@media (max-width: 768px) {
    section {
        padding: 60px 5% !important;
    }
    h1 {
        font-size: 36px !important;
    }
    h2 {
        font-size: 32px !important;
    }
    .hero-description {
        font-size: 16px !important;
    }
    .stats-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    .stat-card {
        padding: 25px 15px !important;
    }
    .stat-number {
        font-size: 32px !important;
    }
    .stat-icon {
        width: 50px !important;
        height: 50px !important;
        font-size: 20px !important;
    }
    .chart-container {
        height: 300px !important;
        padding: 30px !important;
    }
    .y-axis-labels {
        width: 40px !important;
    }
    .chart-area {
        left: 40px !important;
    }
    .chart-bars {
        width: 14px !important;
    }
    .chart-bars-green {
        margin-left: 18px !important;
    }
    .regional-progress-container {
        padding: 30px !important;
    }
    .regional-chart-bars {
        width: 50px !important;
    }
    .story-card {
        flex-direction: column !important;
        height: auto !important;
    }
    .story-content {
        padding: 30px !important;
    }
    .story-image {
        height: 200px !important;
    }
    .reports-grid {
        grid-template-columns: 1fr !important;
    }
    .report-card {
        padding: 30px !important;
    }
    .summary-impact {
        padding: 40px !important;
        margin-top: 60px !important;
    }
    .summary-grid {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    .summary-number {
        font-size: 48px !important;
    }
    .chart-legend {
        flex-direction: column !important;
        gap: 15px !important;
        align-items: flex-start !important;
    }
}

@media (max-width: 576px) {
    section {
        padding: 40px 4% !important;
    }
    h1 {
        font-size: 28px !important;
        letter-spacing: -0.5px !important;
    }
    h2 {
        font-size: 28px !important;
    }
    .hero-badge {
        padding: 10px 20px !important;
        font-size: 12px !important;
    }
    .stats-grid {
        grid-template-columns: 1fr !important;
    }
    .stat-card {
        padding: 30px 20px !important;
    }
    .chart-container {
        height: 250px !important;
        padding: 20px !important;
    }
    .chart-area {
        left: 35px !important;
    }
    .chart-bars {
        width: 12px !important;
    }
    .chart-bars-green {
        margin-left: 16px !important;
    }
    .x-axis-labels div {
        font-size: 10px !important;
    }
    .regional-title {
        font-size: 28px !important;
    }
    .regional-chart-container {
        padding: 20px !important;
    }
    .regional-bars-container {
        height: 250px !important;
        gap: 10px !important;
    }
    .regional-bar {
        width: 40px !important;
    }
    .stories-title {
        font-size: 28px !important;
    }
    .story-quote {
        font-size: 14px !important;
    }
    .story-author {
        font-size: 16px !important;
    }
    .story-badge {
        padding: 6px 12px !important;
        font-size: 10px !important;
        top: 10px !important;
        right: 10px !important;
    }
    .reports-title {
        font-size: 28px !important;
    }
    .report-icon {
        width: 60px !important;
        height: 60px !important;
        font-size: 24px !important;
    }
    .report-badge {
        padding: 6px 14px !important;
        font-size: 11px !important;
    }
    .report-heading {
        font-size: 18px !important;
    }
    .report-description {
        font-size: 14px !important;
    }
    .summary-number {
        font-size: 40px !important;
    }
}

@media (max-width: 375px) {
    h1 {
        font-size: 24px !important;
    }
    h2 {
        font-size: 24px !important;
    }
    .chart-container {
        padding: 15px !important;
    }
    .chart-area {
        left: 30px !important;
    }
    .chart-bars {
        width: 10px !important;
    }
    .chart-bars-green {
        margin-left: 14px !important;
    }
    .regional-bar {
        width: 30px !important;
    }
}

@supports (-webkit-touch-callout: none) {
    .stat-card, .report-card, .story-card {
        backdrop-filter: none !important;
    }
}

@media (max-width: 992px) and (orientation: landscape) {
    .stats-grid {
        grid-template-columns: repeat(5, 1fr) !important;
    }
    .stories-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media print {
    section {
        break-inside: avoid;
    }
}

@media (hover: none) and (pointer: coarse) {
    .stat-card:hover,
    .report-card:hover,
    .story-card:hover,
    .regional-progress-container > div:hover {
        transform: none;
    }
    
    button:hover {
        transform: none;
    }
}
</style>


<style>
/* ========== SPACING REDUCTIONS FOR IMPACT & REPORTS PAGE ========== */

/* Override section paddings */
section[style*="padding: 120px 10% 80px 10%"] {
    padding: 40px 5% 30px 5% !important;
}

section[style*="padding: 80px 10%"] {
    padding: 30px 5% !important;
}

section[style*="padding: 100px 10%"] {
    padding: 30px 5% !important;
}

/* Reduce hero section margin */
.hero-badge[style*="display: inline-flex; align-items: center; padding: 12px 30px; margin-bottom: 25px"] {
    padding: 6px 15px !important;
    margin-bottom: 10px !important;
    font-size: 12px !important;
}

h1[style*="font-size: 64px; margin: 0 0 25px 0"] {
    font-size: 36px !important;
    margin-bottom: 8px !important;
}

.hero-description[style*="font-size: 20px; max-width: 800px; margin: 0 auto"] {
    font-size: 15px !important;
}

/* Stats section */
.stats-grid[style*="display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px"] {
    gap: 10px !important;
}

.stat-card[style*="padding: 40px 20px"] {
    padding: 15px 10px !important;
}

.stat-icon[style*="width: 60px; height: 60px; margin: 0 auto 20px auto"] {
    width: 40px !important;
    height: 40px !important;
    font-size: 18px !important;
    margin-bottom: 8px !important;
}

.stat-number[style*="font-size: 42px; margin-bottom: 10px"] {
    font-size: 24px !important;
    margin-bottom: 3px !important;
}

.stat-card div[style*="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px"] {
    font-size: 11px !important;
    margin-bottom: 3px !important;
}

.stat-card div[style*="font-size: 12px; opacity: 0.7"] {
    font-size: 9px !important;
}

/* Growth Journey section */
.growth-title[style*="font-size: 48px; margin-bottom: 20px"] {
    font-size: 30px !important;
    margin-bottom: 8px !important;
}

section[style*="padding: 100px 10%"] p[style*="font-size: 18px"] {
    font-size: 14px !important;
    margin-bottom: 20px !important;
}

.chart-container[style*="padding: 50px"] {
    padding: 20px !important;
}

/* Chart area adjustments */
.chart-area[style*="left: 60px; right: 0; top: 0; bottom: 40px"] {
    left: 40px !important;
}

.chart-bars[style*="width: 18px"] {
    width: 12px !important;
}

.chart-bars-green[style*="width: 18px; margin-left: 22px"] {
    width: 12px !important;
    margin-left: 16px !important;
}

.x-axis-labels[style*="left: 60px; right: 0; bottom: 0; height: 40px"] {
    left: 40px !important;
    height: 25px !important;
}

.x-axis-labels div[style*="font-size: 12px"] {
    font-size: 9px !important;
}

.y-axis-labels[style*="left: 0; top: 0; bottom: 40px; width: 60px"] {
    width: 35px !important;
}

.y-axis-labels div[style*="font-size: 12px"] {
    font-size: 9px !important;
}

/* Legend */
.chart-legend[style*="display: flex; justify-content: center; gap: 40px"] {
    gap: 15px !important;
}

.chart-legend [style*="width: 24px; height: 24px"] {
    width: 16px !important;
    height: 16px !important;
}

.chart-legend [style*="font-size: 16px; font-weight: 700"] {
    font-size: 13px !important;
}

.chart-legend [style*="font-size: 13px"] {
    font-size: 10px !important;
}

/* Regional Impact section */
.regional-layout[style*="display: flex; align-items: center; gap: 80px"] {
    gap: 30px !important;
}

[style*="display: inline-flex; align-items: center; padding: 15px 30px; margin-bottom: 25px"] {
    padding: 6px 15px !important;
    margin-bottom: 10px !important;
    font-size: 12px !important;
}

.regional-title[style*="font-size: 48px; margin-bottom: 25px"] {
    font-size: 30px !important;
    margin-bottom: 10px !important;
}

.regional-layout p[style*="font-size: 18px; margin-bottom: 40px"] {
    font-size: 14px !important;
    margin-bottom: 15px !important;
}

.regional-progress-container[style*="padding: 40px"] {
    padding: 15px !important;
}

[style*="margin-bottom: 30px"] {
    margin-bottom: 12px !important;
}

.region-name[style*="font-size: 18px; font-weight: 700"] {
    font-size: 14px !important;
}

.region-number[style*="font-size: 16px; font-weight: 800"] {
    font-size: 13px !important;
}

[style*="height: 12px; background: rgba(216,49,55,0.1); border-radius: 6px"] {
    height: 8px !important;
}

[style*="display: flex; justify-content: space-between; margin-top: 8px"] {
    margin-top: 3px !important;
}

[style*="font-size: 13px; color: #363558"] {
    font-size: 10px !important;
}

/* Right side chart */
.regional-chart-container[style*="padding: 40px"] {
    padding: 15px !important;
}

.regional-bars-container[style*="height: 300px; gap: 20px"] {
    height: 180px !important;
    gap: 8px !important;
    margin-bottom: 15px !important;
}

.regional-bar[style*="width: 60px"] {
    width: 35px !important;
}

.regional-bars-container div[style*="font-size: 14px; font-weight: 700"] {
    font-size: 11px !important;
}

.regional-bars-container div[style*="font-size: 12px"] {
    font-size: 9px !important;
}

[style*="background: #363558; color: white; padding: 25px; border-radius: 20px"] {
    padding: 12px !important;
}

[style*="font-size: 14px; opacity: 0.8; margin-bottom: 10px; font-weight: 600"] {
    font-size: 11px !important;
    margin-bottom: 5px !important;
}

[style*="font-size: 42px; font-weight: 800; margin-bottom: 5px"] {
    font-size: 28px !important;
    margin-bottom: 2px !important;
}

[style*="font-size: 13px; opacity: 0.7"] {
    font-size: 10px !important;
}

/* Success Stories section */
.stories-title[style*="font-size: 48px; margin-bottom: 20px"] {
    font-size: 30px !important;
    margin-bottom: 8px !important;
}

.stories-section p[style*="font-size: 18px; margin: 0 auto 60px auto"] {
    font-size: 14px !important;
    margin-bottom: 20px !important;
}

.stories-grid[style*="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px"] {
    gap: 15px !important;
}

.story-card[style*="height: 300px"] {
    height: auto !important;
    min-height: 200px !important;
}

.story-content[style*="padding: 40px"] {
    padding: 15px !important;
}

.story-content div[style*="color: #46DE48; font-size: 32px; margin-bottom: 20px"] {
    font-size: 20px !important;
    margin-bottom: 8px !important;
}

.story-quote[style*="font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 30px"] {
    font-size: 12px !important;
    margin-bottom: 10px !important;
    line-height: 1.4 !important;
}

.story-author[style*="font-size: 18px; margin-bottom: 5px"] {
    font-size: 14px !important;
    margin-bottom: 2px !important;
}

.story-content div[style*="font-size: 13px; opacity: 0.7"] {
    font-size: 10px !important;
}

.story-badge[style*="padding: 8px 15px; font-size: 12px; top: 20px; right: 20px"] {
    padding: 4px 8px !important;
    font-size: 9px !important;
    top: 10px !important;
    right: 10px !important;
}

/* Reports Section */
.reports-title[style*="font-size: 48px; margin-bottom: 20px"] {
    font-size: 30px !important;
    margin-bottom: 8px !important;
}

.reports-section p[style*="font-size: 18px; margin: 0 auto 60px auto"] {
    font-size: 14px !important;
    margin-bottom: 20px !important;
}

.reports-grid[style*="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px"] {
    gap: 12px !important;
}

.report-card[style*="padding: 40px"] {
    padding: 15px !important;
}

.report-icon[style*="width: 70px; height: 70px; margin-bottom: 25px; font-size: 28px"] {
    width: 40px !important;
    height: 40px !important;
    margin-bottom: 10px !important;
    font-size: 18px !important;
}

.report-badge[style*="padding: 8px 16px; font-size: 12px; margin-bottom: 20px"] {
    padding: 4px 8px !important;
    font-size: 9px !important;
    margin-bottom: 8px !important;
}

.report-heading[style*="font-size: 22px; margin: 0 0 15px 0"] {
    font-size: 16px !important;
    margin-bottom: 6px !important;
}

.report-description[style*="font-size: 15px; margin-bottom: 25px"] {
    font-size: 11px !important;
    margin-bottom: 10px !important;
    line-height: 1.4 !important;
}

.report-card [style*="padding-top: 20px"] {
    padding-top: 8px !important;
}

.report-card [style*="font-size: 12px; margin-bottom: 5px"] {
    font-size: 9px !important;
    margin-bottom: 2px !important;
}

.report-card [style*="font-size: 14px; font-weight: 700"] {
    font-size: 11px !important;
}

.download-link[style*="font-size: 14px"] {
    font-size: 11px !important;
}

/* Summary Impact */
.summary-impact[style*="padding: 50px; margin-top: 80px"] {
    padding: 20px !important;
    margin-top: 20px !important;
}

.summary-grid[style*="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px"] {
    gap: 10px !important;
}

.summary-number[style*="font-size: 56px; margin-bottom: 15px"] {
    font-size: 32px !important;
    margin-bottom: 5px !important;
}

.summary-label[style*="font-size: 16px; margin-bottom: 8px"] {
    font-size: 12px !important;
    margin-bottom: 3px !important;
}

.summary-detail[style*="font-size: 14px; opacity: 0.7"] {
    font-size: 10px !important;
}

/* Reduce floating background elements */
.floating-bg[style*="width: 200px; height: 200px"] {
    width: 100px !important;
    height: 100px !important;
}

.floating-bg-right[style*="width: 150px; height: 150px"] {
    width: 80px !important;
    height: 80px !important;
}

.floating-bg[style*="width: 100px; height: 100px"] {
    width: 50px !important;
    height: 50px !important;
}

/* Reduce animation durations */
.animate-on-load,
.animate-on-load-delay-1,
.animate-on-load-delay-2,
.animate-on-load-delay-3,
.animate-on-load-delay-4,
.animate-on-load-delay-5,
.slide-in-left,
.slide-in-right {
    animation-duration: 0.5s !important;
}

/* Responsive overrides */
@media (max-width: 992px) {
    h1[style*="font-size: 36px"] {
        font-size: 28px !important;
    }
    
    .stats-grid[style*="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px"] {
        grid-template-columns: repeat(3, 1fr) !important;
    }
    
    .regional-layout[style*="display: flex; align-items: center; gap: 30px"] {
        flex-direction: column !important;
    }
    
    .reports-grid[style*="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (max-width: 768px) {
    section[style*="padding: 30px 5%"] {
        padding: 20px 4% !important;
    }
    
    h1[style*="font-size: 28px"] {
        font-size: 24px !important;
    }
    
    .stats-grid[style*="grid-template-columns: repeat(3, 1fr)"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    
    .stat-card {
        padding: 10px !important;
    }
    
    .stories-grid[style*="grid-template-columns: repeat(2, 1fr); gap: 15px"] {
        grid-template-columns: 1fr !important;
    }
    
    .story-card[style*="min-height: 200px"] {
        min-height: auto !important;
    }
    
    .story-content {
        padding: 12px !important;
    }
    
    .reports-grid[style*="grid-template-columns: repeat(2, 1fr)"] {
        grid-template-columns: 1fr !important;
    }
    
    .summary-grid[style*="grid-template-columns: repeat(3, 1fr); gap: 10px"] {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }
    
    .chart-area {
        left: 35px !important;
    }
    
    .chart-bars[style*="width: 12px"] {
        width: 8px !important;
    }
    
    .chart-bars-green[style*="width: 12px; margin-left: 16px"] {
        width: 8px !important;
        margin-left: 12px !important;
    }
}

@media (max-width: 576px) {
    h1[style*="font-size: 24px"] {
        font-size: 20px !important;
    }
    
    .stats-grid[style*="grid-template-columns: repeat(2, 1fr)"] {
        grid-template-columns: 1fr !important;
    }
    
    .regional-bars-container {
        gap: 5px !important;
    }
    
    .regional-bar[style*="width: 35px"] {
        width: 25px !important;
    }
    
    .chart-container {
        padding: 10px !important;
    }
    
    .x-axis-labels div[style*="font-size: 9px"] {
        font-size: 7px !important;
    }
    
    .y-axis-labels div[style*="font-size: 9px"] {
        font-size: 7px !important;
    }
}

/* Disable hover animations on touch devices */
@media (hover: none) and (pointer: coarse) {
    .stat-card:hover,
    .report-card:hover,
    .story-card:hover,
    .regional-progress-container > div:hover {
        transform: none !important;
    }
    
    button:hover,
    .download-link:hover {
        transform: none !important;
    }
}
</style>

<div style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #FFF;">

    <!-- Hero Section -->
    <section style="padding: 120px 10% 80px 10%; text-align: center; position: relative; overflow: hidden;">
        <!-- Background Elements with floating animation -->
        <div class="floating-bg" style="position: absolute; top: 10%; left: 10%; width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle, rgba(70,222,72,0.08) 0%, rgba(70,222,72,0) 70%);"></div>
        <div class="floating-bg-right" style="position: absolute; bottom: 20%; right: 10%; width: 150px; height: 150px; border: 2px dashed #D83137; border-radius: 40px; opacity: 0.1; transform: rotate(15deg);"></div>

        <div style="position: relative; z-index: 2;">
            <div class="hero-badge animate-on-load " style="display: inline-flex; align-items: center; padding: 12px 30px; background: rgba(54,53,88,0.1); color: #363558; border-radius: 30px; font-size: 14px; font-weight: 800; margin-bottom: 25px; letter-spacing: 1px; border: 1px solid rgba(54,53,88,0.2); position: relative; overflow: hidden;">
                <i class="bi bi-bar-chart" style="color: #363558; margin-right: 10px;"></i> MEASURING OUR IMPACT
            </div>

            <h1 class="animate-on-load-delay-1" style="font-size: 64px; color: #363558; margin: 0 0 25px 0; font-weight: 800; letter-spacing: -1.5px; line-height: 1.1;">
                Lives Changed, Stories Told
            </h1>

            <p class="hero-description animate-on-load-delay-2" style="font-size: 20px; color: #5a5a5a; max-width: 800px; margin: 0 auto; line-height: 1.7;">
                Every number represents a real mother, a real baby, and a real story of hope. Explore our measurable
                impact through data visualization and human stories.
            </p>
        </div>
    </section>

    <!-- Impact Stats -->
<section style="padding: 80px 10%; background: #363558; color: white; position: relative;">
        <!-- Chart Area -->
        <div style="">
            <!-- Year Group -->
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 4%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.1s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 3%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.2s;"></div>
            </div>
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 20%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.2s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 18%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.3s;"></div>
            </div>
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 35%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.3s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 32%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.4s;"></div>
            </div>
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 55%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.4s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 50%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.5s;"></div>
            </div>
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 75%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.5s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 70%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.6s;"></div>
            </div>
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <div class="chart-bars" style="width: 18px; height: 98%; background: #D83137; border-radius: 4px 4px 0 0; animation-delay: 0.6s;"></div>
                <div class="chart-bars-green" style="width: 18px; height: 92%; background: #46DE48; border-radius: 4px 4px 0 0; animation-delay: 0.7s;"></div>
            </div>
        </div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div class="stats-grid stagger-children" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px; text-align: center;">
                <!-- Stat 1 -->
                <div class="stat-card" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                    <div class="stat-icon rotate-in" style="width: 60px; height: 60px; background: #D83137; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(216,49,55,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-person" style="color: white;"></i>
                    </div>
                    <div class="stat-number number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">20+</div>
                    <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Mothers Supported</div>
                    <div style="font-size: 12px; opacity: 0.7;">Since program inception</div>
                </div>

                <!-- Stat 2 -->
                <div class="stat-card" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                    <div class="stat-icon rotate-in" style="width: 60px; height: 60px; background: #363558; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(54,53,88,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-balloon-heart" style="color: white;"></i>
                    </div>
                    <div class="stat-number number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">100%</div>
                    <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Safe Deliveries</div>
                    <div style="font-size: 12px; opacity: 0.7;">Facility-based births</div>
                </div>

                <!-- Stat 3 -->
                <div class="stat-card" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                    <div class="stat-icon rotate-in" style="width: 60px; height: 60px; background: #46DE48; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(70,222,72,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-heart-fill" style="color: white;"></i>
                    </div>
                    <div class="stat-number number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">98%</div>
                    <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Facility Birth Rate</div>
                    <div style="font-size: 12px; opacity: 0.7;">Versus 65% national average</div>
                </div>

                <!-- Stat 4 -->
                <div class="stat-card" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                    <div class="stat-icon rotate-in" style="width: 60px; height: 60px; background: #D83137; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(216,49,55,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-geo-alt" style="color: white;"></i>
                    </div>
                    <div class="stat-number number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">1</div>
                    <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Active Districts</div>
                    <div style="font-size: 12px; opacity: 0.7;">Across 4 regions of Uganda</div>
                </div>

                <!-- Stat 5 -->
                <div class="stat-card" style="background: rgba(255,255,255,0.05); border-radius: 25px; padding: 40px 20px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                    <div class="stat-icon rotate-in" style="width: 60px; height: 60px; background: #46DE48; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 24px; box-shadow: 0 15px 30px rgba(70,222,72,0.3); transition: all 0.3s ease;">
                        <i class="bi bi-mortarboard" style="color: white;"></i>
                    </div>
                    <div class="stat-number number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 10px; color: white;">50+</div>
                    <div style="font-size: 14px; opacity: 0.9; font-weight: 600; margin-bottom: 8px;">Youth Navigators</div>
                    <div style="font-size: 12px; opacity: 0.7;">Trained and deployed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth Journey -->
    <section style="padding: 100px 10%; background: #FFF; position: relative;">
        <!-- Background Pattern -->
        <div class="floating-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: repeating-linear-gradient(45deg, #46DE48 0px, #46DE48 1px, transparent 1px, transparent 30px);"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; text-align: center;">
            <!-- Label -->
            <div class="animate-on-load" style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                <span style="color: #46DE48; font-size: 20px;">
                    <i class="bi bi-graph-up"></i>
                </span>
                GROWTH JOURNEY
            </div>

            <!-- Title -->
            <h2 class="growth-title animate-on-load-delay-1" style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                From 0 to 20+
            </h2>

            <!-- Subtitle -->
            <p class="animate-on-load-delay-2" style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                Our exponential growth journey from serving 0 mothers in 2023 to over 20+ today demonstrates the
                scalability and impact of our model.
            </p>

            <!-- Growth Visualization -->
            <div class="chart-container animate-on-load-delay-3" style="background: #FFF; border-radius: 30px; padding: 50px; box-shadow: 0 40px 80px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">

                <!-- Chart Container -->
                <div style="height: 400px; position: relative; margin-bottom: 40px;">
                    <!-- Y-axis Labels -->
                    <div class="y-axis-labels" style="position: absolute; left: 0; top: 0; bottom: 40px; width: 60px; display: flex; flex-direction: column; justify-content: space-between; padding: 20px 0;">

                        <div style="font-size: 12px; color: #363558; font-weight: 600; text-align: right;">9,000</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600; text-align: right;">6,000</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600; text-align: right;">3,000</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600; text-align: right;">0</div>
                    </div>

                    <!-- Chart Area -->
                    <div class="chart-area" style="position: absolute; left: 60px; right: 0; top: 0; bottom: 40px; border-bottom: 2px solid #f0f0f0; border-left: 2px solid #f0f0f0;">
                        <!-- Grid Lines -->

                        <div style="position:absolute; left:0; right:0; top:25%; height:1px; background:rgba(0,0,0,0.05);"></div>
                        <div style="position:absolute; left:0; right:0; top:50%; height:1px; background:rgba(0,0,0,0.05);"></div>
                        <div style="position:absolute; left:0; right:0; top:75%; height:1px; background:rgba(0,0,0,0.05);"></div>
                        <div style="position:absolute; left:0; right:0; top:100%; height:1px; background:rgba(0,0,0,0.05);"></div>

                        <!-- Mothers Supported (RED) -->
                        <div class="chart-bars" style="position:absolute; left:40%; bottom:0; width:18px; height:35%; background:#D83137; border-radius:4px 4px 0 0; animation-delay: 0.3s;"></div>
                        <div class="chart-bars" style="position:absolute; left:56%; bottom:0; width:18px; height:55%; background:#D83137; border-radius:4px 4px 0 0; animation-delay: 0.4s;"></div>
                        <div class="chart-bars" style="position:absolute; left:72%; bottom:0; width:18px; height:75%; background:#D83137; border-radius:4px 4px 0 0; animation-delay: 0.5s;"></div>
                        <div class="chart-bars" style="position:absolute; left:88%; bottom:0; width:18px; height:98%; background:#D83137; border-radius:4px 4px 0 0; animation-delay: 0.6s;"></div>

                        <!-- Safe Deliveries (GREEN) -->
                        <div class="chart-bars-green" style="position:absolute; left:40%; bottom:0; margin-left:22px; width:18px; height:32%; background:#46DE48; border-radius:4px 4px 0 0; opacity:0.85; animation-delay: 0.4s;"></div>
                        <div class="chart-bars-green" style="position:absolute; left:56%; bottom:0; margin-left:22px; width:18px; height:50%; background:#46DE48; border-radius:4px 4px 0 0; opacity:0.85; animation-delay: 0.5s;"></div>
                        <div class="chart-bars-green" style="position:absolute; left:72%; bottom:0; margin-left:22px; width:18px; height:70%; background:#46DE48; border-radius:4px 4px 0 0; opacity:0.85; animation-delay: 0.6s;"></div>
                        <div class="chart-bars-green" style="position:absolute; left:88%; bottom:0; margin-left:22px; width:18px; height:92%; background:#46DE48; border-radius:4px 4px 0 0; opacity:0.85; animation-delay: 0.7s;"></div>
                    </div>

                    <!-- X-axis Labels -->
                    <div class="x-axis-labels" style="position: absolute; left: 60px; right: 0; bottom: 0; height: 40px; display: flex; justify-content: space-around; align-items: flex-end;">
                        <div style="font-size: 12px; color: #363558; font-weight: 600;">2023</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600;">2024</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600;">2025</div>
                        <div style="font-size: 12px; color: #363558; font-weight: 600;">2026</div>
                    </div>
                </div>

                <!-- Legend -->
                <div class="chart-legend" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 24px; height: 24px; background: #D83137; border-radius: 6px;"></div>
                        <div>
                            <div style="font-size: 16px; font-weight: 700; color: #363558;">Mothers Supported</div>
                            <div style="font-size: 13px; color: #363558;">Cumulative total served</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 24px; height: 24px; background: #46DE48; border-radius: 6px;"></div>
                        <div>
                            <div style="font-size: 16px; font-weight: 700; color: #363558;">Safe Deliveries</div>
                            <div style="font-size: 13px; color: #363558;">Facility-based births</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Impact -->
    <section style="padding: 100px 10%; background: #FFF; position: relative;">
        <!-- Background Elements -->
        <div class="floating-bg" style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border-radius: 30px; background: rgba(54,53,88,0.05); transform: rotate(25deg);"></div>
        <div class="floating-bg-right" style="position: absolute; bottom: 30%; right: 10%; width: 150px; height: 150px; border: 2px dashed #D83137; border-radius: 50%; opacity: 0.1;"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div class="regional-layout" style="display: flex; align-items: center; gap: 80px;">
                <div style="flex: 1;">
                    <div class="animate-on-load" style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                        <i class="bi bi-map" style="color: #363558; font-size: 20px;"></i>
                        REGIONAL IMPACT
                    </div>

                    <h2 class="regional-title animate-on-load-delay-1" style="font-size: 48px; color: #363558; margin-bottom: 25px; font-weight: 800; line-height: 1.2;">
                        Impact Across Uganda
                    </h2>

                    <p class="animate-on-load-delay-2" style="font-size: 18px; color: #5a5a5a; line-height: 1.7; margin-bottom: 40px;">
                        Our programs reach mothers across all four regions of Uganda, with the highest concentration in
                        Northern and Central regions where maternal health needs are greatest.
                    </p>

                    <!-- Regional Progress Bars -->
                    <div class="regional-progress-container animate-on-load-delay-3" style="background: #FFF; padding: 40px; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                        <!-- Central Region -->
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <div class="region-name" style="font-size: 18px; font-weight: 700; color: #363558; transition: color 0.3s ease;">Central Region</div>
                                <div class="region-number" style="font-size: 16px; font-weight: 800; color: #D83137; transition: all 0.3s ease;">0</div>
                            </div>
                            <div style="height: 12px; background: rgba(216,49,55,0.1); border-radius: 6px; overflow: hidden;">
                                <div class="progress-fill" style="width: 0%; height: 100%; background: #D83137; border-radius: 6px; --target-width: 0%;"></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                <div style="font-size: 13px; color: #363558;">0% of total impact</div>
                                <div style="font-size: 13px; color: #363558;">25 districts</div>
                            </div>
                        </div>

                        <!-- Eastern Region -->
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <div class="region-name" style="font-size: 18px; font-weight: 700; color: #363558; transition: color 0.3s ease;">Eastern Region</div>
                                <div class="region-number" style="font-size: 16px; font-weight: 800; color: #46DE48; transition: all 0.3s ease;">20+</div>
                            </div>
                            <div style="height: 12px; background: rgba(70,222,72,0.1); border-radius: 6px; overflow: hidden;">
                                <div class="progress-fill" style="width: 100%; height: 100%; background: #46DE48; border-radius: 6px;"></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                <div style="font-size: 13px; color: #363558;">100% of total impact</div>
                                <div style="font-size: 13px; color: #363558;">15 districts</div>
                            </div>
                        </div>

                        <!-- Northern Region -->
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <div class="region-name" style="font-size: 18px; font-weight: 700; color: #363558; transition: color 0.3s ease;">Northern Region</div>
                                <div class="region-number" style="font-size: 16px; font-weight: 800; color: #363558; transition: all 0.3s ease;">0</div>
                            </div>
                            <div style="height: 12px; background: rgba(54,53,88,0.1); border-radius: 6px; overflow: hidden;">
                                <div class="progress-fill" style="width: 0%; height: 100%; background: #363558; border-radius: 6px; --target-width: 0%;"></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                <div style="font-size: 13px; color: #363558;">0% of total impact</div>
                                <div style="font-size: 13px; color: #363558;">20 districts</div>
                            </div>
                        </div>

                        <!-- Western Region -->
                        <div>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                                <div class="region-name" style="font-size: 18px; font-weight: 700; color: #363558; transition: color 0.3s ease;">Western Region</div>
                                <div class="region-number" style="font-size: 16px; font-weight: 800; color: #D83137; transition: all 0.3s ease;">0</div>
                            </div>
                            <div style="height: 12px; background: rgba(216,49,55,0.1); border-radius: 6px; overflow: hidden;">
                                <div class="progress-fill" style="width: 0%; height: 100%; background: #D83137; border-radius: 6px; --target-width: 0%;"></div>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                                <div style="font-size: 13px; color: #363558;">0% of total impact</div>
                                <div style="font-size: 13px; color: #363558;">20 districts</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="flex: 1; position: relative;">
                    <div class="regional-chart-container animate-on-load-delay-4" style="background: #FFF; border-radius: 30px; padding: 40px; box-shadow: 0 40px 80px rgba(0,0,0,0.1); border: 1px solid #f0f0f0;">
                        <!-- Bar Chart -->
                        <div class="regional-bars-container" style="display: flex; align-items: flex-end; justify-content: space-around; height: 300px; gap: 20px; margin-bottom: 30px;">
                            <div style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                <div class="regional-bar" style="width: 60px; background: linear-gradient(to top, #D83137, #ff6b6b); border-radius: 8px 8px 0 0; height: 85%; animation-delay: 0.1s;"></div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">Central</div>
                                <div style="font-size: 12px; color: #363558;">0</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                <div class="regional-bar" style="width: 60px; background: linear-gradient(to top, #46DE48, #80E681); border-radius: 8px 8px 0 0; height: 52%; animation-delay: 0.2s;"></div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">Eastern</div>
                                <div style="font-size: 12px; color: #363558;">20</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                <div class="regional-bar" style="width: 60px; background: linear-gradient(to top, #363558, #808FB9); border-radius: 8px 8px 0 0; height: 66%; animation-delay: 0.3s;"></div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">Northern</div>
                                <div style="font-size: 12px; color: #363558;">0</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center; gap: 10px; height: 100%;">
                                <div class="regional-bar" style="width: 60px; background: linear-gradient(to top, #D83137, #ff6b6b); border-radius: 8px 8px 0 0; height: 46%; animation-delay: 0.4s;"></div>
                                <div style="font-size: 14px; font-weight: 700; color: #363558;">Western</div>
                                <div style="font-size: 12px; color: #363558;">0</div>
                            </div>
                        </div>

                        <!-- Total Impact -->
                        <div style="background: #363558; color: white; padding: 25px; border-radius: 20px; text-align: center;">
                            <div style="font-size: 14px; opacity: 0.8; margin-bottom: 10px; font-weight: 600;">TOTAL MOTHERS SUPPORTED</div>
                            <div class="number-animate" style="font-size: 42px; font-weight: 800; margin-bottom: 5px;">20+</div>
                            <div style="font-size: 13px; opacity: 0.7;">Across so far 1 district in Uganda</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section style="padding: 100px 10%; background: #363558; color: white; text-align: center; position: relative;">
        <!-- Grid Pattern -->
        <div class="floating-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.05; background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div class="animate-on-load" style="display: inline-flex; align-items: center; background: rgba(255,255,255,0.1); padding: 15px 30px; border-radius: 30px; margin-bottom: 25px; border: 1px solid rgba(255,255,255,0.2);">
                <i class="bi bi-stars" style="color: #46DE48; margin-right: 10px;"></i>
                <div style="font-size: 14px; font-weight: 800;">SUCCESS STORIES</div>
            </div>

            <h2 class="stories-title animate-on-load-delay-1" style="font-size: 48px; font-weight: 800; margin-bottom: 20px; color: white;">
                Behind Every Number, a Life
            </h2>

            <p class="animate-on-load-delay-2" style="font-size: 18px; opacity: 0.8; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.6;">
                Our impact is measured not just in numbers, but in the stories of mothers and families whose lives have
                been transformed.
            </p>

            <div class="stories-grid stagger-children" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
                <!-- Story 1 -->
                <div class="story-card" style="background: rgba(255,255,255,0.05); border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); transition: all 0.4s ease;">
                    <div style="display: flex; height: 300px;">
                        <div class="story-content" style="flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                            <div style="color: #46DE48; font-size: 32px; margin-bottom: 20px;">❝</div>
                            <p class="story-quote" style="font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 30px; flex-grow: 1;">
                                "When I had complications during delivery, my navigator arranged emergency transport in
                                just 10 minutes. Both my baby and I survived thanks to safeMom Navigator."
                            </p>
                            <div>
                                <div class="story-author" style="font-weight: 800; font-size: 18px; margin-bottom: 5px;">Mercy Akello</div>
                                <div style="font-size: 13px; opacity: 0.7;">Gulu District, Northern Region</div>
                                <div style="display: flex; align-items: center; gap: 10px; margin-top: 15px;">
                                    <div style="width: 30px; height: 30px; background: rgba(70,222,72,0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #46DE48; font-size: 14px;">
                                        👶
                                    </div>
                                    <div style="font-size: 13px; opacity: 0.8;">Safe delivery in 2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="story-image" style="flex: 1; position: relative; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&q=80&w=400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div class="story-badge" style="position: absolute; top: 20px; right: 20px; background: rgba(0,0,0,0.5); color: white; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; backdrop-filter: blur(10px); transition: all 0.3s ease;">
                                EMERGENCY SUCCESS
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="story-card" style="background: rgba(255,255,255,0.05); border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); transition: all 0.4s ease;">
                    <div style="display: flex; height: 300px;">
                        <div class="story-content" style="flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                            <div style="color: #D83137; font-size: 32px; margin-bottom: 20px;">❝</div>
                            <p class="story-quote" style="font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 30px; flex-grow: 1;">
                                "The SMS reminders helped me attend all my prenatal appointments. My navigator taught me
                                about nutrition and danger signs. This was my healthiest pregnancy yet."
                            </p>
                            <div>
                                <div class="story-author" style="font-weight: 800; font-size: 18px; margin-bottom: 5px;">Grace Namini</div>
                                <div style="font-size: 13px; opacity: 0.7;">Mbale District, Eastern Region</div>
                                <div style="display: flex; align-items: center; gap: 10px; margin-top: 15px;">
                                    <div style="width: 30px; height: 30px; background: rgba(216,49,55,0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #D83137; font-size: 14px;">
                                        📱
                                    </div>
                                    <div style="font-size: 13px; opacity: 0.8;">SMS reminder recipient</div>
                                </div>
                            </div>
                        </div>
                        <div class="story-image" style="flex: 1; position: relative; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1589156280159-27698a70f29e?auto=format&fit=crop&q=80&w=400" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                            <div class="story-badge" style="position: absolute; top: 20px; right: 20px; background: rgba(0,0,0,0.5); color: white; padding: 8px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; backdrop-filter: blur(10px); transition: all 0.3s ease;">
                                HEALTHY PREGNANCY
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section style="padding: 100px 10%; background: #FFF; text-align: center; position: relative;">
        <!-- Background Elements -->
        <div class="floating-bg" style="position: absolute; top: 20%; left: 10%; width: 150px; height: 150px; border-radius: 50%; background: radial-gradient(circle, rgba(54,53,88,0.1) 0%, rgba(54,53,88,0) 70%);"></div>
        <div class="floating-bg-right" style="position: absolute; bottom: 30%; right: 10%; width: 100px; height: 100px; border: 2px dashed #D83137; border-radius: 30px; opacity: 0.1; transform: rotate(25deg);"></div>

        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;">
            <div class="animate-on-load" style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); padding: 15px 30px; border-radius: 30px; color: #363558; font-size: 14px; font-weight: 800; margin-bottom: 25px; gap: 10px;">
                <i class="bi bi-file-text" style="color: #363558; font-size: 20px;"></i>
                DETAILED REPORTS
            </div>

            <h2 class="reports-title animate-on-load-delay-1" style="font-size: 48px; color: #363558; margin-bottom: 20px; font-weight: 800;">
                Annual Impact Reports
            </h2>

            <p class="animate-on-load-delay-2" style="color: #5a5a5a; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.7; font-size: 18px;">
                Download our detailed impact reports for comprehensive data, analysis, and stories from our work across
                Uganda.
            </p>

            <div class="reports-grid stagger-children" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <!-- Report 1 -->
                <div class="report-card" style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left; transition: all 0.4s ease;">
                    <div class="report-icon rotate-in" style="width: 70px; height: 70px; background: #D83137; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; transition: all 0.3s ease;">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="report-badge" style="display: inline-flex; align-items: center; background: rgba(216,49,55,0.1); color: #D83137; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                        2024 REPORT
                    </div>
                    <h4 class="report-heading" style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact Report 2024</h4>
                    <p class="report-description" style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                        Comprehensive analysis of our 2024 impact, including expansion to 6 new districts and detailed
                        maternal health outcomes.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                        <div>
                            <div style="font-size: 12px; color: #363558; margin-bottom: 5px;">REPORT DETAILS</div>
                            <div style="font-size: 14px; font-weight: 700; color: #363558;">32 pages • 5.2MB</div>
                        </div>
                        <a href="javascript:void()" class="download-link" style="color: #D83137; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                            Download <span style="transition: transform 0.3s ease;">→</span>
                        </a>
                    </div>
                </div>

                <!-- Report 2 -->
                <div class="report-card" style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left; transition: all 0.4s ease;">
                    <div class="report-icon rotate-in" style="width: 70px; height: 70px; background: #46DE48; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; transition: all 0.3s ease;">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="report-badge" style="display: inline-flex; align-items: center; background: rgba(70,222,72,0.1); color: #46DE48; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                        2023 REPORT
                    </div>
                    <h4 class="report-heading" style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact Report 2023</h4>
                    <p class="report-description" style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                        Detailed review of our 2023 achievements, including emergency response improvements and
                        navigator training outcomes.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                        <div>
                            <div style="font-size: 12px; color: #363558; margin-bottom: 5px;">REPORT DETAILS</div>
                            <div style="font-size: 14px; font-weight: 700; color: #363558;">28 pages • 4.7MB</div>
                        </div>
                        <a href="javascript:void()" class="download-link" style="color: #46DE48; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                            Download <span style="transition: transform 0.3s ease;">→</span>
                        </a>
                    </div>
                </div>

                <!-- Report 3 -->
                <div class="report-card" style="background: #FFF; border-radius: 25px; padding: 40px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; text-align: left; transition: all 0.4s ease;">
                    <div class="report-icon rotate-in" style="width: 70px; height: 70px; background: #363558; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white; font-size: 28px; transition: all 0.3s ease;">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="report-badge" style="display: inline-flex; align-items: center; background: rgba(54,53,88,0.1); color: #363558; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-bottom: 20px;">
                        2023 REPORT
                    </div>
                    <h4 class="report-heading" style="font-size: 22px; color: #363558; margin: 0 0 15px 0; font-weight: 800;">Annual Impact Report 2023</h4>
                    <p class="report-description" style="font-size: 15px; color: #5a5a5a; line-height: 1.6; margin-bottom: 25px;">
                        Analysis of our foundational years with focus on system development, community engagement, and
                        initial impact metrics.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
                        <div>
                            <div style="font-size: 12px; color: #363558; margin-bottom: 5px;">REPORT DETAILS</div>
                            <div style="font-size: 14px; font-weight: 700; color: #363558;">24 pages • 3.8MB</div>
                        </div>
                        <a href="javascript:void()" class="download-link" style="color: #363558; text-decoration: none; font-weight: 800; font-size: 14px; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                            Download <span style="transition: transform 0.3s ease;">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Summary Impact -->
            <div class="summary-impact animate-on-load-delay-3" style="background: #363558; color: white; padding: 50px; border-radius: 30px; margin-top: 80px; transition: all 0.4s ease;">
                <div class="summary-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; text-align: center;">
                    <div style="transition: all 0.3s ease;">
                        <div class="summary-number number-animate" style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">20+</div>
                        <div class="summary-label" style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Mothers Supported</div>
                        <div class="summary-detail" style="font-size: 14px; opacity: 0.7;">Life-changing impact since 2023</div>
                    </div>
                    <div style="transition: all 0.3s ease;">
                        <div class="summary-number number-animate" style="font-size: 56px; font-weight: 800; color: #D83137; margin-bottom: 15px; line-height: 1;">100%</div>
                        <div class="summary-label" style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Safe Deliveries</div>
                        <div class="summary-detail" style="font-size: 14px; opacity: 0.7;">With 98% facility birth rate</div>
                    </div>
                    <div style="transition: all 0.3s ease;">
                        <div class="summary-number number-animate" style="font-size: 56px; font-weight: 800; color: #46DE48; margin-bottom: 15px; line-height: 1;">1</div>
                        <div class="summary-label" style="font-size: 16px; font-weight: 600; margin-bottom: 8px;">Active District</div>
                        <div class="summary-detail" style="font-size: 14px; opacity: 0.7;">Across Uganda's 4 regions</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Apply custom CSS variables for progress bar animations
    document.addEventListener('DOMContentLoaded', function() {
        // Set target widths for progress bars
        const progressBars = document.querySelectorAll('.progress-fill');
        progressBars.forEach(bar => {
            const targetWidth = bar.style.getPropertyValue('--target-width');
            if (targetWidth) {
                setTimeout(() => {
                    bar.style.width = targetWidth;
                }, 500);
            }
        });
        
        // Add hover effects for summary items
        const summaryItems = document.querySelectorAll('.summary-impact .summary-grid > div');
        summaryItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                const number = this.querySelector('.summary-number');
                if (number) {
                    number.style.transform = 'scale(1.1)';
                }
            });
            
            item.addEventListener('mouseleave', function() {
                const number = this.querySelector('.summary-number');
                if (number) {
                    number.style.transform = 'scale(1)';
                }
            });
        });
        
        // Add click animation for download links
        const downloadLinks = document.querySelectorAll('.download-link');
        downloadLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
        });
        
        // Add hover animation for region numbers
        const regionNumbers = document.querySelectorAll('.region-number');
        regionNumbers.forEach(number => {
            number.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2)';
            });
            
            number.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });
</script>

@endsection