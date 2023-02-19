class OfferRequestForm {

    constructor(id) {
        this.id = id;
        this._root = document.getElementById(this.id);
        this._form = null;

        if (this._root) {
            this.init();
        }
    }

    init() {
        this._form = this._root.querySelector('form');
        this._form.addEventListener('submit', this.#submitHandler.bind(this));
    }

    #submitHandler(e) {

        e.preventDefault();

        let formData = new FormData(this._form);

        fetch('/offers', {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(Object.fromEntries(formData)),
        })
            .then((response) => {
                return response.json();
            })
            .then(this.#onSuccess.bind(this))
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    #onSuccess(result) {

        if (result.success) {
            let el = document.querySelector('.print-error-msg');
            el.style.display = 'none';
            let ul = el.querySelector('ul');
            ul.innerHTML = '';

            const toastLiveExample = document.getElementById('liveToast')
            const toast = new bootstrap.Toast(toastLiveExample);

            toast.show();

            // Create a collapse instance, toggles the collapse element on invocation
            var myCollapse = new bootstrap.Collapse(document.getElementById('offer-collapse'));
            myCollapse.toggle();

        } else {
            this.#printErrorMsg(result.errors);

        }
    }

    #printErrorMsg(msg) {
        console.log(msg);
        let el = document.querySelector('.print-error-msg');
        let ul = el.querySelector('ul');
        console.log(msg);

        // clear
        ul.innerHTML = ``;

        el.style.display = 'block';

        for (const [k, v] of Object.entries(msg)) {
            ul.innerHTML += `<li>${v[0]}</li>`;
        }

    }
}

export { OfferRequestForm };