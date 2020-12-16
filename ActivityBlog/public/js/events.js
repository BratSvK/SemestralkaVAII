import { Modal } from "./UI/Modal.js";
import { Map } from "./UI/Map.js";

const navbarIconBtn = document.querySelector("button");
const logo = document.getElementById('logo');


$(function() {
    $("#trackme").tooltip();
});

navbarIconBtn.addEventListener("click", () => {

    // zavola sa ked sa klikne a naopak toogle je na to
    logo.classList.toggle("unvisible");
});

class PlaceFinder {
    constructor() {
        const locateUserBtn = document.getElementById("trackme");

        //we need bind this listener for whole class and surrounded medthods
        locateUserBtn.addEventListener(
            "click",
            this.locateUserHandler.bind(this)
        ); // put a function which we want, when this event occurs, call on this event
    }

    getModal(contentId, text) {
        return new Modal(contentId, text);
    }

    selectPlace(coordinates) {
        //chceck if we have a map
        if (this.map) {
            this.map.render(coordinates);
        } else {
            //set to propertie
            this.map = new Map(coordinates);
        }
    }

    locateUserHandler() {
        //get location browseer geolocation
        // if we dont have acces to this fnc, fallback
        if (!navigator.geolocation) {
            alert("Location feature is not supported");
            return;
        }

        //addding a loading spinner modal
        const modal = this.getModal(
            "loading-modal-content",
            "Loading location - please wait"
        );

        modal.show();

        navigator.geolocation.getCurrentPosition(
            successResult => {
                //hide a loading spinner
                modal.hide();
                //create suradnice of user
                const coordinates = {
                    lat: successResult.coords.latitude,
                    lng: successResult.coords.longitude
                };
                //aplying a seleccted coordinates

                this.selectPlace(coordinates); // this target to  event not for class


            },
            error => {
                // hide a loading spinner
                modal.hide();
                alert(
                    "Could not locate you unfortunately, Please enter your adres manually"
                );
            }
        ); //take 2 parametres callback fnc
    }
}
//calland instance
new PlaceFinder();
