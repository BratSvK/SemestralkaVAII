//class for rendering a map
export class Map {
    constructor(coords) {
      this.render(coords);
    }
  
    render(coordinates) {
      //JS SDK to display map
      //chceck if we have acces to this variable
      if (!google) {
        alert("Could not load maps libray- try later");
        return;
      }
  
      //loaded correctly
      const map = new google.maps.Map(document.getElementById("googleMap"), {
        center: coordinates, // expect a object with lat and lng
        zoom: 12,
      });
      // we want add marker nad where to place it
      new google.maps.Marker({
        position: coordinates,
        // where to place marker
        map: map,
      });
    }
  }
  