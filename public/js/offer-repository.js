let fetchOptions = {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
    },
    body: null,
};

class OfferRepository {

    constructor(id) {
    }

    #ajax() {
        fetch()
    }

    #onSuccess() {

    }

    create(offer) {

        fetch('/offers', {
            method: 'POST', // or 'PUT'
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

    delete(id) {

        return fetch('/admin/offers/' + id, {
            method: 'DELETE', // or 'PUT'
            headers: {
                'X-CSRF-TOKEN': document.querySelector('[name=csrf-token]').content
            },
        })
            .then((response) => {
                return response.json();
            })
            .then(this.#onSuccess.bind(this))
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    get() {

        fetch('/offers/{id}', {
            method: 'GET', // or 'PUT'
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

    edit() {
        fetch('/offers/{id}', {
            method: 'PUT', // or 'PUT'
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
}

const OfferRepositoryInstance = new OfferRepository();

export { OfferRepository, OfferRepositoryInstance };