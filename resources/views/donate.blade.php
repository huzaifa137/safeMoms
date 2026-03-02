@extends('layouts.apps')
@section('content')

<style>
  /* Donation Page - Compact Spacing */
section:first-of-type {
  padding: clamp(30px, 5vw, 60px) clamp(15px, 4vw, 5%) clamp(30px, 5vw, 60px) !important;
}

/* Reduce hero section spacing */
section:first-of-type > div > div:first-child {
  margin-bottom: clamp(20px, 4vw, 40px) !important;
}

/* Donation options container */
#donation-options {
  margin-bottom: clamp(30px, 5vw, 50px) !important;
}

/* Donation card padding */
#donation-options > div:first-child {
  padding: clamp(20px, 3vw, 30px) !important;
}

/* Reduce gaps between sections */
#donation-options h3 {
  margin-bottom: clamp(15px, 2.5vw, 20px) !important;
}

/* Amount section spacing */
#donation-options [style*="margin-bottom: clamp(20px, 4vw, 30px)"] {
  margin-bottom: 15px !important;
}

/* Preset buttons container */
#preset-amounts {
  margin-bottom: 12px !important;
  gap: 8px !important;
}

/* Preset buttons */
.amount-btn {
  padding: 8px 12px !important;
  font-size: clamp(13px, 2vw, 14px) !important;
}

/* Custom amount row */
#donation-options [style*="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;"] {
  gap: 10px !important;
}

/* Frequency section spacing */
#donation-options [style*="margin-bottom: clamp(20px, 4vw, 30px);"]:nth-of-type(2) {
  margin-bottom: 15px !important;
}

/* Frequency buttons */
.freq-btn {
  padding: 10px 15px !important;
  font-size: clamp(12px, 2vw, 13px) !important;
}

/* Designation section */
#donation-options [style*="margin-bottom: clamp(20px, 4vw, 30px);"]:nth-of-type(3) {
  margin-bottom: 15px !important;
}

/* Designation dropdown */
#designation {
  padding: 12px 15px !important;
}

/* Payment button */
#payment-button {
  padding: 14px !important;
  font-size: clamp(15px, 2.5vw, 16px) !important;
}

/* Urgent Call to Action section */
section:first-of-type > div > div:last-child {
  margin-bottom: 0 !important;
}

/* Urgent CTA card */
section:first-of-type [style*="background: linear-gradient(135deg, #DD3134, #FF6B6B)"] {
  padding: clamp(20px, 4vw, 30px) !important;
  margin-bottom: 0 !important;
}

/* Urgent CTA inner grid */
section:first-of-type [style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr))"] {
  gap: clamp(20px, 3vw, 30px) !important;
}

/* Stats card in urgent CTA */
section:first-of-type [style*="background: rgba(255,255,255,0.1)"] {
  padding: clamp(15px, 3vw, 25px) !important;
}

/* Progress bar container */
section:first-of-type [style*="height: 10px; background: rgba(255,255,255,0.2)"] {
  margin-bottom: 12px !important;
}

/* All paragraph margins */
p {
  margin-bottom: 15px !important;
}

/* Reduce heading sizes if needed */
h1 {
  font-size: clamp(32px, 6vw, 50px) !important;
  margin-bottom: 10px !important;
}

h2 {
  font-size: clamp(24px, 4vw, 36px) !important;
  margin-bottom: 10px !important;
}

/* Feedback div spacing */
#selection-feedback {
  margin-top: 10px !important;
  font-size: 13px !important;
}

/* Remove any extra bottom margins from last elements */
#payment-button {
  margin-bottom: 0 !important;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
  /* Further reduce spacing on mobile */
  section:first-of-type {
    padding: 20px 15px 30px !important;
  }
  
  .amount-btn {
    padding: 8px 10px !important;
    min-width: 50px !important;
  }
  
  #preset-amounts {
    gap: 6px !important;
  }
  
  .freq-btn {
    padding: 8px 12px !important;
    min-width: 80px !important;
  }
  
  section:first-of-type [style*="background: linear-gradient(135deg, #DD3134, #FF6B6B)"] {
    padding: 20px 15px !important;
  }
}

@media screen and (max-width: 480px) {
  /* Small phone optimizations */
  #preset-amounts {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
  }
  
  #frequency-buttons {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 8px !important;
  }
  
  .freq-btn {
    width: 100% !important;
  }
}
</style>
<section style="margin: 0; padding: clamp(40px, 8vw, 100px) clamp(20px, 5vw, 5%) clamp(40px, 6vw, 120px); font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f0f2f5; position: relative; overflow: hidden; margin-top: 0rem;">

    <!-- Geometric background elements -->
    <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background-color: #363558; clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%); opacity: 0.05; display: none;"></div>
    <div style="position: absolute; bottom: 0; right: 0; width: 300px; height: 300px; border-radius: 50%; background-color: #46DE48; opacity: 0.05; display: none;"></div>

    <div style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto;">

        <!-- Hero Section -->
        <div style="text-align: center; margin-bottom: clamp(40px, 8vw, 80px); padding: 0 clamp(10px, 3vw, 0);">
            <div style="display: inline-block; padding: clamp(8px, 2vw, 10px) clamp(20px, 4vw, 30px); background: linear-gradient(90deg, #DD3134, #DD3134); color: white; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); letter-spacing: 0.5px; box-shadow: 0 8px 20px rgba(221,49,52,0.3);">
                <svg style="width: clamp(14px, 2vw, 16px); height: clamp(14px, 2vw, 16px); fill: white; vertical-align: middle; margin-right: 6px;" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                SUPPORT MATERNAL HEALTH
            </div>
            
            <h1 style="font-size: clamp(36px, 7vw, 70px); line-height: 1.1; margin: 0 0 clamp(15px, 3vw, 25px) 0; color: #363558; font-weight: 800; letter-spacing: -0.5px;">
                Donate to <span style="color: #363558;">Save Mothers</span>
            </h1>
            
            <p style="font-size: clamp(16px, 3vw, 20px); line-height: 1.6; color: #5a5a5a; margin-bottom: clamp(30px, 5vw, 50px); max-width: 100%;">
                Your donation directly supports maternal health services, youth navigator training, and emergency transport coordination. Every contribution brings us closer to a Uganda where no mother dies giving life.
            </p>
        </div>

<!-- Donation Options -->
<div id="donation-options" style="margin-bottom: clamp(50px, 8vw, 100px);">

  <!-- Custom Amount -->
  <div style="background: white; border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 50px); box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
    <h3 style="font-size: clamp(22px, 4vw, 28px); color: #363558; margin: 0 0 clamp(20px, 4vw, 30px) 0; font-weight: 800; text-align: center;">Enter Custom Amount</h3>

    <div style="display: grid; grid-template-columns: 1fr; gap: clamp(30px, 5vw, 40px);">
      <!-- Amount Selection -->
      <div>
        <!-- AMOUNT SECTION -->
        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
          <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">
            Select Amount (<span id="currency-label">USD</span>)
          </label>
          
          <!-- preset amount buttons -->
          <div id="preset-amounts" style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap; margin-bottom: clamp(15px, 3vw, 20px);">
            <button class="amount-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;" data-amount="25">$25</button>
            <button class="amount-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;" data-amount="50">$50</button>
            <button class="amount-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;" data-amount="100">$100</button>
            <button class="amount-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;" data-amount="250">$250</button>
            <button class="amount-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(10px, 2vw, 12px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 60px;" data-amount="500">$500</button>
          </div>
          
          <!-- custom amount + currency selector -->
          <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
            <div style="flex: 1 1 200px; position: relative; min-width: 0;">
              <span id="currency-symbol" style="position: absolute; left: clamp(15px, 3vw, 20px); top: 50%; transform: translateY(-50%); color: #5a5a5a; font-weight: 600; font-size: clamp(16px, 3vw, 18px);">$</span>
              <input id="custom-amount" type="number" style="width: 100%; padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 20px) clamp(15px, 3vw, 18px) clamp(35px, 5vw, 40px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(16px, 3vw, 18px); font-weight: 700; outline: none; min-width: 0;" placeholder="0.00">
            </div>
            <select id="currency-selector" style="padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 25px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; outline: none; min-width: 120px; flex-shrink: 0;">
              <option value="$" data-code="USD">USD</option>
              <option value="€" data-code="EUR">EUR</option>
              <option value="£" data-code="GBP">GBP</option>
            </select>
          </div>
        </div>

        <!-- FREQUENCY SECTION -->
        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
          <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Giving Frequency</label>
          <div id="frequency-buttons" style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
            <button class="freq-btn" style="background: #DD3134; color: white; border: none; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;" data-frequency="one-time">One-time</button>
            <button class="freq-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;" data-frequency="monthly">Monthly</button>
            <button class="freq-btn" style="background: #f8f9fa; color: #363558; border: 2px solid #e0e0e0; padding: clamp(12px, 2vw, 14px) clamp(15px, 3vw, 25px); border-radius: 10px; font-size: clamp(13px, 2.5vw, 15px); font-weight: 700; cursor: pointer; flex: 1 1 auto; min-width: 100px;" data-frequency="quarterly">Quarterly</button>
          </div>
        </div>

        <!-- DESIGNATION (unchanged, functional) -->
        <div style="margin-bottom: clamp(20px, 4vw, 30px);">
          <label style="display: block; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; margin-bottom: clamp(10px, 2vw, 15px);">Designate Your Gift (Optional)</label>
          <select id="designation" style="width: 100%; padding: clamp(15px, 3vw, 18px) clamp(15px, 3vw, 25px); border-radius: 12px; border: 2px solid #e0e0e0; background: #f8f9fa; color: #363558; font-size: clamp(14px, 2.5vw, 16px); font-weight: 600; outline: none;">
            <option value="">Where most needed</option>
            <option value="emergency">Emergency Transport Fund</option>
            <option value="training">Youth Navigator Training</option>
            <option value="equipment">Medical Equipment</option>
            <option value="education">Health Education Materials</option>
            <option value="research">Maternal Health Research</option>
          </select>
        </div>

        <!-- PAYMENT BUTTON (now shows summary on click) -->
        <button id="payment-button" style="background: #DD3134; color: white; border: none; padding: clamp(16px, 3vw, 20px); border-radius: 12px; font-size: clamp(16px, 3vw, 18px); font-weight: 800; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: clamp(8px, 2vw, 12px); box-shadow: 0 10px 25px rgba(221,49,52,0.3);">
          <svg style="width: clamp(18px, 3vw, 22px); height: clamp(18px, 3vw, 22px); fill: white;" viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
          </svg>
          Continue to Payment
        </button>
        
        <!-- small feedback area (optional, shows active selections) -->
        <div id="selection-feedback" style="margin-top: 15px; font-size: 14px; color: #363558; font-weight: 500; text-align: center; min-height: 24px;"></div>
      </div>
    </div>
  </div>
</div>

<script>
  (function() {
    "use strict";

    // ----- ELEMENTS -----
    const amountBtns = document.querySelectorAll('.amount-btn');
    const customInput = document.getElementById('custom-amount');
    const currencySelector = document.getElementById('currency-selector');
    const currencySymbolSpan = document.getElementById('currency-symbol');
    const currencyLabel = document.getElementById('currency-label'); // label next to "Select Amount"
    const freqBtns = document.querySelectorAll('.freq-btn');
    const paymentBtn = document.getElementById('payment-button');
    const feedbackDiv = document.getElementById('selection-feedback');

    // State: active amount button, active frequency button
    let activeAmountBtn = null;
    let activeFreqBtn = null;

    // ----- HELPER: update symbol and label based on selected currency -----
    function updateCurrencyDisplay() {
      const selectedOption = currencySelector.options[currencySelector.selectedIndex];
      const symbol = selectedOption.value;        // '$', '€', '£'
      const currencyCode = selectedOption.dataset.code || 'USD'; // 'USD', 'EUR', 'GBP'
      
      // change symbol next to input field
      currencySymbolSpan.textContent = symbol;
      
      // change label text "Select Amount (USD)" etc.
      if (currencyLabel) {
        currencyLabel.textContent = currencyCode;
      }

      // update all preset amount button text to show new symbol + amount
      amountBtns.forEach(btn => {
        const amount = btn.dataset.amount;  // stored as '25', '50', etc.
        if (amount) {
          btn.textContent = symbol + amount;
        }
      });
      
      // also show feedback update if needed (optional)
      updateFeedback();
    }

    // ----- AMOUNT BUTTON CLICK (set active visual, clear custom input) -----
    function handleAmountClick(e) {
      const clickedBtn = e.currentTarget;
      
      // Remove active class from previously active amount button
      if (activeAmountBtn) {
        activeAmountBtn.style.background = '#f8f9fa';
        activeAmountBtn.style.color = '#363558';
        activeAmountBtn.style.border = '2px solid #e0e0e0';
        // remove any inline gradient override if accidentally added
      }
      
      // Set current as active
      clickedBtn.style.background = '#DD3134';
      clickedBtn.style.color = 'white';
      clickedBtn.style.border = '2px solid #DD3134';
      
      activeAmountBtn = clickedBtn;
      
      // Clear custom amount input to indicate preset is active
      customInput.value = '';
      
      updateFeedback();
    }

    // ----- CUSTOM INPUT: clears active amount style when user types -----
    function handleCustomInput() {
      if (this.value.trim() !== '') {
        // remove active style from any active amount button
        if (activeAmountBtn) {
          activeAmountBtn.style.background = '#f8f9fa';
          activeAmountBtn.style.color = '#363558';
          activeAmountBtn.style.border = '2px solid #e0e0e0';
          activeAmountBtn = null;
        }
      }
      updateFeedback();
    }

    // ----- FREQUENCY BUTTON CLICK (exclusive active state) -----
    function handleFrequencyClick(e) {
      const clickedFreq = e.currentTarget;
      
      // remove active style from previous frequency
      if (activeFreqBtn) {
        // revert to original non-active style
        activeFreqBtn.style.background = '#f8f9fa';
        activeFreqBtn.style.color = '#363558';
        activeFreqBtn.style.border = '2px solid #e0e0e0';
        // for the 'One-time' default we handle special gradient — we revert all to same neutral style
      }
      
      // apply active style to clicked button: red gradient with white text
      clickedFreq.style.background = 'linear-gradient(90deg, #DD3134, #FF6B6B)';
      clickedFreq.style.color = 'white';
      clickedFreq.style.border = 'none';   // was either none or 2px solid, active gets none
      
      activeFreqBtn = clickedFreq;
      
      updateFeedback();
    }

    // ----- FEEDBACK: show currently selected amount + frequency + currency (optional) -----
    function updateFeedback() {
      if (!feedbackDiv) return;
      
      // determine amount
      let amountValue = '';
      let amountType = '';
      const symbol = currencySymbolSpan.textContent;
      
      if (activeAmountBtn) {
        amountValue = activeAmountBtn.dataset.amount;
        amountType = 'preset';
      } else if (customInput.value && customInput.value.trim() !== '') {
        amountValue = customInput.value;
        amountType = 'custom';
      } else {
        amountValue = '—';
      }
      
      // frequency
      let frequency = 'not selected';
      if (activeFreqBtn) {
        frequency = activeFreqBtn.dataset.frequency || 'selected';
      } else {
        // if no active, but we can show — but we want at least one? we set default later
        frequency = 'none';
      }
      
      const currencyCode = currencyLabel ? currencyLabel.textContent : 'USD';
      
      let amountDisplay = (amountValue !== '—') ? `${symbol}${amountValue}` : 'no amount';
      if (amountType === 'custom' && amountValue) amountDisplay = `${symbol}${amountValue}`;
      
      feedbackDiv.innerHTML = `✅ Selected: ${amountDisplay} ${currencyCode} · Frequency: ${frequency}`;
    }

    // ----- reset all active styles to default (used after currency change to keep consistency) -----
    function preserveActiveStatesAfterCurrency() {
      // active amount button should keep its active visual but with new symbol (already updated text)
      if (activeAmountBtn) {
        activeAmountBtn.style.background = '#DD3134';
        activeAmountBtn.style.color = 'white';
        activeAmountBtn.style.border = '2px solid #DD3134';
      }
      // active frequency stays as is (no symbol change needed)
    }

    // ----- INITIAL SETUP and DEFAULTS -----
    function initDonationWidget() {
      
      // 1) Currency: attach listener, set default symbol (USD = $)
      currencySelector.addEventListener('change', function() {
        updateCurrencyDisplay();
        preserveActiveStatesAfterCurrency(); // keep amount active style
        updateFeedback();
      });

      // 2) Amount buttons: attach click
      amountBtns.forEach(btn => {
        btn.addEventListener('click', handleAmountClick);
      });

      // 3) Custom amount input: when typing, clear active button style
      customInput.addEventListener('input', handleCustomInput);
      
      // also clear active if input gets focus (optional but friendly)
      customInput.addEventListener('focus', function() {
        if (activeAmountBtn) {
          activeAmountBtn.style.background = '#f8f9fa';
          activeAmountBtn.style.color = '#363558';
          activeAmountBtn.style.border = '2px solid #e0e0e0';
          activeAmountBtn = null;
        }
        updateFeedback();
      });

      // 4) Frequency buttons
      freqBtns.forEach(btn => {
        btn.addEventListener('click', handleFrequencyClick);
      });

      // 5) Set default active frequency: "One-time" active on page load (as it has gradient)
      //    but we need to mark it as activeFreqBtn
      const defaultFreq = document.querySelector('.freq-btn[data-frequency="one-time"]');
      if (defaultFreq) {
        // already has gradient, but we set it as activeFreqBtn and ensure style
        activeFreqBtn = defaultFreq;
        // ensure it has proper active style (gradient already there, but we explicitly set)
        defaultFreq.style.background = 'linear-gradient(90deg, #DD3134, #FF6B6B)';
        defaultFreq.style.color = 'white';
        defaultFreq.style.border = 'none';
      }

      // 6) Optionally set a default active amount? we don't set by default, but we can set first button? 
      //    Not automatically, but if you want: let's set $25 as default active for better UX.
      const defaultAmount = document.querySelector('.amount-btn[data-amount="25"]');
      if (defaultAmount) {
        // simulate click to set active style and state
        defaultAmount.style.background = '#DD3134';
        defaultAmount.style.color = 'white';
        defaultAmount.style.border = '2px solid #DD3134';
        activeAmountBtn = defaultAmount;
      }

      // 7) initial currency display (ensures symbol and label match)
      updateCurrencyDisplay();  // also calls updateFeedback inside
      
      // extra feedback call after defaults
      updateFeedback();

      // 8) Payment button click: show alert with donation summary
      paymentBtn.addEventListener('click', function(e) {
        e.preventDefault();  // prevent any form-like behavior
        let amount = '';
        const symbol = currencySymbolSpan.textContent;
        
        if (activeAmountBtn) {
          amount = activeAmountBtn.dataset.amount;
        } else if (customInput.value && customInput.value.trim() !== '') {
          amount = customInput.value;
        } else {
          amount = '0';
        }
        
        const currencyCode = currencyLabel ? currencyLabel.textContent : 'USD';
        let frequency = 'not selected';
        if (activeFreqBtn) {
          frequency = activeFreqBtn.dataset.frequency || 'one-time';
        }
        
        const designationSelect = document.getElementById('designation');
        const designation = designationSelect.options[designationSelect.selectedIndex]?.text || 'Where most needed';
        
        alert(`🧡 DONATION SUMMARY\n\nAmount: ${symbol}${amount} ${currencyCode}\nFrequency: ${frequency}\nDesignation: ${designation}\n\nThank you!`);
      });
    }

    // run when DOM ready
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initDonationWidget);
    } else {
      initDonationWidget();
    }

  })();
</script>

<!-- 
  Fully functional:
  - Click amount → active red, clears custom input, currency symbol updates all preset buttons & symbol.
  - Change currency → symbol updates, preset buttons show new currency, label changes.
  - Frequency: click to activate (exclusive), default One-time active.
  - Custom input → removes active amount style.
  - "Continue to Payment" shows summary with all selections.
  - Visual feedback div shows current state.
  All inline styles preserved, only active state overrides applied.
-->

              <!-- Urgent Call to Action -->
        <div style="background: linear-gradient(135deg, #DD3134, #DD3134); border-radius: clamp(20px, 4vw, 30px); padding: clamp(30px, 6vw, 60px); margin-bottom: clamp(40px, 8vw, 80px); position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 20% 80%, white 2px, transparent 2px); background-size: 40px 40px; display: none;"></div>
            
            <div style="position: relative; z-index: 2; display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr)); gap: clamp(30px, 5vw, 60px); align-items: center;">
                <div>
                    <div style="display: inline-flex; align-items: center; padding: clamp(8px, 2vw, 10px) clamp(15px, 3vw, 25px); background: rgba(255,255,255,0.2); color: white; border-radius: 30px; font-size: clamp(12px, 2.5vw, 14px); font-weight: 700; margin-bottom: clamp(15px, 3vw, 25px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                        <svg style="width: clamp(14px, 2vw, 16px); height: clamp(14px, 2vw, 16px); fill: white; margin-right: 6px;" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        URGENT NEED
                    </div>
                    
                    <h2 style="font-size: clamp(28px, 5vw, 52px); color: white; margin: 0 0 clamp(15px, 3vw, 20px) 0; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                        Every <span style="color: #FFF;">$50</span> Sponsors a Mother's Journey
                    </h2>
                    
                    <p style="font-size: clamp(16px, 3vw, 18px); color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: clamp(20px, 4vw, 30px);">
                        From her first prenatal visit to postpartum care, your donation covers a mother's complete maternal health journey. No mother should face pregnancy alone.
                    </p>
                    
                    <div style="display: flex; gap: clamp(10px, 2vw, 15px); flex-wrap: wrap;">
                        <button style="background: white; color: #DD3134; border: none; padding: clamp(14px, 2.5vw, 16px) clamp(20px, 3vw, 35px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 800; cursor: pointer; display: flex; align-items: center; gap: 8px; white-space: nowrap;">
                            <svg style="width: clamp(16px, 2.5vw, 18px); height: clamp(16px, 2.5vw, 18px); fill: #DD3134;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Sponsor a Mother
                        </button>
                    </div>
                </div>
                
                <div>
                    <div style="background: rgba(255,255,255,0.1); border-radius: clamp(20px, 3vw, 25px); padding: clamp(25px, 4vw, 40px); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center; margin-bottom: clamp(20px, 4vw, 30px);">
                            <div style="font-size: clamp(32px, 6vw, 42px); font-weight: 800; color: white; margin-bottom: 8px;">2,500+</div>
                            <div style="color: rgba(255,255,255,0.9); font-size: clamp(16px, 3vw, 18px);">Mothers Waiting for Sponsorship</div>
                        </div>
                        
                        <div style="height: 10px; background: rgba(255,255,255,0.2); border-radius: 5px; margin-bottom: clamp(15px, 3vw, 20px); overflow: hidden;">
                            <div style="width: 65%; height: 100%; background: white; border-radius: 5px;"></div>
                        </div>
                        
                        <div style="display: flex; justify-content: space-between; color: white; font-size: clamp(12px, 2.5vw, 14px); margin-bottom: clamp(20px, 4vw, 30px);">
                            <div>1,625 Sponsored</div>
                            <div>65% Funded</div>
                        </div>
                        
                        <button style="background: linear-gradient(90deg, #46DE48, #46DE48); color: white; border: none; padding: clamp(14px, 2.5vw, 16px); border-radius: 12px; font-size: clamp(14px, 2.5vw, 16px); font-weight: 700; cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <svg style="width: clamp(16px, 2.5vw, 18px); height: clamp(16px, 2.5vw, 18px); fill: white;" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            Help Close the Gap
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection