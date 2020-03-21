document.addEventListener("DOMContentLoaded", function () {

	// Данные для доставки (таблица с табами на страницах: index.html и basket.html)
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

	// Действующие промокоды
	const promocodesArr = [
		'PROMO1ALDOGA',
		'PROMO2ALDOGA',
		'PROMO31ALDOGA',
		'PROMO4ALDOGA',
		'PROMO5ALDOGA',
	];

	// копирование промокода в футере
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
			var promoInput2 = document.querySelector("#promoBannerFormSmall input");
			/* Select the text field */
			promoInput2.select();
			/* Copy the text inside the text field */
			document.execCommand("copy");
			$('#promoBannerFormSmall label').text('СКОПИРОВАННО');
			setTimeout(() => {
				$('#promoBannerFormSmall label').text('Скопировать Промокод');
			}, 1000);
		});

	}());

	// применение промокода на странице basket.html
	const promoBasketModule = (function () {
		$('#promoBasket button').click(function () {
			for (const i of promocodesArr) {
				if ($('#promoBasket input').val() === i) {
					$('#promoBasket input').val("");
					$('#promoBasket input').attr("placeholder", "Промокод применен");
					break;
				} else {
					$('#promoBasket input').val("");
					$('#promoBasket input').attr("placeholder", "Несуществующий промокод");
					break;
				}
			}
		})
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

	// Таблица с доставкой по городам на главной
	const deliveryModule = (function () {
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

	// Оформление заказа - (Табы с выбором города и формой обратной связи)
	const checkoutFormModule = (function () {
		$('#checkoutFormCities input').click(function () {
			let x = $(this).val();
			if (x === 'moscow') {
				$('#checkouPickupDate').text(deliveryObj[0].Moscow.pickup.date);
				$('#checkouPickupPrice').text(deliveryObj[0].Moscow.pickup.price);

				$('#checkouDateDPD').text(deliveryObj[0].Moscow.DPD.date);
				$('#checkouPriceDPD').text(deliveryObj[0].Moscow.DPD.price);

				$('#checkouDateYandex').text(deliveryObj[0].Moscow.Yandex.date);
				$('#checkouPriceYandex').text(deliveryObj[0].Moscow.Yandex.price);

			} else if (x === 'spb') {
				$('#checkouPickupDate').text(deliveryObj[0].SPB.pickup.date);
				$('#checkouPickupPrice').text(deliveryObj[0].SPB.pickup.price);

				$('#checkouDateDPD').text(deliveryObj[0].SPB.DPD.date);
				$('#checkouPriceDPD').text(deliveryObj[0].SPB.DPD.price);

				$('#checkouDateYandex').text(deliveryObj[0].SPB.Yandex.date);
				$('#checkouPriceYandex').text(deliveryObj[0].SPB.Yandex.price);

			} else if (x === 'petrozavodsk') {
				$('#checkouPickupDate').text(deliveryObj[0].Petrozavodsk.pickup.date);
				$('#checkouPickupPrice').text(deliveryObj[0].Petrozavodsk.pickup.price);

				$('#checkouDateDPD').text(deliveryObj[0].Petrozavodsk.DPD.date);
				$('#checkouPriceDPD').text(deliveryObj[0].Petrozavodsk.DPD.price);

				$('#checkouDateYandex').text(deliveryObj[0].Petrozavodsk.Yandex.date);
				$('#checkouPriceYandex').text(deliveryObj[0].Petrozavodsk.Yandex.price);
			}
		})
	}());

	// Ленивая загрузка изображений
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

	// Счетчик для товара
	const siteCounterModule = (function () {
		$('.site-counter__control_minus').click(function () {
			let x = $(this).next('.site-counter__input').val();
			$(this).next('.site-counter__input').val(parseInt(x) - 1);
			$(this).next('.site-counter__input').attr('value', parseInt(x) - 1);
			if (x <= 0) {
				$(this).next('.site-counter__input').val(0);
				$(this).next('.site-counter__input').attr('value', 0)
			}
		});
		$('.site-counter__control_plus').click(function () {
			let x = $(this).prev('.site-counter__input').val();
			$(this).prev('.site-counter__input').val(parseInt(x) + 1);
			$(this).prev('.site-counter__input').attr('value', parseInt(x) + 1);
		});
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
