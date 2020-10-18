const button = document.getElementById("trackme");

$(function () {
  $("#trackme").tooltip();
});

//how promises works internally
const setTimer = (duration) => {
  // build a new promise
  const promise = new Promise((resolve, reject) => {
    //we can define what should happened
    setTimeout(() => {
      resolve("Done");
    }, duration);
  });
  return promise;
};

const getPosition = (opts) => {
  //wrap it to the prosime
  const promise = new Promise((resolve, reject) => {
    navigator.geolocation.getCurrentPosition(
      (success) => {
        resolve(success); // we will get the data later
      },
      (error) => {
        reject(error); // mark promise as failed
      },
      opts
    ); // callbacks
  });
  return promise;
};

//return a promise with async
async function trackUserHandler() {
  // get user location
  // let positionData;

  let posData;
  let timerData;

  try {
    posData = await getPosition();
    timerData = await setTimer(2000);
    myMap();
  } catch (error) {
    console.log(error);
  }

  function myMap() {
    var location = { lat: posData.coords.latitude, lng: posData.coords.longitude };
    var map = new google.maps.Map(document.getElementById("googleMap"), {
      center: location,
      zoom: 13,
    });
    var marker = new google.maps.Marker({
      position: location,
      map: map,
    });
  }
}

// browser hellp me dont block main thread
button.addEventListener("click", trackUserHandler);
