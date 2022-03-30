
        var currentSelected=[];
        var prevSelected = "";
        

        function saveValue(e){
            prevSelected = e.target.value;
            
            let x = document.getElementById('warning_msg');
                if(x != null){x.remove();}
            //console.log("old =" + e.target.value);
            
            currentSelected =[];
            const allSel = document.querySelectorAll('.color_select');           
            for (const sel of allSel){
                currentSelected.push(sel.value);
            }
            //console.log("array:" +currentSelected);
            
        }
        function validateChange(e){
        
            let x = document.getElementById('warning_msg');
            if(x != null){x.remove();}
                    
            if(currentSelected.includes(e.target.value)){
                e.target.value=prevSelected;
                e.target.insertAdjacentHTML('beforebegin', "<p id='warning_msg'>Please choose an unused color!</p>");                
                
                }
            else{saveValue(e);}
        }        

