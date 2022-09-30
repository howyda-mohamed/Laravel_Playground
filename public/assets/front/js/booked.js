var slider=document.querySelector(".slider-ground"),
    arr_image=["img/ground-one.png","img/four.jfif","img/ground-two.png"],
    next=document.querySelector(".slider-ground .next"),
    prev=document.querySelector(".slider-ground .prev"),
    next_to_pay=document.querySelector(".next-to-pay"),
    full_pay=document.querySelector(".full-pay"),
    close_full_pay=document.querySelector(".full-pay .close"),
    label_one=document.querySelector(".r-one"),
    label_two=document.querySelector(".r-two"),
    con_cash=document.querySelector(".con-cash"),
    con_online=document.querySelector(".con-online"),
    button_show=document.querySelector(".show_succes"),
    full_succes=document.querySelector(".full-success"),
    inputs=document.querySelectorAll(".con-online form input"),
    input1=inputs[0],
    input2=inputs[1],
    input3=inputs[2],
    input4=inputs[3],
    input5=inputs[4],
    x=0;
    slider.children[0].children[0].src=arr_image[x]
    next.onclick=function(){
      
        if(x<arr_image.length-1){
            x++
            }
            else{
            x=0
            }
            slider.children[0].children[0].src=arr_image[x]
    }

    prev.onclick=function(){
        
        if(x<arr_image.length && x>0){
            x--
            }
            else{
           x=arr_image.length-1;
            }
            slider.children[0].children[0].src=arr_image[x]
    }


    //pay
    next_to_pay.onclick=function(e){
        e.preventDefault();
        full_pay.style.visibility="visible";
        full_pay.style.opacity="1"
        document.documentElement.style.overflowY="hidden"
        full_pay.style.overflow="auto"
    }
    close_full_pay.onclick=function(){
        full_pay.style.visibility="hidden";
        full_pay.style.opacity="0"
        document.documentElement.style.overflowY="visible"
        full_pay.style.overflow="hidden"
    }
    label_one.onclick=function(){
        con_online.classList.remove("active_pay")
        con_cash.classList.add("active_pay")
    }
    label_two.onclick=function(){
        con_cash.classList.remove("active_pay")
        con_online.classList.add("active_pay")
        label_one.classList.remove("active_pay")
    }
    button_show.onclick=function(e){
        e.preventDefault();
     
        function disappear(){
            full_succes.style.visibility="hidden"
            full_succes.style.opacity="0"
            full_pay.style.visibility="hidden";
            full_pay.style.opacity="0"
            document.documentElement.style.overflowY="visible"
            full_pay.style.overflow="hidden"
        }
      
        if(input1.value==="" || input2.value==="" || input3.value==="" || input4.value==="" || input5.value==="")

        {
           console.log("ali")
        }
        else{
            full_succes.style.visibility="visible"
            full_succes.style.opacity="1"
            setTimeout(disappear,2000)
        }
           
        
       
    }