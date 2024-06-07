document.addEventListener('DOMContentLoaded', function() {
    var checkprice = document.getElementById('checkprice_shirt'); // Corrected
    var submit_shirt = document.getElementById('submit-shirt');
    var form_shirt = document.getElementById('form-shirt');
    var resetButton = document.getElementById('reset-shirt');
    var resibo = document.getElementById('resibo-shirt');

    

    

    function compute(){
        var shirt_size = document.getElementById('shirt_size').value;
        var print_size = document.getElementById('print-size_shirt').value;
        var material_type = document.getElementById('shirt_material').value;
        var vinyl_type = document.getElementById('typevinyl').value;    
        var shirt_num_string = document.getElementById('numShirt').value;
        var shirt_num = parseFloat(shirt_num_string);
    
        var shirtprice = 0;
        var print_sizeprice = 0;
        var vinyl_typeprice = 0;
    

        switch (shirt_size) {
            case "XS": 
                if (material_type == "Soft Cotton"){
                    shirtprice += 120;
                }
                else if (material_type == "Prem Cotton"){
                    shirtprice += 150;
                }
            break;
            case "S": 
                if (material_type == "Soft Cotton"){
                    shirtprice += 120;
                }
                else if (material_type == "Prem Cotton"){
                    shirtprice += 150;
                }
            break;
            case "M": 
                if (material_type == "Soft Cotton"){
                    shirtprice += 120;
                }
                else if (material_type == "Prem Cotton"){
                    shirtprice += 150;
                }
            break;
            case "L": 
                if (material_type == "Soft Cotton"){
                    shirtprice += 135;
                }
                else if (material_type == "Prem Cotton"){
                    shirtprice += 165;
                }
            break;
            case "XL": 
                if (material_type == "Soft Cotton"){
                    shirtprice += 135;
                }
                else if (material_type == "Prem Cotton"){
                    shirtprice += 165;
                }
            break;
            default:
                console.log("error in computing");
            break;
        }
        switch(vinyl_type){
            case "Holo":
                vinyl_typeprice += 10;
            break;
            case "Metal":
                vinyl_typeprice += 10;
            break;
            case "Glitter":
                vinyl_typeprice += 15;
            break;
            case "Glow":
                vinyl_typeprice += 25;
            break;
            case "Gamuza":
                vinyl_typeprice += 30;
            break;
            default:
                console.log("error in computing2");
            break;
        }
        switch(print_size){
            case "8x11":
                if (shirt_num >= 1 && shirt_num <= 11){
                    print_sizeprice += 65;
                }
                else if (shirt_num >= 12 && shirt_num <= 49){
                    print_sizeprice += 65;
                }
                else if (shirt_num >= 50){
                    print_sizeprice += 40;
                }
            break;
            case "4x7":
                if (shirt_num >= 1 && shirt_num <= 11){
                    print_sizeprice += 55;
                }
                else if (shirt_num >= 12 && shirt_num <= 49){
                    print_sizeprice += 40;
                }
                else if (shirt_num >= 50){
                    print_sizeprice += 35;
                }
            break;
            case "2x5":
                if (shirt_num >= 1 && shirt_num <= 11){
                    print_sizeprice += 50;
                }
                else if (shirt_num >= 12 && shirt_num <= 49){
                    print_sizeprice += 35;
                }
                else if (shirt_num >= 50){
                    print_sizeprice += 30;
                }
            break;
            default:
                console.log("error in computing3");
            break;
        }

        var totalprice = (shirtprice + print_sizeprice + vinyl_typeprice) * shirt_num;

        
        document.getElementById('size-shirt').textContent = shirt_size;
        document.getElementById('size-shirt-print').textContent = print_size;
        document.getElementById('material-shirt').textContent = material_type;
        document.getElementById('Printvinyl').textContent = vinyl_type;
        document.getElementById('num-shirt').textContent = shirt_num;

        
        

        document.getElementById('material-price-display').textContent = shirtprice.toFixed(2);
        document.getElementById('vinyl-price-display').textContent = vinyl_typeprice.toFixed(2);
        document.getElementById('totalprice-shirt').textContent = '₱' + (totalprice).toFixed(2);

        document.getElementById('shirt_price').value = shirtprice.toFixed(2);
        document.getElementById('vinyl_price').value = vinyl_typeprice.toFixed(2);
        document.getElementById('print_sizeprice').value = print_sizeprice.toFixed(2);
        document.getElementById('total-price-shirt').value = totalprice.toFixed(2);

    }



    checkprice.addEventListener('click', function (){

        if (!form_shirt.checkValidity()) {    
            form_shirt.reportValidity();
            
        } else {
            resibo.style.display = 'block';
            compute();
        }
    });

    resetButton.addEventListener('click', function() {
        resibo.style.display = 'none';

    });

    submit_shirt.addEventListener('click', function() {
        compute();
    });


        



});