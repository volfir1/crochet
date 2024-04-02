<style>

#myCarousel {
        background-image: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);
    }

#myCarousel .item img {
    width: 100%;
    height: 500px; /* or any other desired height */
    object-fit: contain;
}

/* ----- Variables ----- */
/* ----- Global ----- */
* {
	 box-sizing: border-box;
}
 html, body {
	 height: 100%;
}
 body {
	 display: grid;
	 grid-template-rows: 1fr;
	 font-family: "Raleway", sans-serif;
	 background-image: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);
     display: flex;
    justify-content: flex-start;
    align-items: flex-start;

}
 h3 {
	 font-size: 0.7em;
	 letter-spacing: 1.2px;
	 color: #a6a6a6;
}
 img {
	 max-width: 200%;
	 filter: drop-shadow(1px 1px 3px #a6a6a6);
}
/* ----- Product Section ----- */
.product {
    display: grid;
    grid-template-columns: 0.9fr 1fr;
    margin: auto; /* This will center the product horizontally */
    padding: 3em; /* Increase padding */
    background-color: white;
    border-radius: 30px;
    margin-top: 200px; /* Adjust margin-top as needed */
    width: 35%;
    height: 60%;
}


/* ----- Photo Section ----- */
 .product__photo {
	 position: relative;
    
}
 .photo-container {
	 position: absolute;
	 left: -2.5em;
	 display: grid;
	 grid-template-rows: 1fr;
	 width: 100%;
	 height: 100%;
	 border-radius: 6px;

}
 
 .photo-main .controls {
	 display: flex;
	 justify-content: space-between;
	 padding: 0.8em;
	 color: #fff;
}
 .photo-main .controls i {
	 cursor: pointer;
}
.photo-main img {
    position: absolute;
    left: -3.5em;
    top: 2em;
    width: 130%; /* Adjust the width to 120% of its container */
    max-width: none; /* Allow the width to exceed the container if needed */
    height: 100%; /* Let the height adjust accordingly to maintain aspect ratio */
    max-height: 200%; /* Ensure the image doesn't exceed its container's height */
    filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
    margin-top: -35px;
    margin-left: -30px;
    border-radius: 30px;
}



/* ----- Informations Section ----- */
 .product__info {
    position: absolute;
	 padding: 0.8em 0;
     padding-left: 220px; /* Adjust as needed */
}
 .title h1 {
	 margin-bottom: 0.1em;
	 color: #4c4c4c;
	 font-size: 1.5em;
	 font-weight: 900;
}
 .title span {
	 font-size: 0.7em;
	 color: #a6a6a6;
}
 .price {
	 margin: 1.5em 0;
	 color: #d6adff;
	 font-size: 1.0em;
}
 .price span {
	 padding-left: 0.15em;
	 font-size: 2.9em;
}
 .variant {
	 overflow: auto;
}
 .variant h3 {
	 margin-bottom: 1.1em;
}
 .variant li {
	 float: left;
	 width: 35px;
	 height: 35px;
	 padding: 3px;
	 border: 1px solid transparent;
	 border-radius: 3px;
	 cursor: pointer;
}
 .variant li:first-child, .variant li:hover {
	 border: 1px solid #a6a6a6;
}
 .variant li:not(:first-child) {
	 margin-left: 0.1em;
}
 .description {
	 clear: left;
	 margin: 2em 0;
     
   
}
 .description h3 {
	 margin-bottom: 1em;
    
     
}
 .description ul {
	 font-size: 0.8em;
	 list-style: disc;
	 margin-left: 1em;
}
 .description li {
	 text-indent: -0.6em;
	 margin-bottom: 0.5em;
}
.description p {
    font-size: 12px;
    text-align: justify;
}


 .buy--btn {
	 padding: 1.5em 3.1em;
	 border: none;
	 border-radius: 7px;
	 font-size: 0.8em;
	 font-weight: 700;
	 letter-spacing: 1.3px;
	 color: #fff;
	 background-color:  #d6adff;
	 box-shadow: 2px 2px 25px -7px #4c4c4c;
	 cursor: pointer;
}
 .buy--btn:active {
	 transform: scale(0.97);
}
/* ----- Footer Section ----- */
 footer {
	 padding: 1em;
	 text-align: center;
	 color: #fff;
}
 footer a {
	 color: #4c4c4c;
}
 footer a:hover {
	 color: #ff3f40;
}
 

</style>