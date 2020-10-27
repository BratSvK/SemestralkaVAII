class Product {

    constructor(title, image, desc, price) {
      this.title = title;
      this.imageUrl = image;
      this.description = desc;
      this.price = price;
    }
  }
  
  class ElementAttributes {
    constructor(attrName, attrValue) {
      this.name = attrName;
      this.value = attrValue;
    }
  }
  
  class Component {
    // kde to chceme vykreslit
    constructor(renderHookId, shouldRender = true) {
      this.hookId = renderHookId;
      if(shouldRender)
      this.render();
    }
  
    render() {}
  
    // vytvorenie sablony elementu
    createRootElement(tag, cssClasses, atributes) {
      const rootElement = document.createElement(tag);
      if (cssClasses) {
        rootElement.className = cssClasses;
      }
      if (atributes && atributes.length > 0) {
        for (const attr of atributes) {
          rootElement.setAttribute(attr.name, attr.value);
        }
      }
      document.getElementById(this.hookId).append(rootElement);
      return rootElement;
    }
  }
  
  class ShoppingCart extends Component {
    items = [];
  
    // value is array of items
    set cartItems(value) {
      this.items = value;
      this.totalOutput.innerHTML = ` <h2>Total: \€${this.totalAmount.toFixed(2)}</h2>`;
    }
  
    get totalAmount() {
      const sum = this.items.reduce((prevValue, curItem) => prevValue + curItem.price, 0);
      return sum;
    }
  
    constructor(renderHookId) {
      super(renderHookId, false);
      this.orderProducts = () => {
        console.log("Ordering...");
        console.log(this.items);
      }
      this.render();
    }
  
    addProduct(product) {
      const updatedItems = [...this.items];
      updatedItems.push(product);
      this.cartItems = updatedItems;
    }
  
    
  
    render() {
      const cartEl = this.createRootElement("section", "cart");
      cartEl.innerHTML = `
      <h2>Total: \€${0}</h2>
      <button>Order Now!</button>
      `;
  
      const orderButton = document.querySelector("button");
      orderButton.addEventListener("click", this.orderProducts);
      this.totalOutput = cartEl.querySelector("h2");
    }
  }
  
  class ProductItem extends Component {
    constructor(product, renderHookId) {
      super(renderHookId,false);
      this.product = product;
      this.render();
    }
  
    // add to cart
    addToCart() {
      // vylepsenie
      App.addProductToCart(this.product);
    }
  
  
    render() {
      const prodEl = this.createRootElement("li", "product-item");
      // toto je vlastny kod to je logic co musi ostat
      prodEl.innerHTML = `
                    <div>
                      <img src="${this.product.imageUrl}" alt="${this.product.title}">
                      <div class="product-item__content">
                          <h2>${this.product.title}</h2>
                          <h3>${this.product.price}</h3>
                          <p>${this.product.description}</p>
                          <button>Add to Cart</button>
                      </div>
                    </div>
                    `;
  
      const addCartButton = prodEl.querySelector("button");
      addCartButton.addEventListener("click", this.addToCart.bind(this));
    }
  }
  
  class ProductList extends Component {
    #products = [];
  
    constructor(renderHookId) {
      super(renderHookId, false);
      this.render();
      this.fetchProcucts();
      
    }
  
    fetchProcucts() {
      this.#products = [
        new Product(
          "A pillow",
          "https://media.istockphoto.com/photos/pillow-isolated-on-white-background-picture-id899226398?k=6&m=899226398&s=612x612&w=0&h=JtsWJqDPEQGmJnqWCkgUcHGHhCmjId1OkELo-uVeY-o=",
          "A soft pillow!",
          19.99
        ),
        new Product(
          "A Carpet",
          "https://karabagh.lu/wp-content/uploads/2016/05/carpets-8.jpg",
          "A carpet which you might like - or not.",
          89.99
        ),
      ];
      this.renderProducts();
    }
  
    renderProducts() {
      for (const product of this.#products) {
        new ProductItem(product, "prod-list");
      }
  
    }
  
    render() {
      this.createRootElement("ul", "product-list", [new ElementAttributes("id", "prod-list")]);
      // render a single product
      if (this.#products && this.#products.length > 0) {
        this.renderProducts();
      }
    }
  }
  
  class Shop extends Component {
    constructor() {
      super();
    }
    // combine product and cartList
    render() {
      // kde to chceme zobrazit
      this.cart = new ShoppingCart("app");
      new ProductList("app");
    }
  }
  
  class App {
    // expect to have static prop
    static cart;
  
    static init() {
      const shop = new Shop();
      this.cart = shop.cart;
    }
  
    //
    static addProductToCart(product) {
      this.cart.addProduct(product);
    }
  }
  
  App.init();
  