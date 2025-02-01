export function calculateInterest(){
    let output = document.getElementById("compounded_result");
    let principal = parseFloat(document.getElementById("principal_amount").value);
    let rate = parseFloat(document.getElementById("rate").value);
    let time = parseFloat(document.getElementById("time").value);

    if (isNaN(principal) || isNaN(rate) || isNaN(time) || principal <= 0 || rate <= 0 || time <= 0) {
        alert("Please enter valid numbers greater than zero.");
        return;
    }

    let amount = principal * (Math.pow(1 + rate / 100, time));
    let result = amount - principal;

    output.innerHTML = result;
    console.log(result)

    document.getElementById("compounded_result").innerText = formatCurrency(result);
    document.getElementById("result_section").classList.remove("d-none");
}

export function formatCurrency(amount){
    return new Intl.NumberFormat("fil-PH", {
        style: "currency",
        currency: "PHP"
    }).format(amount);
}
