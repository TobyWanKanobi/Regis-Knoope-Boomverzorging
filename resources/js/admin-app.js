import { EventManager } from './event-manager.js';

class AdminApp {

    constructor(options) {

        this.eventManager = new EventManager();
        this.actions = options.actions;

        this.init();

    }

    init() {

        let context = this;

        document.addEventListener("DOMContentLoaded", function () {

            document.addEventListener('click', context.procesEvent.bind(context));
            console.log('AdminApp says DOMS ready!');

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
    }

    procesEvent(event) {

        let tar = event.target;
        console.log('click intercept');
        const action = tar.dataset.rkAction;

        if (!this.actions.includes(action)) {
            console.error('Unrecognized action: ' + action);
            return;
        }

        this.eventManager.dispatch(action, tar.dataset);
    }
}

export { AdminApp };