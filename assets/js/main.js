
/*--------------------------------------------------------------
# Button
--------------------------------------------------------------*/
/*
window.addEventListener("DOMContentLoaded",() => {
	const btn = document.querySelector("button");
	var doneTimeout = null,
		resetTimeout = null;

	if (btn) {
		btn.addEventListener("click",function() {
			const runClass = "btn--running";
			const doneClass = "btn--done";
			// `.btn--running .btn__progress-fill` `stroke-dashoffset` duration in ms
			const submitDuration = 2000;
			const resetDuration = 1500;

			// fake the submission
			this.disabled = true;
			this.classList.add(runClass);

			clearTimeout(doneTimeout);
			clearTimeout(resetTimeout);

			doneTimeout = setTimeout(() => {
				this.classList.remove(runClass);
				this.classList.add(doneClass);
				
				// reset the button
				resetTimeout = setTimeout(() => {
					this.disabled = false;
					this.classList.remove(doneClass);
				}, resetDuration);

			}, 600 + submitDuration);
		});
	}
});
*/

/* початок калькулятор */

prices = {
  "landing-page": {
      cret: 1200,
      adj: 300,
      hell: 200,
      cons: 50,
  },
  "e-shop": {
      cret: 1000,
      adj: 600,
      hell: 300,
      cons: 50,
  },
  market: {
      cret: 600,
      adj: 250,
      hell: 200,
      cons: 50,
  },
  mobile: {
      cret: 1000,
      adj: 250,
      hell: 150,
      cons: 50,
  },
};

/* з цього місця треба комітити при логіні */

/*
function getformvalue() {
  const websiteelement = document.querySelector(`#projectorder`);
  const CreationEL = document.querySelector(`#Creation`);
  const AdjustmentEL = document.querySelector(`#Adjustment`);
  const heelppEL = document.querySelector(`#heelpp`);
  const ConsultationEL = document.querySelector(`#Consultation`);

  return {
      websiteTipe: websiteelement.value,
      cret: CreationEL.checked,
      adj: AdjustmentEL.checked,
      hell: heelppEL.checked,
      cons: ConsultationEL.checked,
  };
}

function calculatwork() {
  const values = getformvalue();
  let totalPrice = 0;
  const workTypes = prices[values.websiteTipe];

  if (values.cret) {
      totalPrice = workTypes.cret;
  }

  if (values.adj) {
      totalPrice = totalPrice + workTypes.adj;
  }

  if (values.hell) {
      totalPrice = totalPrice + workTypes.hell;
  }

  if (values.cons) {
      totalPrice = totalPrice + workTypes.cons;
  }

  const totalpriceEL = document.querySelector(`#totalprice`);

  totalpriceEL.textContent = totalPrice;
}

getformvalue();

const formEl = document.querySelector(`#proectprice-form`);

formEl.addEventListener(`change`, calculatwork);

// не перезавантажує сторінку при нажиманні кнопки
formEl.addEventListener(`submit`, function (event) {
  event.preventDefault();
});
*/

/* кінець калькулятор */


(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let body = select('body')
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Hero type effect
   */
  const typed = select('.typed')
  if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items')
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Initiate portfolio details lightbox 
   */
  const portfolioDetailsLightbox = GLightbox({
    selector: '.portfolio-details-lightbox',
    width: '90%',
    height: '90vh'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()