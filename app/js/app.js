document.addEventListener("DOMContentLoaded", function () {

	const promoBanner = (function () {
		$('#promoBannerForm input').click(function () {
			var promoInput = document.querySelector("#promoBannerForm input");
			/* Select the text field */
			promoInput.select();
			/* Copy the text inside the text field */
			document.execCommand("copy");
			$('#promoBannerForm label').text('СКОПИРОВАННО');
			setTimeout(() => {
				$('#promoBannerForm label').text('Скопировать Промокод');
			}, 1000);
		});
		$('#promoBannerFormSmall input').click(function () {
			var promoInput = document.querySelector("#promoBannerForm input");
			/* Select the text field */
			promoInput.select();
			/* Copy the text inside the text field */
			document.execCommand("copy");
			$('#promoBannerForm label').text('СКОПИРОВАННО');
			setTimeout(() => {
				$('#promoBannerForm label').text('Скопировать Промокод');
			}, 1000);
		});
	}());

	const hamburgerModule = (function () {
		$('#hamburger').click(function () {
			$(this).toggleClass('is-active');
			$('#hamburgerOverlay').toggleClass('active');
		});
	}());

	const statusModule = (function () {
		$("#statusBtn").click(function () {
			$("#statusOverlay1").toggleClass("active");
			$("#statusOverlay2").removeClass("active");

			if ($("#statusOverlay1").hasClass('active')) {
				$("#statusOverlay2").removeClass("active");
			}
			if ($("#statusOverlay2").hasClass('active')) {
				$("#statusOverlay1").removeClass("active");
			}
		});
		$("#statusBtnGetCode").click(function () {
			if ($.trim($('#statusInputGetCode').val())) {
				$("#statusOverlay1").removeClass("active");
				$("#statusOverlay2").addClass("active");
				$('#statusOverlayPhoneChecker').text($('#statusInputGetCode').val());
			}
		});
	}());

	const basketModule = (function () {
		$('#basket').click(function () {
			$('#basketOverlay').toggleClass('active');
		});
	}());

	const bannerSliderModule = (function () {
		$(".main-banner__carousel").owlCarousel({
			lazyLoad: true,
			items: 1,
			navigation: true,
			navigationText: ["", ""],
			mouseDrag: false,
			touchDrag: false,
			loop: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,
			animateIn: 'fadeIn', // add this
			animateOut: 'fadeOut' // and this
		});
	}());

	const aboutReviewsSliderModule = (function () {
		$('#aboutReviews').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			items: 3,
			dots: false,
			responsive: {
				0: {
					items: 1,
					margin: 0
				},
				576: {
					items: 2,
					margin: 30
				},
				768: {
					items: 3
				}
			}
		})
	}());

	const deliveryModule = (function () {
		const deliveryObj = [
			{
				"Moscow": {
					"pickup": {
						"date": "14.04.2020",
						"price": "0 Р",
					},
					"DPD": {
						"date": "13.04.2020",
						"price": "450 Р",
					},
					"Yandex": {
						"date": "14.04.2020",
						"price": "500 Р",
					},
				},
				"SPB": {
					"pickup": {
						"date": "15.04.2020",
						"price": "0 Р",
					},
					"DPD": {
						"date": "16.04.2020",
						"price": "650 Р",
					},
					"Yandex": {
						"date": "17.04.2020",
						"price": "700 Р",
					},
				},
				"Petrozavodsk": {
					"pickup": {
						"date": "17.04.2020",
						"price": "0 Р",
					},
					"DPD": {
						"date": "17.04.2020",
						"price": "750 Р",
					},
					"Yandex": {
						"date": "17.04.2020",
						"price": "800 Р",
					},
				},
			}
		];

		$('#deliveryTabs input').click(function () {
			let x = $(this).val();
			if (x === 'moscow') {
				$('#deliveryDatePickup').text(deliveryObj[0].Moscow.pickup.date);
				$('#deliveryPricePickup').text(deliveryObj[0].Moscow.pickup.price);
				$('#deliveryDateDPD').text(deliveryObj[0].Moscow.DPD.date);
				$('#deliveryPriceDPD').text(deliveryObj[0].Moscow.DPD.price);
				$('#deliveryDateYandex').text(deliveryObj[0].Moscow.Yandex.date);
				$('#deliveryPriceYandex').text(deliveryObj[0].Moscow.Yandex.price);
			} else if (x === 'spb') {
				$('#deliveryDatePickup').text(deliveryObj[0].SPB.pickup.date);
				$('#deliveryPricePickup').text(deliveryObj[0].SPB.pickup.price);
				$('#deliveryDateDPD').text(deliveryObj[0].SPB.DPD.date);
				$('#deliveryPriceDPD').text(deliveryObj[0].SPB.DPD.price);
				$('#deliveryDateYandex').text(deliveryObj[0].SPB.Yandex.date);
				$('#deliveryPriceYandex').text(deliveryObj[0].SPB.Yandex.price);
			} else if (x === 'petrozavodsk') {
				$('#deliveryDatePickup').text(deliveryObj[0].Petrozavodsk.pickup.date);
				$('#deliveryPricePickup').text(deliveryObj[0].Petrozavodsk.pickup.price);
				$('#deliveryDateDPD').text(deliveryObj[0].Petrozavodsk.DPD.date);
				$('#deliveryPriceDPD').text(deliveryObj[0].Petrozavodsk.DPD.price);
				$('#deliveryDateYandex').text(deliveryObj[0].Petrozavodsk.Yandex.date);
				$('#deliveryPriceYandex').text(deliveryObj[0].Petrozavodsk.Yandex.price);
			}
		});

		$('#deliverySlider').owlCarousel({
			loop: true,
			margin: 0,
			nav: true,
			items: 1,
			dots: false
		});

	}());

	const lazyLoadModule = (function () {
		var lazyLoadInstance = new LazyLoad({
			elements_selector: ".lazy"
		});
	}());

	const catalogWithFilterModule = (function () {
		$("#catalogWithFilterPriceToggle").click(function () {
			$("#catalogWithFilterPriceToggle span").toggleClass('active');
		})
	}());

	if ($(window).width() <= 991) {
		const popularGoodsSliderModule = (function () {
			$('#popularGoodsSlider').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				items: 2,
				dots: false,
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 2
					},
					990: {
						onResize: function () {
							$('#popularGoodsSlider').trigger('destroy.owl.carousel');
							$('#popularGoodsSlider').removeClass('owl-theme owl-carousel');
						}
					}
				}
			});
		}());
	}
});
