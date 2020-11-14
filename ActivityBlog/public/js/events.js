import { Modal } from "./UI/Modal.js";
import { Map } from "./UI/Map.js";

$(function () {
  $("#trackme").tooltip();
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

// const button = document.getElementById("trackme");



// //how promises works internally
// const setTimer = (duration) => {
//   // build a new promise
//   const promise = new Promise((resolve, reject) => {
//     //we can define what should happened
//     setTimeout(() => {
//       resolve("Done");
//     }, duration);
//   });
//   return promise;
// };

// const getPosition = (opts) => {
//   //wrap it to the prosime
//   const promise = new Promise((resolve, reject) => {
//     navigator.geolocation.getCurrentPosition(
//       (success) => {
//         resolve(success); // we will get the data later
//       },
//       (error) => {
//         reject(error); // mark promise as failed
//       },
//       opts
//     ); // callbacks
//   });
//   return promise;
// };

// //return a promise with async
// async function trackUserHandler() {
//   // get user location
//   // let positionData;

//   let posData;
//   let timerData;

//   try {
//     posData = await getPosition();
//     timerData = await setTimer(2000);
//     myMap();
//   } catch (error) {
//     console.log(error);
//   }

//   function myMap() {
//     var location = { lat: posData.coords.latitude, lng: posData.coords.longitude };
//     var map = new google.maps.Map(document.getElementById("googleMap"), {
//       center: location,
//       zoom: 13,
//     });
//     var marker = new google.maps.Marker({
//       position: location,
//       map: map,
//     });
//   }
// }

// // browser hellp me dont block main thread
// button.addEventListener("click", trackUserHandler);
