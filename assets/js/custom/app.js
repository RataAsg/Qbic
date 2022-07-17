// rataasgharpor@gmail.com
// ADD ALL JS FRAMEWORKS
// import 'leaflet/dist/leaflet.js';
import anime from 'animejs';
import AOS from 'aos';
// ----------------------
jQuery(function () {
	//Model
	var appModel = {
		el: {},
	};

	//Controller
	var appController = {
		// INIT ALL CONTROLLERS
		init: function () {
			// AOS.init();
			// jQuery('.fancybox').fancybox();
			// appController.stickyMenu();
			appController.fadeinOut();
			appController.mobileMenuOpen();
			if (document.querySelector('.page-template-index')) {
				appController.fadeinOutServices();
			} else if (document.querySelector('.tax-services_category')) {
				appController.pricingSectionSlider();
				appController.ServiceTabChanger();
			}
		},
		fadeinOut: function () {
			$('.fadein-out').hover(
				function () {
					$(this).find('.first-fade-out').fadeOut(25);
					$(this).find('.first-fade-in').fadeIn(25);
				}, function () {
					$(this).find('.first-fade-out').fadeIn(25);
					$(this).find('.first-fade-in').fadeOut(25);
				}
			)
		},
		fadeinOutServices: function () {
			$('.other-service_img').hover(
				function () {
					$(this).find('.first-fade-out').fadeOut( 150);
					$(this).find('.first-fade-in').fadeIn( 150);
				}, function () {
					$(this).find('.first-fade-out').fadeIn( 150);
					$(this).find('.first-fade-in').fadeOut( 150);
				}
			)
			$('.first-fade-out_fast').parent().hover(
				function () {
					$(this).find('.first-fade-out_fast').fadeOut( 50);
					$(this).find('.first-fade-in_fast').fadeIn( 50);
				}, function () {
					$(this).find('.first-fade-out_fast').fadeIn( 50);
					$(this).find('.first-fade-in_fast').fadeOut( 50);
				}
			)
		},
		mobileMenuOpen: function(){
			$('.mobile-nav').click(function () {
				$(this).toggleClass('active-mobile-menu');
				$('.mobile-menu-content').toggleClass('hidden')
			});
		},
		ServiceTabChanger: function(){
			$('.nav-list').click(function () {
				let navListId = $(this).attr('id');
				$('.nav-list').addClass('nav-list-deactive');
				$(this).removeClass('nav-list-deactive');
				$(this).addClass('nav-list-active');
				$('.services_category-products_post').addClass('service-product-deactive');
				$('.'+ navListId).removeClass('service-product-deactive');
				$('.'+ navListId).addClass('service-product-active');
				new Swiper(".slider-" + navListId, {
					slidesPerView: 1,
					spaceBetween: 16,
					navigation: {
						nextEl: ".btn-next-" + navListId,
						prevEl: ".btn-prev-" + navListId,
					},
					breakpoints: {
						640: {
						  slidesPerView: 2,
						  spaceBetween: 20,
						},
						768: {
						  slidesPerView: 2,
						  spaceBetween: 16,
						},
						1024: {
						  slidesPerView: 4,
						  spaceBetween: 16,
						},
					},
				});
			});
		},
		pricingSectionSlider:function () {
			new Swiper(".pricing-section-slider", {
				slidesPerView: 1,
				spaceBetween: 16,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					640: {
					  slidesPerView: 2,
					  spaceBetween: 20,
					},
					768: {
					  slidesPerView: 2,
					  spaceBetween: 16,
					},
					1024: {
					  slidesPerView: 4,
					  spaceBetween: 16,
					},
				},
			});
		},
		
	};
	//View
	var appView = {
		init: function () {
			appController.init();
		},
	};
	// EXPORT INIT
	appView.init();
});
jQuery(document).ready(function () {});
