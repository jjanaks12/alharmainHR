import { Fancybox } from "@fancyapps/ui"

import domReady from '@roots/sage/client/dom-ready'
import { registerBlockType } from '@wordpress/blocks'

import { BurgerMenu } from "@scripts/core/BurgerMenu"
import HomePage from './pages/home'
import DemandPage from "./pages/demand"

const initLightBox = () => {
  Fancybox.bind("[data-fancybox]")
}

const initBurgerMenu = () => {
  new BurgerMenu({
    activeClass: 'nav--active',
    selector: '.nav__opener',
    hideNavigationOnClickOutside: true,
    navigationBlock: document.querySelector('#nav')
  })
}

const initHasClass = () => {
  document.querySelectorAll('.nav__main li').forEach(($self) => {
    const subMenus = $self.querySelectorAll('.sub-menu')

    if (subMenus.length > 0) {
      let $link = $self.querySelector('.opener')
      if (!$link) {
        $link = document.createElement('a')
        $link.setAttribute('href', '#')
        $link.classList.add('opener')
        $link.innerHTML = '<span class="icon-chevron-down"></span>'
        $self.append($link)
        $self.classList.add('has--dropdown')
      }
    }
  })
  initHasDropdownMenu()
}

const initHasDropdownMenu = () => {
  document.querySelectorAll('.nav__main > li > .opener')
    .forEach(($dropopener, index) => {
      const li = $dropopener.closest('li')
      let isActive = li.classList.contains('dropdown--active')
      const hasInitiated = Boolean($dropopener.dataset.dropdownId)

      if (!hasInitiated) {
        $dropopener.addEventListener('click', (event) => {
          event.preventDefault()

          const hasDropdown = li.classList.contains('has--dropdown')
          const activeClass = 'dropdown--active'

          if (hasDropdown) {
            if (isActive)
              li.classList.remove(activeClass)
            else
              li.classList.add(activeClass)

            isActive = !isActive
          }
        })
        $dropopener.setAttribute('data-dropdown-id', index.toString())
      }
    })
}

/**
 * Application entrypoint
 */
domReady(async () => {
  // initWP()

  initLightBox()
  initBurgerMenu()
  initHasClass()

  new HomePage('home')
  new DemandPage('post-type-archive-demand')
})

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error)

