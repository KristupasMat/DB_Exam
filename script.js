// I don't know how to make the code better now, I know that there is definitely a better way to loop through those arrays, but now I am only capable of doing it this way */

var likeBtn = document.querySelectorAll('button.like');
var likeAmount = document.querySelectorAll('span.likeAmount');
var comments = document.querySelectorAll('button.comment');
var commentBox = document.querySelectorAll('div.commentBox');
var messageBtn = document.querySelectorAll('button.sendMessage');

var count = 1;
var count1 = 1;
var count2 = 1;
var count3 = 1;
var xhttp = new XMLHttpRequest();



// Comment, like, message and AJAX request for Iron Man

comments[0].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[0].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ironmanFiles/commentOnIronMan.php", true);
    xhttp.send();
});
likeBtn[0].addEventListener('click', function(){
    likeAmount[0].innerHTML = count;
    count++;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[0 ].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ironmanFiles/giftToIron.php", true);
    xhttp.send();
});
messageBtn[0].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[0].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ironmanFiles/messageToIron.php", true);
    xhttp.send();
});




// Comment, like, message and AJAX request for Spider Man

comments[1].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[1].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "spidermanFiles/commentOnSpiderMan.php", true);
    xhttp.send();
});
likeBtn[1].addEventListener('click', function(){
    likeAmount[1].innerHTML = count1;
    count1++;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[1].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "spidermanFiles/giftToSpider.php", true);
    xhttp.send();
});
messageBtn[1].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[1].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "spidermanFiles/messageToSpider.php", true);
    xhttp.send();
});






// Comment, like, message and AJAX request for Super Man

comments[2].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[2].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "supermanFiles/commentOnSuperMan.php", true);
    xhttp.send();
});
likeBtn[2].addEventListener('click', function(){
    likeAmount[2].innerHTML = count2;
    count2++;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[2].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "supermanFiles/giftToSuper.php", true);
    xhttp.send();
});
messageBtn[2].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[2].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "supermanFiles/messageToSuper.php", true);
    xhttp.send();
});






// Comment, like, message and AJAX request for Wonder Woman

comments[3].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[3].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "wonderwomanFiles/commentOnWonderWoman.php", true);
    xhttp.send();
});
likeBtn[3].addEventListener('click', function(){
    likeAmount[3].innerHTML = count3;
    count3++;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[3].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "wonderwomanFiles/giftToWonder.php", true);
    xhttp.send();
});
messageBtn[3].addEventListener('click', function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            commentBox[3].innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "wonderwomanFiles/messageToWonder.php", true);
    xhttp.send();
});