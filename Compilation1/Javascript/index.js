//
const output = document.getElementById("display");
const toggle = document.getElementById("theme");
const body = document.querySelector('body');
const contain = document.getElementById("contain");
function appendInput(input){
    output.value += input;
}
function compute(){
    //checks if the input starts with an operator then display an error
    if(isNaN(output.value[0])){
        document.getElementById("result").innerHTML = "Syntax Error";
        output.value = "" ;
    }else{
        try{
            const result = eval(output.value);//compute all the value in the input
            if(isNaN(result)){//checks if the result is NaN(Not a Number)
                document.getElementById("result").innerHTML = "0";//change the result to 0
            }else{
            const formattedNumber = new Intl.NumberFormat().format(result);//format the result Numbers into readable format
            document.getElementById("result").innerHTML = formattedNumber;//display the result
            output.value = "" ;
                }
            }
            catch(error){//catches an error 
                document.getElementById("result").innerHTML = "Syntax Error";
                output.value = "" ;
            }   
    }
}
function squareRoot(){
    try{
        const result = Math.sqrt(output.value);//function to evaluate square root
        const formattedNumber = new Intl.NumberFormat(undefined, {
        minimumFractionDigits: 0,
        maximumFractionDigits: 2,
      }).format(result);// format into 2 decimal places
      if(!isNaN(result)){
         document.getElementById("result").innerHTML = formattedNumber;
      output.value = "";//checkes if result is Not a number
    }
      else{
        document.getElementById("result").innerHTML = "Syntax Error";
        output.value = "";
        //display an error 
      }
   
    }
    catch(error){//catches an error
        document.getElementById("result").innerHTML = "Error";
        output.value = "" ;
    }
}
//clear all dislay
function clearDisplay(){
    document.getElementById("result").innerHTML = "0";
    output.value = "";

}
//clear end
function backspace() {
    output.value=output.value.substring(0,output.value.length -1);
  
}
//get the current answer 
function getAnswer(){
    output.value = document.getElementById("result").innerHTML;
    document.getElementById("result").innerHTML = "0";
}
//for changing theme
toggle.addEventListener('click', function(){
    this.classList.toggle('fa-moon');//changes the clas
    if(this.classList.toggle('fa-sun')){
        body.style.background = 'rgb(245, 245, 245)';
        body.style.transition = '250ms';
        contain.style.background = 'white';
        contain.style.color = "black"
        output.style.color = 'black';
        output.style.background = 'white';

    }else{
        body.style.background = '#333';
        contain.style.background =  '#333';
        contain.style.color = "white";
        output.style.color = 'white';
        output.style.background = '#333';
    }
})
 