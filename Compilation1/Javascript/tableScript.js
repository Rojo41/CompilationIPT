
const introResult  = getNumber("intro1") + getNumber("intro2") + getNumber("intro3");//conpute the total marks of intro to computing
const comProgTotal = getNumber("comProg1") + getNumber("comProg2") + getNumber("comProg3");//compute to total marks of comp prog
const iProgTotal = getNumber("iProg1") + getNumber("iProg2") + getNumber("iProg3");//compute the total marks of IPt
const total = introResult + comProgTotal + iProgTotal;//compute the total of all subject
//display all total value
document.getElementById("introTotal").innerHTML = introResult;
document.getElementById("comProgTotal").innerHTML = comProgTotal;
document.getElementById("iProgTotal").innerHTML = iProgTotal;
document.getElementById("total").innerHTML = total;

function getNumber(id){
    return parseInt(document.getElementById(id).innerHTML);//convert the text in to integer
}
