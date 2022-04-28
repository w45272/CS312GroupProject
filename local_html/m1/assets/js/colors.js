
        var currentSelected=[]; //current list of colors selected by dropdowns
        var prevSelected = "";  //holder for old color when checking if new color is already selected
        var selectedColor = ""; //Chosen color from radio buttons
        var selectedList = 0;
        var colorLists = [];
        
        
        //document ready handler
        document.addEventListener('DOMContentLoaded', (e)=>{
            selectedColor = document.getElementById("color_select0").value;

        });
        
        //helper function: updates the dropdown selected colors 
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
            var box = "cBox" + e.target.id.substring(12);
            document.getElementById(box).style.fill = e.target.value;   
            updateColor(e.target.id.substring(12));
        }
        //handler: set background color to selected on click
        function tableClick(e){
            //document.getElementById(e.target.id).className=selectedColor;
            e.target.className=selectedColor;
            addToTableList(e);
        }
        function addToTableList(e){
            if(colorLists[selectedList].includes(e.target.id)) return;
            for(const list of colorLists){
                if(list.includes(e.target.id)){
                    for(var i=0;i<list.length; i++){
                        if(list[i] === e.target.id){
                            list.splice(i,1);
                        }
                    }
                }
            }            
            colorLists[selectedList].push(e.target.id);
            //console.log(colorLists[selectedList].toString());

            updateLists();            
        }
        function updateLists(){ 
            //console.log("lists: "+colorLists.length);          
            for(var i=0; i<colorLists.length; i++){
                document.getElementById("color_list"+i).innerText = colorLists[i].toString();
            }
        }
        
        //helper function: check if color is already in list when picking new color
        function validateChange(e){
                                    
            let x = document.getElementById('warning_msg');
            if(x != null){x.remove();}
                    
            if(currentSelected.includes(e.target.value)){
                e.target.value=prevSelected;
                e.target.insertAdjacentHTML('beforebegin', "<p id='warning_msg'>Please choose an unused color!</p>");                
                
                }
            else{saveValue(e);}
        }
           function setChosenColor(e){
                selectedColor = document.getElementById("color_select"+e.target.value).value; 
                selectedList = e.target.value;
                               
           }
           function updateColor(e){
                for(const id of colorLists[e]){
                    document.getElementById(id).className = selectedColor;
                } 
           }        

