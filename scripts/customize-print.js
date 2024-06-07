

document.addEventListener('DOMContentLoaded', function() {
    var paper = document.getElementById('papertype');
    var color = document.getElementById('typecolor');
    var size = document.getElementById('printsize');
    var pages = document.getElementById('pages');
    var resibo = document.getElementById('resibo');
    var instructions = document.getElementById('instructions');
    var checkpriceButton = document.getElementById('checkprice');
    var submit = document.getElementById('submit_print');
    var resetButton = document.getElementById('reset-print');

    var bondpaper = "Bond Paper";
    var copypaper = "Copy Paper";
    var vellumpaper = "Vellum Paper";
    var photopaper = "Photo Paper";
    var mattepaper = "Matte Paper";

    var colored = "Colored";
    var bw = "B&W";

    var a4 = "A4";
    var short = "Short";
    var long = "Long";

    var smallbind = "Small Ring Bind";
    var bigbind = "Big Ring Bind";
    var bookbind = "Book Bind";
    var none = "None";

    var bind;
    var totalpages;
    var bookbindpercent = .25;
    var smallringpercent = 10;
    var bigringpercent = 15;
    var total;
    var bindprice;

function computation() {
    bind = document.querySelector('input[name="bind"]:checked');           
    var pagesInt = parseFloat(pages.value);
    totalpages = 0;
    total = 0;
    bindprice = 0;

        if (paper.value === bondpaper) {
        if (bw === color.value) {
        if (short === size.value) {

            totalpages += (pagesInt * 2.00);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 2.00);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 3.00);
        }
        else {
            console.log("Must be some Error 1");
        }
    }

        else if (colored === color.value) {
        if (short === size.value) {
            totalpages += (pagesInt * 5.00);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 5.00);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 10.00);
        }
        else {
            console.log("Must be some Error 1.2");
        }
    }

        else {
        console.log("Must be some Error 2");
    }
    }

    else if (paper.value === copypaper) {
        if (bw === color.value) {
        if (short === size.value) {
            totalpages += (pagesInt * 1.50);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 1.50);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 2.00);
        }
        else {
            console.log("Must be some Error 3");
        }
    }

        else if (colored === color.value) {
        if (short === size.value) {
            totalpages += (pagesInt * 3.00);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 3.00);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 8.00);
        }
        else {
            console.log("Must be some Error 3.2");
        }
    }

        else { 
        console.log("Must be some Error 4");
    }

    }

    else if (paper.value === vellumpaper) {
        if (bw === color.value) {
            if (short === size.value) {
                totalpages += (pagesInt * 10.00);
            }
            else if(a4 === size.value) {
                totalpages += (pagesInt * 10.00);
            }
            else if(long === size.value) {
                totalpages += (pagesInt * 13.00);
            }
            else {
                console.log("Must be some Error 4.1");
            }
    }

    else if (colored === color.value) {
        if (short === size.value) {
            totalpages += (pagesInt * 13.00);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 13.00);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 16.00);
        }
        else {
            console.log("Must be some Error 4.2");
        }
    }

    else { 
        console.log("Must be some Error 5");
    }
}

    else if (paper.value === photopaper){
        if (bw === color.value) {
            if (short === size.value) {
                totalpages += (pagesInt * 6.00);
            }
            else if(a4 === size.value) {
                totalpages += (pagesInt * 6.00);
            }
            else if(long === size.value) {
                totalpages += (pagesInt * 10.00);
            }
            else {
                console.log("Must be some Error 5.1");
            }
        }

        else if (colored === color.value) {
            if (short === size.value) {
                totalpages += (pagesInt * 12.00);
            }
            else if(a4 === size.value) {
                totalpages += (pagesInt * 12.00);
            }
            else if(long === size.value) {
                totalpages += (pagesInt * 15.00);
            }
            else {
                console.log("Must be some Error 5.2");
            }
        }

        else { 
            console.log("Must be some Error 6");
        }

    }

    else if (paper.value === mattepaper){
        if (bw === color.value) {
            if (short === size.value) {
                totalpages += (pagesInt * 12.00);
            }
            else if(a4 === size.value) {
                totalpages += (pagesInt * 12.00);
            }
            else if(long === size.value) {
                totalpages += (pagesInt * 15.00);
            }
            else {
                console.log("Must be some Error 6.1");
            }
        }

    else if (colored === color.value) {
        if (short === size.value) {
            totalpages += (pagesInt * 15.00);
        }
        else if(a4 === size.value) {
            totalpages += (pagesInt * 15.00);
        }
        else if(long === size.value) {
            totalpages += (pagesInt * 20.00);
        }
        else {
            console.log("Must be some Error 6.2");
        }
    }

    else { 
        console.log("Must be some Error 7");
    }

}

    if (bind.value === smallbind) {
        total+= (totalpages + smallringpercent);
        bindprice += smallringpercent;
    }
    else if (bind.value === bigbind) {
        total += (totalpages + bigringpercent);
        bindprice += bigringpercent;
    }

    else if (bind.value === bookbind) {
        total += (totalpages + (totalpages * bookbindpercent));
        bindprice += (totalpages * bookbindpercent);

    }
    else {
        total += totalpages;
    }

    document.getElementById('paper').textContent = paper.value;
    document.getElementById('color').textContent = color.value;
    document.getElementById('size').textContent = size.value;
    document.getElementById('numpage').textContent = pages.value;
    document.getElementById('binding').textContent = bind.value;
    document.getElementById('totalprice').textContent = "₱" + total.toFixed(2);
    document.getElementById('bindprice').textContent = bindprice.toFixed(2);
    document.getElementById('pagesprice').textContent = totalpages.toFixed(2);  
    
    document.getElementById('bindpricehidden').value = bindprice.toFixed(2);
    document.getElementById('totalpages').value = totalpages.toFixed(2);
    document.getElementById('total').value = total.toFixed(2);

    }

    checkpriceButton.addEventListener('click', function() {
        if (document.getElementById("form-print").reportValidity()) {
            resibo.style.display = 'block';
            computation();
        }
        
        
});

    resetButton.addEventListener('click', function() {
        resibo.style.display = 'none';

    });

    submit.addEventListener('click', function() {
        computation();

    });



});
