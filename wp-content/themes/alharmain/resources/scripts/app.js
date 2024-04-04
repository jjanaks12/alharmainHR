import domReady from '@roots/sage/client/dom-ready'
import Swiper, { Navigation, Pagination } from 'swiper'

const initSwiper = () => {
  document.querySelectorAll('.swiper')
    .forEach($el => {
      new Swiper($el, {
        modules: [Navigation, Pagination],
        navigation: {
          nextEl: '.btn-next',
          prevEl: '.btn-prev'
        }
      })
    })
}

/**
 * Application entrypoint
 */
domReady(async () => {
  initSwiper()
})

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error)
