import { incrementByOne, decrementByOne, clearNumber } from "../utility/counter.js";
import { calculateInterest, formatCurrency } from "../utility/interest.js";
import { fetchData } from "../utility/fetchUser.js";

window.fetchData = fetchData;

//CounterJS -- not a library
window.incrementByOne = incrementByOne;
window.decrementByOne = decrementByOne;
window.clearNumber = clearNumber;

// Compound Interest Calculator
window.calculateInterest = calculateInterest;
window.formatCurrency = formatCurrency;

