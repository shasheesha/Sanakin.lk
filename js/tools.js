
const rangeInput = document.getElementById('priceRangeInput');
if(rangeInput){
    rangeInput.addEventListener('input', function(e){
        document.getElementById('rangeValue').innerHTML = e.target.value;
    });
}

function filterApply(cityLength,catLength){
    let maxprice = 0;
    let priceVariant = 0;
    let categories = 0;
    let cities = 0;
    
    //get max-price range
    maxprice = document.getElementById('price-range').value;
    
    //get selected price variant
    priceVariant = document.getElementById('priceVariant').value;
    
    //find the selected Categories
    const cat = [];
    const catVal = [];
    let catValId = 0;
    
    for(let i = 10; i <= catLength; i++){
        cat[i] = document.getElementById(i);
        if(cat[i].checked==true){
            catVal[catValId] = document.getElementById(i).value;
            catValId++;
        }
        
    }
    if(catVal.length>0){
        categories = catVal;
        // console.log("cat is: "+catVal);
    } else{
        
    console.log("categories is 0");
    }
    
    
    //find the selected cities
        const city = [];
        const cityVal = [];
        let cityValId = 0;
    
        for(let i = 0; i <= cityLength; i++){
            city[i] = document.getElementById(i);
            if(city[i].checked==true){
                cityVal[cityValId] = document.getElementById(i).value;
                cityValId++;
            }
            
        }
        if(cityVal.length>0){
            cities = cityVal;
            // console.log("city is: "+cityVal);
        } else{
            
        console.log("city is 0");
    
    
        }
        console.log("Max-Price : "+maxprice);
        console.log("Price Variant : "+priceVariant);
        console.log("categories : "+categories);
        console.log("Cities : "+cities);
    }