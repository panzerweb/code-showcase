// Not a library

let countResult = document.getElementById("count-result");
let count = 0;

export function incrementByOne(){
    count += 1;
    countResult.innerHTML = count;
}

export function decrementByOne(){
    count = count;
    
    if (count <= 0) {
        alert("Can't go below 0!");
    }else{
        count -= 1;
    }
    countResult.innerHTML = count;
}

export function clearNumber(){
    count = 0;
    countResult.innerHTML = count;
}