// Not a library

let countResult = document.getElementById("count-result");
let count = 0;

export function incrementByOne(){
    count += 1;
    countResult.innerHTML = count;
}

export function decrementByOne(){
    count = count;
    count -= 1;
    countResult.innerHTML = count;
}