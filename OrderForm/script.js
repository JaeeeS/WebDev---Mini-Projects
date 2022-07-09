function selectCode(){
        var x = document.getElementById("prodcode").value;
        var y = document.getElementById("quantity").value;
        $.ajax({
            url:"dummy4show.php",
            method: "POST",
            data:{
                    id: x,
                    quantity: y,},
            success:function(data){
                $(".ans").html(data);}
                })    
    }

function selectCode2(){
        var x = document.getElementById("prodcode2").value;
        var y = document.getElementById("quantity2").value;
        $.ajax({
            url:"dummy4show.php",
            method: "POST",
            data:{
                    id: x,
                    quantity: y,},
            success:function(data){
                $(".ans2").html(data);}
                })
    }

function selectCode3(){
        var x = document.getElementById("prodcode3").value;
        var y = document.getElementById("quantity3").value;
        $.ajax({
            url:"dummy4show.php",
            method: "POST",
            data:{
                    id: x,
                    quantity: y,},
            success:function(data){
                $(".ans3").html(data);}
                })
    }

function selectCode4(){
        var x = document.getElementById("prodcode4").value;
        var y = document.getElementById("quantity4").value;
        $.ajax({
            url:"dummy4show.php",
            method: "POST",
            data:{
                    id: x,
                    quantity: y,},
            success:function(data){
                $(".ans4").html(data);}
                })
    }

function selectCode5(){
        var x = document.getElementById("prodcode5").value;
        var y = document.getElementById("quantity5").value;
        $.ajax({
            url:"dummy4show.php",
            method: "POST",
            data:{
                    id: x,
                    quantity: y,},
            success:function(data){
                $(".ans5").html(data);}
                })
    }

