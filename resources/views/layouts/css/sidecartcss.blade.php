<style>
    :root {
    --body-color: #FFFFFF;
    --sidebar-color: #C0C0C0;
    --primary-color: #69a418;
    --primary-light-color: #90EE90; /* Renamed the variable */
    --toggle-color: #FFFFFF;
    --text-color: #000000;
    --header-color: #DCDCDC;

    --trans-02: all 0.2s ease; /* Corrected the syntax for transition */
    --trans-03: all 0.3s ease;
    --trans-04: all 0.4s ease;
    --trans-05: all 0.5s ease;
}

.custom-font-heading {
    font-family: 'Playfair Display', serif;
}

.custom-font-body {
    font-family: 'Montserrat', sans-serif;
}

.menu-container {
    max-height: calc(200vh - 100px);
    /* Adjust the height as needed */
    overflow-y: auto;
    scroll-padding-top: 100px;
    /* Offset to account for fixed buttons */
    padding-top: 120px;
    /* Add padding to the top */
}

.button-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    background-color: transparent;
    /* Initial transparent background */
    transition: background-color 0.3s ease;
}

.button-wrapper:hover {
    background-color: rgba(0, 0, 0, 0.1);
    /* Change color upon hover */
}

.clicked {
    border: 2px solid #4CAF50;
    /* Green border color */
}


body{
    min-height: 100vh;
    overflow-x: hidden;
}

.sidecart {
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 600px;
    background-color: white;
    box-shadow: -10px 0 15px var(--sidebar-color);
    z-index: 9999; /* Increased z-index value */
    border-right-color: var(--primary-color);
    transition: var(--trans-05);
}
.sidecart::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 10px;
    background-color: var(--primary-color);
    z-index: 10000; /* Ensure the border is above other content */
}

.button-wrapper {
    z-index: 10000; /* Ensure button wrapper is above other content */
}


.cart_content {
    display: flex;
    height: 100%;
    flex-direction: column;
    position: relative;
}

.cart_header {
 padding: 1rem;
border-bottom: 1px solid var(--header-color);
display: flex;
justify-content: space-between;
align-items: center;
}

.header_title {
    padding-left: 27%;
    display: absolute;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center; /* Center the text horizontally */
}

.header_title h2 {
    margin: 0; /* Remove default margin */

}

.header_title span {
    position: absolute;
    top: -5px;
    right: -77px;
    width: 20px;
    height: 20px;
    background-color: var(--primary-color);
    border-radius: 50%;
    color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidecart .toggle {
    position: absolute;
    top: 50%;
    right: 580px;
    transform: translateY(-50%) rotate(180deg); /* Rotating it back to 0 degrees */
        height: 50px;
    width: 50px;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--toggle-color);
    font-size: 40px;
    transition: var(--trans-05);
    z-index: 1000;
    margin-right: 20px;
    top: 40px;
}

.sidecart.close .toggle {
    transform: translateY(-50%) rotate(180deg); /* Rotating it when closed */
}




.cart_content .icon {
    margin-left: 100%;
    font-size: 40px;
}

.cart_header i {
    margin: 0;
}


.sidecart.close .toggle {
    /* Remove the rotate transformation */
    transform: translateY(-50%);
    transition: var(--trans-05);
}
.sidecart.close .cart_actions{
    width: 0%;
    opacity: 0;
}

.sidecart.close {
    width: 10px;

}

.sidecart.close .toggle {
    position: absolute;
    top: 50%;
    right: 0; /* Adjusted to follow the sidecart when closed */
  
    height: 50px;
    width: 50px;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--toggle-color);
    font-size: 40px;
    transition: var(--trans-05);
    z-index: 1000; /* Ensure the toggle button is above the sidebar */
    top: 40px;

}

.cart_items {
    /* flex-grow: 1; */
    overflow-y: auto; /* Enable scrolling if content exceeds height */
}

.cart_actions{
    flex-grow: 1;
    padding: 1rem 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 600px;
    flex: 1;
    background-color: white;
    z-index: 100;
    border-top: 1px solid var(--header-color);
    box-shadow: 0 -5px 10px var(--header-color);
    opacity: 1;
    transition: var(--trans-05); /* Smooth transition */
}

.cart_actions .subtotal{
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 2px;
}

.cart_actions button{
    border:none ;
    background-color: #000000;
    color: #FFFFFF;
    border-radius: 15px;
    padding:10px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor:pointer;
}


.cart_actions button:nth-of-type(2){
    background-color: var(--primary-color) ;
}

.cart_item{
    position: relative;
    padding: 1rem;
    width: 100%;
    min-height: 150px;
    display: flex;
    border-bottom: 1px solid var(--header-color);
}

.item_img{
    flex: 1;
}

.item_img img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.item_details{
    flex: 2;
    padding-top: 1rem;
    padding-left: 1rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.item_details p{
    color: #666;
}

.item_details .qty{
    align-self: flex-start;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.item_details .qty span{
    width: 30px;
    height: 30px;
    background-color: #FFFFFF;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    line-height: 1;
    cursor: pointer;
    box-shadow: 3px 3px 5px var(--header-color), -1px -1px 2px var(--sidebar-color);
    user-select: none;
    transition: var(--trans-02);
}

.item_details .qty span:hover{
    scale: 1.1;
}

.qty span:first-of-type{
    font-size: 2rem;
    padding-bottom: 5px;
}

.item_details .qty span:active{
    scale: 1;
}

.remove_item{
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    background-color: #C0C0C0;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.hidden {
    display: 'hidden';
    transition: var(--trans-05);

}

.p-relative {
    position: relative !important;
}

.remove_item span{
    color: #FFFFFF;
    font-size: 30px;

}





</style>