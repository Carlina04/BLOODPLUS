function openNav() {
    document.getElementById("side").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("side").style.width = "0";
  }
  
  function displayContent(num){
    var find = document.querySelector(".find-blood");
    var donate = document.querySelector(".donate-blood");
  
    find.style.display="none";
    donate.style.display="none";
  
    if (num==0) {
      find.style.display="block";
    }else{
      donate.style.display="block";
    }
  
  }

  