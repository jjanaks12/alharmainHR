export class BurgerMenu {

    constructor(options) {
        this.option = Object.assign({
            selector: null,
            activeClass: 'active',
            hideNavigationOnClickOutside: false,
            navigationBlock: null,
            parentElement: document.querySelector('body'),
            onShow: null,
            onHide: null
        }, options)

        this.isActive = false

        if (this.option.selector)
            this.selectors = document.querySelectorAll(this.option.selector)
        else
            console.warn('selector needed in order to plugin to work')

        this.init()
    }

    init() {
        this.selectors?.forEach(($el) => {
            $el.addEventListener('click', this.clickHandler.bind(this))
        })

        if (this.option.hideNavigationOnClickOutside && this.option.navigationBlock)
            this.outsideClickHandler()
    }

    clickHandler(event) {
        if (event) {
            event.preventDefault()
            event.stopPropagation()
        }

        if (this.isActive) {
            this.hide()
        } else {
            this.show()
        }
    }

    outsideClickHandler() {
        let timer

        document.addEventListener('click', function (e) {
            if (timer)
                clearTimeout(timer)

            if (this.option.navigationBlock.contains(e.target))
                return

            timer = setTimeout(function () {
                if (this.isActive)
                    this.clickHandler()
                timer = null
            }.bind(this), 100)
        }.bind(this))
    }

    show() {
        if (this.option.onShow)
            this.option.onShow(this)

        this.option.parentElement.classList.add(this.option.activeClass)

        this.isActive = true

        this.selectors.forEach($link => {
            $link.dispatchEvent(new Event('shown', { bubbles: true }))
        })
    }

    hide() {
        if (this.option.onHide)
            this.option.onHide

        this.option.parentElement.classList.remove(this.option.activeClass)

        this.isActive = false

        this.selectors.forEach($link => {
            $link.dispatchEvent(new Event('hide', { bubbles: true }))
        })
    }
}