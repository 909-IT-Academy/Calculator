
function oper(oper) {
  if (numofop == 1) {
    result();
  }

  if (oper == "plus") {
    arth = "add";
    arthN = "1";
    console.log("add is working" + " " + arthN);
    if (count == "2") {
      Res = parseFloat(Fnum) + parseFloat(Lnum);
      result();
      arthN = "1";
      console.log("add is working" + " " + arthN);
    }
  } else if (oper == "sub") {
    arth = "sub";
    arthN = "1";
    console.log(parseFloat(Fnum) - parseFloat(Lnum));
    if (count == "2") {
      Res = parseFloat(Fnum) - parseFloat(Lnum);
      result();
      console.log("sub is working" + " " + arthN);
    }
  } else if (oper == "times") {
    arth = "times";
    arthN = "1";
    console.log("tmes is working" + " " + arthN);
    if (count == "2") {
      Res = parseFloat(Fnum) * parseFloat(Lnum);
      result();
    }
  } else if (oper == "div") {
    arth = "div";
    arthN = "1";
    console.log("div is working" + " " + arthN);
    if (count == "2") {
      Res = parseFloat(Fnum) / parseFloat(Lnum);
      result();
    }
  } else if (oper == "dec") {
    arth = ".";
    arthN = "1";
    if (count == "2") {
      Res = parseFloat(Fnum) + parseFloat(Lnum);
      result();
    }
  
  }



}
