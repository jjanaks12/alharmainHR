import BaseController from '../controller/baseController'

export default class DemandPage extends BaseController {
    constructor(className) {
        super(className)

        this.initSlide()
    }

    initSlide() {
        const activeClass = 'demand__list__item--active'

        document.querySelectorAll('.demand__list__item')
            .forEach($demandItem => {
                let isActive = $demandItem.classList.contains(activeClass)
                const $opener = $demandItem.querySelector('.demand__list__item__opener')

                if ($opener)
                    $opener.addEventListener('click', (event) => {
                        event.preventDefault()

                        if (isActive)
                            $demandItem.classList.remove(activeClass)
                        else
                            $demandItem.classList.add(activeClass)

                        isActive = !isActive
                    })
            })
    }
}