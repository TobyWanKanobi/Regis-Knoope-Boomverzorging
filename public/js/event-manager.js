class EventManager {

    eventlist = {};

    constructor() {

    }

    register(eventName, handler) {

        if (!this.eventlist.hasOwnProperty(eventName)) {
            this.eventlist[eventName] = [handler];
            return;
        }

        this.eventlist[eventName] += handler;
    }

    unregister(eventName, handler) {

        if (!this.eventlist.hasOwnProperty(eventName)) {
            console.error('Trying to delete a handler of non existing event');
            return;
        }

        let index = this.eventlist[eventName].indexOf(handler);
        if (index > -1) {
            this.eventlist[eventName].splice(index, 1);
        }
        else {
            console.log('no handler to remove for action: ' + eventName);
        }
    }

    dispatch(eventName, params) {

        console.log(this.eventlist);

        if (this.eventlist.hasOwnProperty(eventName)) {
            for (let cb in this.eventlist[eventName]) {

                console.log(cb);
                this.eventlist[eventName][cb](params);
            }
        }
    }
}

export { EventManager };