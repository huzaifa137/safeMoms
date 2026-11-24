(function(){
  var $=function(s,c){return (c||document).querySelector(s)},$$=function(s,c){return Array.prototype.slice.call((c||document).querySelectorAll(s))};

  // mobile nav
  var b=$('.burger'),n=$('nav.main');
  if(b&&n){b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o);document.body.style.overflow=o?'hidden':''});
    $$('a',n).forEach(function(a){a.addEventListener('click',function(){n.classList.remove('open');document.body.style.overflow=''})})}

  // reveal on scroll
  var rv=$$('.rv');
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.12});
    rv.forEach(function(el){io.observe(el)});
  }else rv.forEach(function(el){el.classList.add('in')});

  // counters
  var cs=$$('[data-count]');
  if(cs.length&&'IntersectionObserver' in window){
    var co=new IntersectionObserver(function(es){es.forEach(function(e){
      if(!e.isIntersecting)return;co.unobserve(e.target);
      var el=e.target,end=+el.dataset.count,suf=el.dataset.suffix||'',t0=null,dur=1400;
      if(window.matchMedia('(prefers-reduced-motion:reduce)').matches){el.textContent=end.toLocaleString()+suf;return}
      (function f(t){if(!t0)t0=t;var p=Math.min((t-t0)/dur,1),v=Math.floor(end*(1-Math.pow(1-p,3)));el.textContent=v.toLocaleString()+suf;if(p<1)requestAnimationFrame(f)})(performance.now());
    })},{threshold:.5});
    cs.forEach(function(el){co.observe(el)});
  }

  // gallery filter + lightbox
  var fb=$$('.filters button'),figs=$$('.gal figure');
  fb.forEach(function(x){x.addEventListener('click',function(){
    fb.forEach(function(y){y.classList.remove('on')});x.classList.add('on');
    var k=x.dataset.f;figs.forEach(function(f){f.style.display=(k==='all'||f.dataset.c===k)?'':'none'});
  })});
  var lb=$('.lb');
  if(lb){
    var li=$('img',lb),lc=$('p',lb);
    figs.forEach(function(f){f.addEventListener('click',function(){li.src=$('img',f).src;li.alt=$('img',f).alt;lc.textContent=$('figcaption',f).textContent;lb.classList.add('on')})});
    lb.addEventListener('click',function(e){if(e.target!==li)lb.classList.remove('on')});
    document.addEventListener('keydown',function(e){if(e.key==='Escape')lb.classList.remove('on')});
  }

  // forms (front-end validation; connect to your backend or a form service later)
  $$('form[data-form]').forEach(function(f){
    f.addEventListener('submit',function(e){
      e.preventDefault();
      if(!f.checkValidity()){f.reportValidity();return}
      var ok=$('.ok',f.parentNode);if(ok){ok.style.display='block';ok.scrollIntoView({behavior:'smooth',block:'center'})}
      f.reset();
    });
  });
  var nl=$('.nl');if(nl){nl.addEventListener('submit',function(e){e.preventDefault();var i=$('input',nl);if(i.checkValidity()){nl.innerHTML='<span style="color:#fff;padding:12px 0">Thank you for subscribing.</span>'}else i.reportValidity()})}

  // donate amount "other"
  $$('.amts input').forEach(function(r){r.addEventListener('change',function(){var o=$('#other');if(o&&r.value!=='other')o.value=''})});
})();


/* SafeMom Uganda additions */
(function(){
  var $=function(s,c){return (c||document).querySelector(s)},$$=function(s,c){return Array.prototype.slice.call((c||document).querySelectorAll(s))};

  // social links come from assets/js/social.js
  var S=window.SOCIAL||{};
  $$('a[data-social]').forEach(function(a){var u=S[a.getAttribute('data-social')];if(u){a.href=u;a.target='_blank';a.rel='noopener'}});

  // Resources dropdown (click/tap toggle; hover works through CSS on desktop)
  $$('li.has-sub').forEach(function(li){
    var b=$('.subtoggle',li);
    b.addEventListener('click',function(e){e.stopPropagation();var o=li.classList.toggle('open');b.setAttribute('aria-expanded',o)});
  });
  document.addEventListener('click',function(e){$$('li.has-sub.open').forEach(function(li){if(!li.contains(e.target)){li.classList.remove('open');$('.subtoggle',li).setAttribute('aria-expanded','false')}})});
  document.addEventListener('keydown',function(e){if(e.key==='Escape')$$('li.has-sub.open').forEach(function(li){li.classList.remove('open');$('.subtoggle',li).setAttribute('aria-expanded','false')})});

  // donate: currency symbol + custom amount selects "Other"
  var cur=$('#cur');
  if(cur){
    var sym={USD:'$',EUR:'\u20ac',GBP:'\u00a3'};
    var upd=function(){var s=sym[cur.value]||'$';$$('[data-amt]').forEach(function(el){el.textContent=s+el.getAttribute('data-amt')});var l=$('#curlab');if(l)l.textContent=cur.value;var m=$('#cursym');if(m)m.textContent=s};
    cur.addEventListener('change',upd);upd();
  }
  var oth=$('#other');
  if(oth){oth.addEventListener('input',function(){var r=$('.amts input[value="other"]');if(r&&oth.value)r.checked=true})}
})();
