export default class BaseController {
    constructor(className) {
        let hasClass = false

        if (!Array.isArray(className)) {
            if (!document.body.classList.contains(className))
                hasClass = true
        } else {
            const classList = ['page-template-reset-password', 'page-template-transfer-account']

            classList.forEach((className) => {
                hasClass = hasClass || document.body.classList.contains(className)
            })
        }

        if (!hasClass)
            return
    }
}