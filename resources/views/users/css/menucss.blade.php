<style>
/* Your existing CSS */

body {
    background-color: #fdf1ec;
}

.container {
    display: grid;
    grid-template-columns: 1fr repeat(auto-fill, minmax(400px, 1fr)); /* First column fixed, rest flexible */
    grid-gap: 20px;
    max-width: 1400px;
    margin: 0 auto;
}
.menu-card {
    position: sticky;
    grid-column: 1; /* Menu card occupies first column */
    grid-row: span 3; /* Span three rows */
    height: auto; /* Adjust height as needed */
    background-color: #fff; /* Menu card background color */
    padding: 3px; /* Decreased padding for content inside menu card */
    border-radius: 7px; /* Rounded corners */
    -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    margin-top: 100px;
    margin-left: 50px; /* Adjusted margin to push menu cards to the right */
    padding-bottom: 1.5%;
        flex-direction: column;
        transition: top 0.3s ease; /* Add smooth transition */
}

.menu-card p{
    margin-left: 30px;
    font-weight: 20px;
    margin-top: 10px;
}

.product-cards {
    display: flex; /* Change from grid to flex */
    flex-wrap: wrap; /* Allow the cards to wrap to the next line */
    justify-content: flex-start; /* Align the cards to the start of the container */
    margin-top: 50px;
    margin-left: 50px;
}

.wrapper {
    flex: 0 0 calc(33.333% - 20px); /* Set width of each card to approximately one-third of the container */
    margin-right: 20px; /* Add margin between cards */
    margin-bottom: 20px; /* Add margin between rows */
}


.product-img {
    float: left;
}

.product-img img {
    border-radius: 7px 0 0 7px;
    height: 420px; /* Adjust the height */
    width: 400px; /* Adjust the width */
}

.product-info {
    float: left;
    height: 400px;
    width: 400px;
    border-radius: 0 7px 10px 7px;
    background-color: #ffffff;
}

.product-text {
    height: 300px;
    width: 327px;
}

.product-text h1 {
    margin: 0 0 0 38px;
    padding-top: 52px;
    font-size: 34px;
    color: #474747;
}

.product-text h1,
.product-price-btn p {
    font-family: 'Bentham', serif;
}

.product-text h2 {
    margin: 0 0 47px 38px;
    font-size: 13px;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    color: #d2d2d2;
    letter-spacing: 0.2em;
}

.product-text p {
    height: 125px;
    margin: 0 0 0 38px;
    font-family: 'Playfair Display', serif;
    color: #8d8d8d;
    line-height: 1.7em;
    font-size: 15px;
    font-weight: lighter;
    overflow: hidden;
}

.product-price-btn {
    height: 103px;
    width: 327px;
    margin-top: 17px;
    position: relative;
}

.product-price-btn p {
    display: inline-block;
    position: absolute;
    top: -13px;
    height: 50px;
    font-family: 'Trocchi', serif;
    margin: 0 0 0 38px;
    font-size: 28px;
    font-weight: lighter;
    color: #474747;
}

span {
    display: inline-block;
    height: 50px;
    font-family: 'Suranna', serif;
    font-size: 34px;
}

.product-price-btn button {
    float: right;
    display: inline-block;
    height: 50px;
    width: 176px;
    margin: 0 40px 0 16px;
    box-sizing: border-box;
    border: transparent;
    border-radius: 60px;
    font-family: 'Raleway', sans-serif;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: #ffffff;
    background-color: #9cebd5;
    cursor: pointer;
    outline: none;
}

.product-price-btn button:hover {
    background-color: #79b0a1;
}


@media screen and (max-width: 992px) {
    .container {
        grid-template-columns: 1fr;
    }

    .wrapper {
        width: calc(50% - 20px);
    }
}

@media screen and (max-width: 600px) {
    .wrapper {
        width: calc(100% - 20px);
    }
}

.search-container {
    margin-top: 20px;
    position: relative;
}

.search-container input[type=text] {
    width: 40%; /* Full width */
    padding: 10px; /* Some padding */
    border: 1px solid #ccc; /* Gray border */
    border-radius: 5px; /* Rounded corners */
    box-sizing: border-box; /* Include padding in width */
    border-radius: 30px;
    margin-left: 30px;
}

.search-container button {
    position: absolute; /* Position the button */
    top: 0;
    left: 36.5%; /* Position to the left side */
    padding: 10px; /* Some padding */
    border: none; /* Remove borders */
    background: #9cebd5; /* Green background */
    color: white; /* White text */
    border-radius: 5px 0 0 5px; /* Rounded corners (left) */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
    width: 45px;
    height: 45px;
    border-radius: 30px;
    margin-left: 30px;
}

.search-container button:hover {
    background: #79b0a1; /* Dark green */
}


.crochet-list {
    margin-top: 10px;
    right: 40%;
    position: absolute;
    top: 13%;
    list-style: none; /* Remove bullet points */
}

.crochet-list li {
    color: grey; /* Set text color to grey */
    cursor: pointer; /* Change cursor to pointer on hover */
    list-style: none; /* Remove bullet points */
}

.crochet-list li:hover {
    text-decoration: underline; /* Underline text on hover */
}


/* Responsive adjustments */
@media (max-width: 768px) {
    .menu-card {
        position: static;
    }
}
</style>