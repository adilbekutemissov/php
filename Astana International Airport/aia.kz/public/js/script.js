function show(state)
{
    document.getElementById('window').style.display = state;	
	document.getElementById('gray').style.display = state; 		
}

window.onload = function(){
    get_data('../public/data/templates.json', function(structure_list) {
        render_html_table(structure_list);
    });

    function get_data(url, callback){
        fetch(url).then(res => res.json()).then(res => {
            callback(res)
        });
    }

    function render_html_table(elems){
        const list = elems;
        
        const structure_list = document.getElementById('structure-list');

        

        list.forEach(item => {
            if(item.url_name === window.location.pathname){
                item.contents.forEach(content=>{
                    const listItem = document.createElement('li');
                    const h3 = document.createElement('h3');
                    const p = document.createElement('p');

                    listItem.classList.add('media-list');
                    h3.classList.add('media__title');
                    p.classList.add('media__summary');
                    listItem.appendChild(h3);
                    listItem.appendChild(p);
                    
                    h3.innerText = content.title;
                    p.innerText = content.text;
                    listItem.appendChild(h3)
                    listItem.appendChild(p)
                    structure_list.appendChild(listItem)
                })
            }
        });
    }
}