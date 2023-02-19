import { OfferRepositoryInstance } from './offer-repository.js';
import { AdminApp } from './admin-app.js';


let actions = [
    'DELETE_OFFER',
    'CREATE_OFFER',
    'EDIT_OFFER',
    'GET_OFFER',
'DELETE_USER'];

const App = new AdminApp({ actions: actions });

let executeDelete = function (params) {

    console.log(params);

    OfferRepositoryInstance.delete(params.rkOfferId).then(function () {

        const toastLiveExample = document.getElementById('liveToast')
        const toast = new bootstrap.Toast(toastLiveExample);

        toast.show();

    });
}

let executeGet = function (params) {
    OfferRepositoryInstance.get(params.rkOfferId);
}

let executeDeleteUser = function (params) {

    console.log(params);
    fetch('/admin/users/'+ params.rkUserid, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('[name=csrf-token]').content
        }
    })
    .then((response)=> {return response.json(); })
    .then((result) => {
        const toastLiveExample = document.getElementById('liveToast')
        const toast = new bootstrap.Toast(toastLiveExample);

        toast.show();
    })
    .catch((err) => {console.error(err)});
}

App.eventManager.register('DELETE_OFFER', executeDelete);
App.eventManager.register('GET_OFFER', executeGet);
App.eventManager.register('DELETE_USER', executeDeleteUser);