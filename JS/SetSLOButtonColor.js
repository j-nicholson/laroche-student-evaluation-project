   function setSLOButtonColor(btn, color) {
        var property = document.getElementById(btn);
        if (property.style.backgroundColor == "rgb(127, 255, 0)") {
            property.style.backgroundColor = "#FFFFFF"    
        }
        else {
            property.style.backgroundColor = "#7FFF00"
        }
    }