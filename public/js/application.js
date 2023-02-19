import { OfferRequestForm } from './offer-form.js';

const offerRequestFormID = 'offer-request-form';

/*
*   When DOM is loaded
*/
document.addEventListener("DOMContentLoaded", function () {

    let offerte = new OfferRequestForm(offerRequestFormID);

    const myCarouselElement = document.querySelector('#slideshow')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 1000,
        touch: false
    });

    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }

    console.log('Application JS loaded');
});