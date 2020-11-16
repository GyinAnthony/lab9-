function checkform() 
{


    if (checklogin() && checkshipping() && checkeif0())
    {
        return true;
    }
    else
    {
        alert("Either login or Shipping box unchecked or if quanitiy is 0 or less than 0 please fix!")
    }
}

function checklogin()
{
    //mailformat had to use some google resource no clue how else to check it 
    emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    //make sure si grab right value 
    console.log(document.getElementById("email").value)
    if(document.getElementById("email").value.match(emailformat) && document.getElementById("newpass").value.length > 0){
        return true
    }
    else
    {
        return false
    }
}

function checkshipping()
{
    if(document.getElementById("free").checked == true|| document.getElementById("ovn").checked == true || document.getElementById("sd").checked == true)
    {
        console.log(document.getElementById("free").checked,document.getElementById("ovn").checked,document.getElementById("sd").checked)
        return true;
    }
    else
    {
        false;
    }
}
function checkeif0()
{
    if(document.getElementById("racquet_quantity").value >= 0 && document.getElementById("mowNum").value >= 0 && document.getElementById("shoe_quantity").value >= 0 && document.getElementById("damper_quantity").value <= 1){
        return true
    }
    else{
        return false
    }
} 

