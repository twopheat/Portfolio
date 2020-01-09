// Declaring some global variables
var generateEl = document.querySelector("#generate");
var copyEl = document.querySelector("#Copy");
var specialChar = document.querySelector("#sChar")
var keylist = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var keyspecial = "'(!)*+,-./:;<=>?@[]^_`{|}~";
var pLength = document.getElementById("pLength")


// Function to create random password
function makePass() {
    //var UserInput = pLength.value.replace(/[^0-9.]/g,"");
    var UserInput = pLength.value;
    if (UserInput >= 8 && UserInput <= 128) {
               
        // Declare local variables for makePass
        var Results = document.getElementById('results');
        var pass = "";
        var newkeys = keylist;
        if(specialChar.checked === true) {
            newkeys += keyspecial;
        }

        // Is input empty?
        if (pLength !== '') {
            for (var i = 0; i < UserInput; i++) {
                pass += newkeys.charAt(Math.floor(Math.random() * newkeys.length));
            }
            Results.value = pass;
            
        }
    }

}



//below two functions are supposed to copy to clipboard, no dice there
function Copy() {
    document.getElementById("results").select();
    document.execCommand("copy");
    alert("Copied");
}

// EventListeners for button click events

copyEl.addEventListener("click", Copy.bind(this));

generateEl.addEventListener("click", makePass.bind(this));
