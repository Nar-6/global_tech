window.onload = () => {

    const button1=document.querySelector("#b1");
    const button2=document.querySelector("#b2");
    const button3=document.querySelector("#b3");
    const button4=document.querySelector("#b4");
    
    var para1=document.querySelector("#div1");
    var para2=document.querySelector("#div2");
    var para3=document.querySelector("#div3");
    var para4=document.querySelector("#div4");
    
    button1.addEventListener("click", faireApparaitre1);
    
    function faireApparaitre1(){
        para1.classList.toggle("montre");
        if(button1.innerHTML=="+")
            button1.innerHTML="-";
        else
            button1.innerHTML="+";
    }
    
    button2.addEventListener("click", faireApparaitre2);
    
    function faireApparaitre2(){
        para2.classList.toggle("montre");
        if(button2.innerHTML=="+")
            button2.innerHTML="-";
        else
            button2.innerHTML="+";
    }
    
    button3.addEventListener("click", faireApparaitre3);
    
    function faireApparaitre3(){
        para3.classList.toggle("montre");
        if(button3.innerHTML=="+")
            button3.innerHTML="-";
        else
            button3.innerHTML="+";

    }
    
    button4.addEventListener("click", faireApparaitre4);
    
    function faireApparaitre4(){
        para4.classList.toggle("montre");
        if(button4.innerHTML=="+")
            button4.innerHTML="-";
        else
            button4.innerHTML="+";
    }
    
}
