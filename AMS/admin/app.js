

document.querySelector('.all').addEventListener('click',function(event){
    // below code prevent from submiting or reloading the form
    event.preventDefault();
    document.querySelector('.all').style.display="none";
    document.querySelector('.cross').style.display="inline";
    document.querySelector('.table-staff').style.display="inline"
    document.querySelector('.leave').style.display="none"
    document.querySelector('.performance').style.display="none"
    document.querySelector('.remove').style.display="none"
    document.querySelector('.Leave-request').style.display="none"



})


document.querySelector('.cross').addEventListener('click',function(event){
    // below code prevent from submiting or reloading the form
    event.preventDefault();
    document.querySelector('.all').style.display="inline";
    document.querySelector('.cross').style.display="none";
    document.querySelector('.table-staff').style.display="none"
    document.querySelector('.leave').style.display="inline"
    document.querySelector('.performance').style.display="inline"
    document.querySelector('.remove').style.display="inline"
    document.querySelector('.lr').style.display="none"
    document.querySelector('.table-remove').style.display="none"
    document.querySelector('.user').style.display="none"
    document.querySelector('.submit').style.display="none"


})




document.querySelector('.leave').addEventListener('click',function(event){
    // below code prevent from submiting or reloading the form
    event.preventDefault();
    document.querySelector('.all').style.display="none";
    document.querySelector('.cross').style.display="inline";
    document.querySelector('.lr').style.display="inline"
    document.querySelector('.leave').style.display="none"
    document.querySelector('.performance').style.display="none"
    document.querySelector('.remove').style.display="none"



})


document.querySelector('.remove').addEventListener('click',function(event){
    // below code prevent from submiting or reloading the form
    event.preventDefault();
    document.querySelector('.all').style.display="none";
    document.querySelector('.cross').style.display="inline";
    document.querySelector('.user').style.display="inline"
    document.querySelector('.submit').style.display="inline"

    document.querySelector('.leave').style.display="none"
    document.querySelector('.performance').style.display="none"
    document.querySelector('.remove').style.display="none"



})

// document.querySelector('.submit').addEventListener('click',function(event){
//     // below code prevent from submiting or reloading the form
    
//     var user_id= document.querySelector('.c').value;
//     if(user_id.length<1){
//         alert("Enter user id first")
//     }else{
        
//         // document.querySelector('.table-remove').style.display="inline"
//     }




// })

