import BaseController from "@scripts/controller/baseController"
import Swiper from "swiper"
import { Autoplay, Navigation, Pagination, EffectFade } from 'swiper/modules'

export default class HomePage extends BaseController {
    constructor(className) {
        super(className)

        this.initSwiper()
        this.initCalcSameHeight('.stats__list__item', '.stats__section')
    }

    initSwiper = () => {
        const $banner = document.querySelector('.banner')
        if ($banner) {
            const slider = new Swiper($banner, {
                modules: [Navigation, Pagination, Autoplay, EffectFade],
                navigation: {
                    nextEl: '.btn-next',
                    prevEl: '.btn-prev'
                },
                effect: "fade",
                loop: true,
                slidesPerView: 1,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                init: false
            })

            slider.on('init', ($el) => {
                $el.slides.forEach($slide => {
                    const { country } = $slide.dataset

                    if (country)
                        console.log(country);
                });
            })

            slider.init()
        }

        const $demand = document.querySelector('.demand__slider')
        if ($demand) {
            new Swiper($demand, {
                modules: [Navigation, Pagination],
                navigation: {
                    nextEl: '.btn-next',
                    prevEl: '.btn-prev'
                },
                spaceBetween: 30,
                breakpoints: {
                    641: {
                        slidesPerView: 2,
                    },
                    993: {
                        slidesPerView: 2,
                        spaceBetween: 33,
                    }
                }
            })
        }
    }

    initCalcSameHeight(blockSelector, parentSelector) {
        let maxHeight = 0

        document.querySelectorAll(blockSelector)
            .forEach($block => {
                maxHeight = Math.max($block.offsetHeight, maxHeight)
            })

        const $parent = document.querySelector(parentSelector)
        if ($parent) {
            $parent.style.setProperty('--list-height', maxHeight + 'px')
        }
    }
}