function checkForm(){

   var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
   var shippingSelected = false;
   var shippingChoice = "";
   var shippingCost = 0.0;
   var itemOneQuantity = document.getElementById("feItemOneQuantity").value;
   var itemTwoQuantity = document.getElementById("feItemTwoQuantity").value;
   var itemThreeQuantity = document.getElementById("feItemThreeQuantity").value;
   var userName = document.getElementById("userNameInput").value;
   var userPassword = document.getElementById("userPasswordInput").value;
   var shippingOptions = document.getElementsByName('shipping');
    
   for(var x = 0 ; x < shippingOptions.length ; x++){
       if( shippingOptions[x].checked == true){
       shippingSelected = true;
       shippingChoice = shippingOptions[x].value;
       }
   }
   
   if(shippingChoice == "overnight")
   shippingCost = 50.00;
   if(shippingChoice == "threeDay")
   shippingCost = 5.00;
   
   
   var checkOne = ((itemOneQuantity >=0)||(itemOneQuantity == null));
   var checkTwo = ((itemTwoQuantity >=0)||(itemTwoQuantity == null));
   var checkThree =((itemThreeQuantity >=0)||(itemThreeQuantity ==null));
   var checkFour = regex.test(userName);
   var checkFive = (userPassword != "");
   var checkSix = shippingSelected;
   if (!(checkOne && checkTwo && checkThree && checkFour && checkFive && checkSix)){alert("invalid input");}
 return (checkOne && checkTwo && checkThree && checkFour && checkFive && checkSix);
}