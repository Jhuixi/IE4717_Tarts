class Header extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
      <link rel="stylesheet" href="css/header.css">
      <header>
        <div class="header">
            <div class="main-container">
                <div class="header_left" >
                    <a href="index.php">
                        <img src="images/watercolourtart.png" title="Umi no Mikaku" width="50px">
                    </a>
                    <div class="name">
                        <h3>TARTIE DELIGHTS</h3>

                    </div>
                </div>
                <div class="header_right" align="right">
                    <a href="index.html"><h3>HOME</h3></a>
                    <a href="AboutUs.html"><h3>ABOUT US</h3></a>
                    <div class="dropdown">
                      <button class="dropbtn">
                        <h3>SHOP NOW</h3>
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                      <a href="allproducts(classie).html">Classie</a>
                      <a href="allproducts(frutie).html">Fruitie</a>
                      <a href="allproducts(nuttie).html">Nuttie</a>
                      <a href="allproducts(minie).html">Minie</a>
                      </div>
                    </div>
                    <a href="Contact.html"><h3>CONTACT US</h3></a>
                    <div class="cartIcon">
                      <a href="checkOut.php">
                        <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/6e5e4f/shopping-cart--v1.png" alt="shopping-cart--v1"/>
                      </a>
                    </div>
                </div>
            </div>
        </div>
      </header>
    `;
  }
}

customElements.define('header-component', Header);
