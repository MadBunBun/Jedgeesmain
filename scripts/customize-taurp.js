document.addEventListener('DOMContentLoaded', function() {
    var checkprice = document.getElementById('checkprice_taurp');
    var submit_taurp = document.getElementById('submit-taurp');
    var form_taurp = document.getElementById('form-taurp');
    var layout_display = document.getElementById('layout-price-display');
    var layout_price_display = document.getElementById('layout-price');
    var resetButton = document.getElementById('reset-taurp');
    var resibo = document.getElementById('resibo-taurp');

    var feet1 = document.getElementById('size-ft1');
    var feet2 = document.getElementById('size-ft2');
    var num_copies = document.getElementById('numcopies_taurp');
    var with_edit;

    var feet1_add = 18;
    var basepriceof2x3 = (feet1_add * 6);

    var basepriceof3x3 = (basepriceof2x3 + (feet1_add * 3));
    var basepriceof4x4 = (basepriceof3x3 + (feet1_add * 7));
    var basepriceof5x5 = (basepriceof4x4 + (feet1_add * 9));
    var basepriceof6x6 = (basepriceof5x5 + (feet1_add * 11));
    var basepriceof7x7 = (basepriceof6x6 + (feet1_add * 13));
    var basepriceof8x8 = (basepriceof7x7 + (feet1_add * 15));
    var basepriceof9x9 = (basepriceof8x8 + (feet1_add * 17));


    

    function updateFt2() {
        var minft1 = parseInt(feet1.value);

        if(!isNaN(minft1)) {
            feet2.min = minft1;
            
            switch (minft1) {
                case 2: 
                    feet2.min = 3;
                    feet2.max = 10;
                    break;
                case 3: 
                    feet2.max = 10;
                    break;
                case 4: 
                    feet2.max = 11;
                    break;
                case 5: 
                    feet2.max = 12;
                    break;
                case 6:
                    feet2.max = 15;
                    break;
                case 7:
                    feet2.max = 10;
                    break;
                case 8:
                    feet2.max = 16;
                    break;
                case 9:
                    feet2.max = 12;
                    break;
                default:
                    console.log('Error Returned to Default')
            }
            
        }

       
    }

    function computation() {
        var total_price_feet = 0;

        var feet1Int = parseInt(feet1.value);
        var feet2Int = parseInt(feet2.value);
        var layoutprice = 125;

        var baseprice = 0; // para lang malaman baseprice dynamically, this'll have a use later on

        var totalpricepay = 0;

        
        switch (feet1Int) {
            case 2:
                baseprice += basepriceof2x3;
                switch (feet2Int) {
                    case 3:
                     total_price_feet += basepriceof2x3;
                        break;
                    case 4:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 2));
                        break;
                    case 5:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 4));
                        break;
                    case 6:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 6));
                        break;
                    case 7:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 8));
                        break;
                    case 8:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 10));
                        break;
                    case 9:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 12));
                        break;
                    case 10:
                     total_price_feet += (basepriceof2x3 + (feet1_add * 14));
                        break;
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
            case 3: 
            baseprice += basepriceof3x3;
                switch (feet2Int) {
                    
                    case 3:
                        total_price_feet += basepriceof3x3;
                        break;
                    case 4:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 3));
                        break;
                    case 5:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 6));
                        break;
                    case 6:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 9));
                        break;
                    case 7:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 12));
                        break;
                    case 8:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 15));
                        break;
                    case 9:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 18));
                        break;
                    case 10:
                        total_price_feet += (basepriceof3x3 + (feet1_add * 21));
                        break;
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                
                break;
            case 4:
                baseprice += basepriceof4x4;
                switch (feet2Int) {
                    
                    case 4:
                        total_price_feet += basepriceof4x4;
                        break;
                    case 5:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 4));
                        break;
                    case 6:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 8));
                        break;
                    case 7:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 12));
                        break;
                    case 8:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 16));
                        break;
                    case 9:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 20));
                        break;
                    case 10:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 24));
                        break;
                    case 11:
                        total_price_feet += (basepriceof4x4 + (feet1_add * 28));
                        break;
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
            case 5:
                baseprice += basepriceof5x5;
                switch (feet2Int) {

                    case 5:
                        total_price_feet += basepriceof5x5;
                        break;
                    case 6:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 5));
                        break;
                    case 7:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 10));
                        break;
                    case 8:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 15));
                        break;
                    case 9:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 20));
                        break;
                    case 10:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 25));
                        break;
                    case 11:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 30));
                        break;
                    case 12:
                        total_price_feet += (basepriceof5x5 + (feet1_add * 35));
                        break;
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
            case 6:
                baseprice += basepriceof6x6;
                switch (feet2Int) {

                    case 6:
                        total_price_feet += basepriceof6x6;
                        break;
                    case 7:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 6));
                        break;
                    case 8:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 12));
                        break;
                    case 9:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 18));
                        break;
                    case 10:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 24));
                        break;
                    case 11:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 30));
                        break;
                    case 12:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 36));
                        break;
                    case 13:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 42));
                        break;
                    case 14:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 48));
                        break;
                    case 15:
                        total_price_feet += (basepriceof6x6 + (feet1_add * 54));
                        break;
                    
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                
                break;
            case 7:
                baseprice += basepriceof7x7;
                switch (feet2Int) {
                    case 7:
                        total_price_feet += basepriceof7x7;
                        break;
                    case 8:
                        total_price_feet += (basepriceof7x7 + (feet1_add * 7));
                        break;
                    case 9:
                        total_price_feet += (basepriceof7x7 + (feet1_add * 14));
                        break;
                    case 10:
                        total_price_feet += (basepriceof7x7 + (feet1_add * 21));
                        break;
                    
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
            case 8:
                baseprice += basepriceof8x8;
                switch (feet2Int) {
                    case 8:
                        total_price_feet += basepriceof8x8;
                        break;
                    case 9:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 8));
                        break;
                    case 10:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 16));
                        break;
                    case 11:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 24));
                        break;
                    case 12:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 32));
                        break;
                    case 13:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 40));
                        break;
                    case 14:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 48));
                        break;
                    case 15:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 56));
                        break;
                    case 16:
                        total_price_feet += (basepriceof8x8 + (feet1_add * 64));
                        break;
                    
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
            case 9:
                baseprice += basepriceof9x9;
                switch (feet2Int) {
                    case 9:
                        total_price_feet += basepriceof9x9;
                        break;
                    case 10:
                        total_price_feet += (basepriceof9x9 + (feet1_add * 9));
                        break;
                    case 11:
                        total_price_feet += (basepriceof9x9 + (feet1_add * 18));
                        break;
                    case 12:
                        total_price_feet += (basepriceof9x9 + (feet1_add * 27));
                        break;
                    case 13:
                        total_price_feet += (basepriceof9x9 + (feet1_add * 36));
                        break;
                    case 14:
                        total_price_feet += (basepriceof9x9 + (feet1_add * 45));
                        break;
                    default:
                        console.log('Error in Case 2 Switch cases!');
                        break;
                }
                break;
        }

        with_edit = document.querySelector('input[name="edit"]:checked');   
        document.getElementById('size-taurp').textContent = feet1.value +'x'+ feet2.value;
        document.getElementById('num-taurp').textContent = num_copies.value;
        document.getElementById('layout').textContent = with_edit.value;

        if (with_edit.value === 'Yes') {
            layout_display.style.display = 'block';
            layout_price_display.style.display = 'block';
            
            document.getElementById('layout-price').textContent = layoutprice.toFixed(2);
            
            
        }
        else {
            layoutprice = 0;
            layout_display.style.display = 'none';
            layout_price_display.style.display = 'none';
            

        }

        totalpricepay += ((total_price_feet * parseInt(num_copies.value)) + (layoutprice));

        document.getElementById('with-layout-dash').textContent = '-';
        document.getElementById('size-taurp-price').textContent = total_price_feet.toFixed(2);
        document.getElementById('num-taurp-price').textContent = (total_price_feet * parseInt(num_copies.value)).toFixed(2);
        document.getElementById('totalprice-taurp').textContent = '₱' + (totalpricepay).toFixed(2);

        document.getElementById('taurp-price').value = total_price_feet.toFixed(2);
        document.getElementById('copies-price').value = (total_price_feet * parseInt(num_copies.value)).toFixed(2);
        document.getElementById('layout-price-value').value = layoutprice.toFixed(2);
        document.getElementById('total-price').value = totalpricepay.toFixed(2);


        

    }

    checkprice.addEventListener('click', function() {
        
        updateFt2();
        if (!form_taurp.checkValidity()) {    
            form_taurp.reportValidity();
            
        } else {
            resibo.style.display = 'block';
            computation();
        }
    });

    resetButton.addEventListener('click', function() {
        resibo.style.display = 'none';

    });

    submit_taurp.addEventListener('click', function() {
        updateFt2();
        computation();
    });



});
