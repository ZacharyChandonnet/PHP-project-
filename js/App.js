/**
 * @module App
 */
export default class App {
    /**
     * Méthode principale. Sera appelée après le chargement de la page.
     */
    static main() {
        this.menuHamburger();
    }
    /**
     * Méthode qui permet d'attendre le chargement de la page avant d'éxécuter le script principal
     * @returns undefined Ne retourne rien
    */
    static init() {
        window.addEventListener("load", () => {
            this.main();
        });
    }

    static menuHamburger() {
        const menuHamburger = document.querySelector(".menu-ham")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu')
        })
    }
}
App.init();
