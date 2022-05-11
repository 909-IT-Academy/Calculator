let Fnum = "0";
let Lnum = "0";
let Res = "0";
let arth = null;
let arthN = 0;
let count = null;
let decimalcount = 0;
let numofop = 0;

function result() {
  if (count == "2") {
    calculate();
  }
  document.getElementById("dis").innerHTML = Res;
  Fnum = Res;
  Lnum = "0";
  console.log("result is working and its " + " " + Res);
  numofop = 1;
}

function cc() {
  Fnum = "0";
  Lnum = "0";
  Res = "0";
  arth = "0";
  arthN = 0;
  count = null;
  decimalcount = 0;

  document.getElementById("dis").innerHTML = "0";

  console.log("clear is working");
}

// finds which number is being pressed
function fun(num) {
  //for the first number
  if (arthN == "0") {
    //adding and checking for decimals
    if (num == 10 && decimalcount == 0) {
      Fnum = Fnum + ".";
      decimalcount = 1;
      console.log(".");
    } else {
      for (i = 0; i <= 9; i++) {
        if (Fnum.length <= 7) {
          if (num == i) {
            if (Fnum == "0") {
              Fnum = i.toString();
            } else {
              Fnum = Fnum + i.toString();
            }
          }
          document.getElementById("dis").innerHTML = Fnum;
          console.log("fnum" + " " + Fnum);
        }
      }
    }
  }
  //for the second number
  if (arthN == "1") {
    //adding and checking for decimals
    if (num == 10 && decimalcount == 1) {
      Lnum = Lnum + ".";
      console.log(".");
      decimalcount = 2;
    } else {
      for (j = 0; j <= 9; j++) {
        if (Lnum.length <= 7) {
          if (num == j) {
            if (Lnum == "0") {
              Lnum = j.toString();
            } else {
              Lnum = Lnum + j.toString();
            }
          }
          document.getElementById("dis").innerHTML = Lnum;
          count = 2;
        }
      }
    }
    console.log("lnum" + " " + Lnum);
  }
}
//checking which buttons is pressed
function oper(oper) {
  if (oper == "plus") {
    arth = "add";
    arthN = "1";

    console.log("add is working" + " " + arthN);
  } else if (oper == "sub") {
    arth = "sub";
    arthN = "1";
    console.log("sub is working" + " " + arthN);
  } else if (oper == "times") {
    arth = "times";
    arthN = "1";
    console.log("times is working" + " " + arthN);
  } else if (oper == "div") {
    arth = "div";
    arthN = "1";
    console.log("div is working" + " " + arthN);
  }
}

//operatoin to be performed
function calculate() {
  if (arth == "add") {
    Res = parseFloat(Fnum) + parseFloat(Lnum);
  } else if (arth == "sub") {
    Res = parseFloat(Fnum) - parseFloat(Lnum);
  } else if (arth == "times") {
    Res = parseFloat(Fnum) * parseFloat(Lnum);
  } else if (arth == "div") {
    Res = parseFloat(Fnum) / parseFloat(Lnum);
  }
}
