
        // tăng sản phẩm
    let numberQuantity = document.getElementById('quantity');
    let quantity = numberQuantity.value;
        // console.log(quantityPro);
        
        let render = (quantity) =>{
        numberQuantity.value = quantity;
        }

        let handlePlus = () => {
        quantity++
            render (quantity);
        }
        let handleMinus = () =>{
            if(quantity>1){
        quantity--
    }
    render (quantity);
        }
        numberQuantity.addEventListener('input', () => {
        quantity = numberQuantity.value;
    quantity = parseInt(quantity);// đưa về dạng số
    quantity = (isNaN(quantity) || quantity==0) ? 1 :quantity;
    render(quantity);
    console.log(quantity);
        });
