//displaing modal and content there
export class Modal {
    // id of html tag
    constructor(contentId, fallbackText) {
      this.fallbackText = fallbackText;
      this.contentTemplateEl = document.getElementById(contentId);
      this.modalTemplateEl = document.getElementById("modal-template");
    }
  
    // chcem ho zobrazit nad loading spinner
    show() {
      // check if template tag is available or fallback
      //we are simulating creation of template on the page
      if ("content" in document.createElement("template")) {
        // code here
        const modalElements = document.importNode(this.modalTemplateEl.content, true); // make deep clone get acces to element properies to inside tag
        // create a properties for class
        this.modalElement = modalElements.querySelector(".modal"); // get ot specific element with class .
        this.backdropElement = modalElements.querySelector(".backdrop"); // get ot specific element with class .
  
        const contentElement = document.importNode(this.contentTemplateEl.content, true);
  
        //added to the page
  
        this.modalElement.appendChild(contentElement);
  
        //addign element to the DOM - page
  
        document.body.insertAdjacentElement("afterbegin", this.modalElement);
        document.body.insertAdjacentElement("afterbegin", this.backdropElement);
      } else {
        //fallback code
        alert(this.fallbackText);
      }
    }
  
    // chcem ho skryt
    hide() {
      // need to remove element from DOM
      if (this.modalElement) {
        document.body.removeChild(this.modalElement);
        document.body.removeChild(this.backdropElement);
  
        // properties need to be clean up
        this.modalElement = null;
        this.backdropElement = null;
      }
    }
  }
  