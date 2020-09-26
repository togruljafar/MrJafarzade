'use strict';
// pre-laoder
window.addEventListener('load', () => {
    $(".preloader").fadeOut("slow");
    window.scroll({
        top: 0,
        behavior: 'smooth'
    })
    toggleText(0, 'show');
    createPagNum();
    testimonialToggleText(0, 'show');
})
// open menu exit button Function 
let navbar = document.querySelector(".nav-menu");
let hamburg = document.querySelector(".hamburger-menu");
hamburg.addEventListener('click', () => {
	navbar.classList.toggle('change');
})
window.addEventListener('mouseup', (e) => {
	if(e.target != navbar) {
		navbar.classList.remove('change');
	}
})
//service slide function
let servSlide = document.querySelectorAll(".slide"),
    clientSlide = document.querySelectorAll(".client-slide"),
    servIndex, clientIndex;
show(servSlide, servIndex);
show(clientSlide, clientIndex);
function show(slide, index) {
    var slideLeng = slide.length,
        i;
    index = 0;
    for(i=0; i < slideLeng; i++) {
        slide[i].style.display = "none";
    }
        slide[index].style.display = "flex";
        callCards(slide);
        index++;

    setInterval( function() {
        for(i=0; i < slideLeng; i++) {
            slide[i].style.display = "none";
        }
        if(index < slideLeng) {
            slide[index].style.display = "flex";
            index++;
        } else {
            index = 0;
            slide[index].style.display = "flex";
            index++;
        }
        callCards(slide);
    }, 10000)

    function callCards(slide) {
        for (i = 0; i < slideLeng; i++) {
            if (slide[i].style.display == "flex") {
                let slideCards = slide[i].children,
                    int = 0;

                for(i=0; i<slideCards.length; i++) {
                    slideCards[i].style.opacity = "0";
                }

                setInterval( function() {
                    if (int < slideCards.length) {
                        slideCards[int].style.opacity = "1";
                        int++;
                    }
                }, 300)
            }
        }
    }
}
// percentage in skill section bars
let perBar = document.querySelectorAll('.per-bar');
    for (var i=0; i<perBar.length; i++) {
        perBar[i].style.width = "calc( " + perBar[i].parentNode.parentNode.firstElementChild.lastElementChild.innerHTML + " - 10px)";
    }

// testiomonial pagination
let slickInner = document.querySelector('.slick-inner'),
    carousel_item = document.querySelectorAll(".testimonial-item"),
    itemMarLeft = $('.testimonial-item').css("margin-left").replace("px", ""),
    lastScrollLeft = $('.slick-track').scrollLeft(),
    carouselIndex=0;

    slickInner.style.width = carousel_item.length * 50 + "%";
    itemMarLeft = 100 - itemMarLeft;
    itemMarLeft = 100 - itemMarLeft; // itemMarLeft changing to intager
    for(var i=0; i<carousel_item.length; i++) {
        carousel_item[i].style.width = ((slickInner.offsetWidth / carousel_item.length) - itemMarLeft) + "px";
    }
    let carousel_itemWidth = slickInner.offsetWidth / carousel_item.length;

function createPagNum() {
    let testimonialPagUl = document.querySelector('#testimonial-nm');
    for(var i=1; i <= (carousel_item.length / 2); i++) {
        let nodeLi = document.createElement("LI"),
            nodeA  = document.createElement("A"),
            textnodeA = document.createTextNode("0" + i);
            nodeA.appendChild(textnodeA);
            nodeLi.appendChild(nodeA);
        testimonialPagUl.appendChild(nodeLi);
    }
    let testimonialPagLi = document.querySelectorAll("#testimonial-nm li");
    testimonialPagLi.forEach((e) => {
        e.addEventListener('click', function() {
            for(var i=0; i<carousel_item.length; i++) {
                testimonialToggleText(i, 'hide');
            }
            carouselIndex = (parseInt(this.firstElementChild.innerHTML) * 2) - 1;
            testimonialToggleText(carouselIndex, 'show');
            document.querySelector('.slick-track').scroll({
                left: (parseInt(this.firstElementChild.innerHTML) - 1) * (carousel_itemWidth * 2),
                behavior: 'smooth'
            });
            lastScrollTop = carouselIndex * (carousel_itemWidth * 2);
        });
    })
}
function testimonialToggleText(index, state) {
    let testimonialPagLi = document.querySelectorAll("#testimonial-nm li");
    if (index > 0) index = Math.floor(index / 2);
    if (state === 'show') {
        testimonialPagLi[index].classList.add('active');
    } else {
        testimonialPagLi[index].classList.remove('active');
    } 
}

const leftBtn = document.querySelector('#leftBtn'),
    rightBtn = document.querySelector('#rightBtn');

rightBtn.addEventListener('click', function() {
    let newScrollLeft = $('.slick-track').scrollLeft();
    newScrollLeft = Math.ceil(newScrollLeft / carousel_itemWidth) * carousel_itemWidth;
    carouselIndex = newScrollLeft / carousel_itemWidth;
    testimonialToggleText(carouselIndex, 'hide');
    carouselIndex++;
    if (carouselIndex == carousel_item.length - 1) carouselIndex = 0;
    if (newScrollLeft < ((carousel_item.length / 2) + 1 ) * carousel_itemWidth) {
        document.querySelector('.slick-track').scroll({
            left: newScrollLeft + carousel_itemWidth,
            behavior: 'smooth'
        });
        testimonialToggleText(carouselIndex, 'show');
    } else {
        document.querySelector('.slick-track').scroll({
            left: 0,
            behavior: 'smooth'
        });
        testimonialToggleText(carouselIndex, 'show');
    }
    lastScrollLeft = newScrollLeft;
})

leftBtn.addEventListener('click', function() {
    let newScrollLeft = $('.slick-track').scrollLeft();
    newScrollLeft = Math.floor(newScrollLeft / carousel_itemWidth) * carousel_itemWidth;
    carouselIndex = newScrollLeft / carousel_itemWidth;
    testimonialToggleText(carouselIndex, 'hide');
    carouselIndex--;
    if (carouselIndex < 0) {
        carouselIndex = carousel_item.length - 1;
    }
    if (newScrollLeft == 0) {
        document.querySelector('.slick-track').scroll({
            left: ((carousel_item.length / 2) + 1 ) * carousel_itemWidth,
            behavior: 'smooth'
        });
        testimonialToggleText(carouselIndex, 'show');
    } else {
        document.querySelector('.slick-track').scroll({
            left: newScrollLeft - carousel_itemWidth,
            behavior: 'smooth'
        });
        testimonialToggleText(carouselIndex, 'show');
    }
    lastScrollLeft = newScrollLeft;
})

window.addEventListener('scroll', function() {
    if (index === 5) {
        setInterval( function() {
            let newScrollLeft = $('.slick-track').scrollLeft();
            newScrollLeft = Math.round(newScrollLeft / carousel_itemWidth) * carousel_itemWidth;
            carouselIndex = newScrollLeft / carousel_itemWidth;
            testimonialToggleText(carouselIndex, 'hide');
            carouselIndex++;
            if (carouselIndex == carousel_item.length - 1) carouselIndex = 0;
            if (newScrollLeft < ((carousel_item.length / 2) + 1 ) * carousel_itemWidth) {
                document.querySelector('.slick-track').scroll({
                    left: lastScrollLeft + carousel_itemWidth,
                    behavior: 'smooth'
                });
                testimonialToggleText(carouselIndex, 'show');
            } else {
                document.querySelector('.slick-track').scroll({
                    left: 0,
                    behavior: 'smooth'
                });
                testimonialToggleText(carouselIndex, 'show');
            }
            lastScrollLeft = newScrollLeft;
        }, 7500);
    } else {
        document.querySelector('.slick-track').scroll({
            left: 0,
            behavior: 'smooth'
        });
        carouselIndex = 0;
        lastScrollLeft = 0;
        testimonialToggleText(carouselIndex, 'show');
    }
})
// SECTION HORIZONTAL SCROLL
let fullPage = document.querySelector('#fullpage'),
    sections = document.querySelectorAll(".section"),
    secHeight = $(".section").height(),  //section height
    nextBtn = document.querySelector('#nextBtn'),
    prevBtn = document.querySelector('#prevBtn'),
    lastScrollTop = $(window).scrollTop(),
    navAddActive = document.querySelectorAll('#headerNav-nm li'),
    index = 0;

function toggleText(index, state) {
    if (state === 'show') {
        sections[index].querySelector('.aos-wrp').classList.add('aos-show');
        navAddActive[index].classList.add('active');
    } else {
        sections[index].querySelector('.aos-wrp').classList.remove('aos-show');
        navAddActive[index].classList.remove('active');
    } 
}

prevBtn.addEventListener('click', function() {
    let newScrollTop = window.scrollY;
    newScrollTop = Math.floor(newScrollTop / secHeight) * secHeight;
    index = newScrollTop / secHeight;
    toggleText(index, 'hide');
    index--;
    if (index < 0) {
        index = 0;
        toggleText(index, 'show');
    }

    if (newScrollTop > 0) {
        window.scroll({
            top: newScrollTop - secHeight,
            behavior: 'smooth',
        });
        toggleText(index, 'show');
    }
    lastScrollTop = index * secHeight;
})

nextBtn.addEventListener('click', function() {
    let newScrollTop = window.scrollY;
    newScrollTop = Math.floor(newScrollTop / secHeight) * secHeight;
    index = newScrollTop / secHeight;
    toggleText(index, 'hide');
    index++;
    if (index == sections.length) index = 0;

    if (newScrollTop < (sections.length - 1) * innerHeight) {
        window.scroll({
            top: newScrollTop + secHeight,
            behavior: 'smooth',
        });
        toggleText(index, 'show');
    } else {
        window.scroll({
            top: 0,
            behavior: 'smooth',
        });
        toggleText(index, 'show');
    }
    lastScrollTop = index * secHeight;
})

navAddActive.forEach((e) => {
    e.addEventListener('click', function() {
        for(var i=0; i<navAddActive.length; i++) {
            toggleText(i, 'hide');
        }
        index = parseInt(this.firstElementChild.innerHTML) - 1;
        toggleText(index, 'show');
        lastScrollTop = index * secHeight;
    });
})

window.addEventListener('wheel', (event) => {
    const delta = event.wheelDelta;
    let newScrollTop = window.scrollY;
    newScrollTop = Math.floor(newScrollTop / secHeight) * secHeight;
    index = lastScrollTop / secHeight;
    toggleText(index, 'hide');

    const sectionInner = sections[index].querySelector('.section-wrap');
    let posibleScroll = sectionInner.offsetHeight - secHeight;
    let innerScrollTop = sections[index].querySelector('.aos-wrp').scrollTop;
    if (delta < 0) {
        //downScroll
        if (index === sections.length - 1) {
            toggleText(index, 'show');
        }
        if (innerScrollTop > posibleScroll && index < sections.length - 1) {
            index++;
            window.scroll({
                top: lastScrollTop + secHeight,
                behavior: 'smooth'
            });
            toggleText(index, 'show');
        }
    } else {
        //upScroll
        if(index >= 0) {
            window.scroll({
                top: newScrollTop,
                behavior: 'smooth'
            });
            toggleText(index, 'show');
            if(index < sections.length - 1) toggleText(index + 1, 'hide');
        }
    }
    lastScrollTop = newScrollTop;
})

// window.addEventListener('scroll', function() {
//     let newScrollTop = window.scrollY;
//     if (lastScrollTop < newScrollTop) {
//         newScrollTop = Math.floor(newScrollTop / secHeight) * secHeight;
//         index = lastScrollTop / secHeight;
//         toggleText(index, 'hide');

//         const sectionInner = sections[index].querySelector('.section-wrap'); // oldugun page-in inneri
//         let posibleScroll = sectionInner.offsetHeight - secHeight;
//         let innerScrollTop = sections[index].querySelector('.aos-wrp').scrollTop;

//         //downScroll
//         if (index == sections.length - 1) {
//             toggleText(index, 'show');
//         }
//         if (innerScrollTop > posibleScroll && index < sections.length - 1) {
//             index++;
//             window.scrollTo(0, lastScrollTop + secHeight);
//             toggleText(index, 'show');
//         }
//     } else if (lastScrollTop > newScrollTop) {
//         newScrollTop = Math.floor(newScrollTop / secHeight) * secHeight;
//         index = lastScrollTop / secHeight;
//         toggleText(index, 'hide');

//         //upScroll
//         if(index >= 0) {
//             window.scrollTo(0, newScrollTop);
//             toggleText(index, 'show');
//             if(index < sections.length - 1) toggleText(index + 1, 'hide');
//         }
//     }

//     lastScrollTop = newScrollTop;
// })