// Scroll to anchors
(function () {

    const smoothScroll = function (targetEl, duration) {
        const headerElHeight =  document.querySelector('.menu, .regist, .siteHeaderLogo, .regft').clientHeight;
        let target = document.querySelector(targetEl);
        let targetPosition = target.getBoundingClientRect().top - headerElHeight;
        let startPosition = window.pageYOffset;
        let startTime = null;
    
        const ease = function(t,b,c,d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        };
    
        const animation = function(currentTime){
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = ease(timeElapsed, startPosition, targetPosition, duration);
            window.scrollTo(0,run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        };
        requestAnimationFrame(animation);
  
    };
  
    const scrollTo = function () {
        const links = document.querySelectorAll('.siteHeader__item, .regist a, .siteHeaderLogo a, .regft a');
        links.forEach(each => {
            each.addEventListener('click', function () {
                const currentTarget = this.getAttribute('href');
                smoothScroll(currentTarget, 1000);
            });
        });
    };
    scrollTo();
  }()); 

  
// add Img Lazy Demo
addImgDefault('img.lazy','src');
addImgDefault('source.lazy','srcset');

window.addEventListener("scroll", function () { 
    // Add Onscroll .menu a
    onScroll();
    // Add Lazy Screen LDP
    myLoad('section','loaded');
    myLoad('.slide_run','slide');
    myLazy('img.lazy','src');
    myLazy('source.lazy','srcset');
    myLazy('.lazy-bg','img-bg');
}); 
autoLazy('section','loaded');
autoLazy('.slide_run','slide');
autoLazy('img.lazy','src');
autoLazy('source.lazy','srcset');
autoLazy('.lazy-bg','img-bg');



// Add Class : 1. Name Button / 2. Name Object / 3. Name Class Add
addClass('.siteHeaderNav','.siteHeaderMain','active');
addClass('.siteHeaderNav','.siteHeader-bg','active');

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
removeClass('.siteHeader-bg','.siteHeaderMain','active');
removeClass('.siteHeader-bg','.siteHeader-bg','active');
removeClass('.siteHeader a','.siteHeaderMain','active');
removeClass('.siteHeader a','.siteHeader-bg','active');