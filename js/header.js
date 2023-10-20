class Header extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
      <link rel="stylesheet" href="css/style.css">
      <header>
        <div class="header">
            <div class="main-container">
                <div class="header_left" >
                    <a href="index.php">
                        <img src="images/Logo_white.PNG" title="Umi no Mikaku" width="50px">
                    </a>
                    <div class="name">
                        <h3>UMI NO MIKAKU</h3>
                    </div>
                </div>
                <div class="header_right" align="right">
                    <a href="index.html"><h3>HOME</h3></a>
                    <a href="AboutUs.html"><h3>ABOUT US</h3></a>
                    <div class="dropdown">
                      <button class="dropbtn"><h3>SHOP NOW</h3>
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="#">Classie</a>
                        <a href="#">Fruitie</a>
                        <a href="#">Nuttie</a>
                        <a href="#">Minie</a>
                      </div>
                    </div> 
                    <a href="Contact.html"><h3>CONTACT US</h3></a>
                </div>
            </div>
        </div>
      </header>
    `;
  }
}

customElements.define('header-component', Header);