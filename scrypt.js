const form = document.querySelector("#form");

function submitFunc(e) {
    e.preventDefault();
    let $ = (query) => document.querySelector(query);

    let a = $("#a").value;
    let b = $("#b").value;
    let c = $("#c").value;

    if(a== "") {
        alert("Please enter your OOO");
        return false;
    }
    if(b == "") {
        alert("Please enter you type_of_tax");
        return false;
    }
    if(c == "") {
        alert("Please enter you tax_amount");
        return false;
    }
    console.log(a,b,c);
  //  alert("All datas are valid!, send it to the server!")

    return true;


    // form.submit();
}

form.addEventListener("submit", (e) => {
    submitFunc(e);
});
