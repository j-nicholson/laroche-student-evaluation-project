    let year = new Date();
    let select = document.getElementById('studentYear');
    for(let i=year.getFullYear()-3;i <= year.getFullYear(); i++){
          //console.log(i);
          let opt = document.createElement('option');
          opt.value = i;
          opt.innerHTML =i;
          select.appendChild(opt);
    }
