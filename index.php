<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Welcome To My Site</title>
</head>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
body {
    font-family: "Raleway", sans-serif;
    height: 100vh;
    background: #333 url('showcase.jpg') no-repeat center center / cover;
    color: #ccc;
    overflow: hidden;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    padding: 0 3rem;
}

h1, h2 {
    font-weight: 200;
    margin: 0.4rem;
}

h1 {
    font-size: 3.5rem;
}

h2 {
    font-size: 2rem;
    color: #aaa;
}

/* Cursor */
.txt-type > .txt {
    border-right: 0.2rem solid #777;
}

@media(min-width: 1200px) {
  
  </style>
<body>
    <div class="container">
        <h1>Ade Zaiv The
        <span class="txt-type" data-wait="3000" data-words='["Developer", "Designer"]'></span>
        </h1>
        <h2>Welcome To My Website</h2>
    </div>
    
    
    
    
    <script src="main.js"></script>
  <script>
    /*
// When we have a constructor functon we can assign properties using the this keyword
const TypeWriter = function(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
}

// Type Method
TypeWriter.prototype.type = function() {
    // console.log('Hello');
    
    // Current index of word
    // We use the modulus operator to get the total length of the words
    const current = this.wordIndex % this.words.length;
    // console.log(current);
    
    // Get full text of current word
    const fullTxt = this.words[current];
    // console.log(fullTxt);
    
    // Check to see if it's in the deleting state
    if(this.isDeleting) {
       // Remove a character
        this.txt = fullTxt.substring(0, this.txt.length - 1);
       } else {
       // Add a character
           this.txt = fullTxt.substring(0, this.txt.length + 1);
       }
    
    // Every half a second output what is in the .txt
    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
    
    // Initial Type Speed
    let typeSpeed = 300;
    if(this.isDeleting) {
       typeSpeed /= 2;
       }
    // Check to see if the word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
        // Make pause at end
       typeSpeed = this.wait;
        // Set isDeleting to true
        this.isDeleting = true;
       } else if(this.isDeleting && this.txt === '') {
        // Set isDeleting back to false
           this.isDeleting = false;
        // Move to the next word
           this.wordIndex++;
        // Pause before start typing again
           typeSpeed = 500;
       }
    
    
    // Run it at a certain pace
    setTimeout(() => this.type(), typeSpeed);
}

// Initialize on DOM Load
document.addEventListener('DOMContentLoaded', init);

// Initialize the app in the init function
function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait')
    // Initialize the TypeWriter
    new TypeWriter(txtElement, words, wait);
}
*/






// ES6 Class
// constructor is a method that runs when the object is instantiated from the class
class TypeWriter {
    constructor(txtElement, words, wait = 3000) {
        this.txtElement = txtElement;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;  
    }
     // instead of creating a prototpe method, we would just create a method within the class - a method called type
     // everything within the type method is going to be exactly the same thing

    type() {
    // Current index of word
    // We use the modulus operator to get the total length of the words
    const current = this.wordIndex % this.words.length;
    // console.log(current);
    
    // Get full text of current word
    const fullTxt = this.words[current];
    // console.log(fullTxt);
    
    // Check to see if it's in the deleting state
    if(this.isDeleting) {
       // Remove a character
        this.txt = fullTxt.substring(0, this.txt.length - 1);
       } else {
       // Add a character
           this.txt = fullTxt.substring(0, this.txt.length + 1);
       }
    
    // Every half a second output what is in the .txt
    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;
    
    // Initial Type Speed
    let typeSpeed = 300;
    if(this.isDeleting) {
       typeSpeed /= 2;
       }
    // Check to see if the word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
        // Make pause at end
       typeSpeed = this.wait;
        // Set isDeleting to true
        this.isDeleting = true;
       } else if(this.isDeleting && this.txt === '') {
        // Set isDeleting back to false
           this.isDeleting = false;
        // Move to the next word
           this.wordIndex++;
        // Pause before start typing again
           typeSpeed = 500;
       }
    
    
    // Run it at a certain pace
    setTimeout(() => this.type(), typeSpeed);
    
    }
}



// Initialize on DOM Load
document.addEventListener('DOMContentLoaded', init);

// Initialize the app in the init function
function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait')
    // Initialize the TypeWriter
    new TypeWriter(txtElement, words, wait);
}
  </script>
</body>
</html>
