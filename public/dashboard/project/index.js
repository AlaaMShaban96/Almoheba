function showAddProject() {
  var url= window.location.hostname;
  var port= window.location.port;
  var form =document.getElementById('card-form');
  
  form.action="";
  document.getElementById('name').value="";
  document.getElementById('description').value="";
  document.getElementById('details').value=null;

  document.getElementById('addProject').classList.toggle('project');
  document.getElementById('addProject').classList.add('add-project');
  document.getElementById('card-title').innerHTML='اضافة مشروع';
  document.getElementById('card-header').classList.add('card-header-success');
  document.getElementById('card-header').classList.remove('card-header-warning');
  elementSameClass= document.getElementsByClassName('check');
    for (let item of elementSameClass) {
      item.classList.add('btn-success');
      item.classList.remove('btn-warning');
    }
    
}


function show(app,index) {
  console.log(app[index]['images']);
  var url= window.location.hostname;
  var protocol= window.location.protocol;
  var port= window.location.port;
  var link= protocol+'//'+url+':'+port+'/';

  document.getElementById('name').value=app[index]['name'];
  document.getElementById('description').value=app[index]['description'];
  $('#details').summernote('code', app[index]['details']);
  document.getElementById('card-title').innerHTML='تعديل مشروع';
  document.getElementById('card-header').classList.remove('card-header-success');
  document.getElementById('card-header').classList.add('card-header-warning');
  document.getElementById('addProject').classList.remove('project');
  document.getElementById('addProject').classList.add('add-project');
  document.getElementById('gallery').innerHTML='';

  app[index]['images'].forEach(image => {
    document.getElementById('gallery').innerHTML+=' <div class="gallery"><a target="_blank" href="'+link+image.image+'"><img src="'+link+image.image+'" alt="Cinque Terre" width="600" height="400"></a><input type="checkbox" name="deleteGallery[]" value="'+image.id+'"></div>';
});

    elementSameClass= document.getElementsByClassName('check');
    for (let item of elementSameClass) {
      item.classList.remove('btn-success');
      item.classList.add('btn-warning');
    }
    var form =document.getElementById('card-form');
  form.action="/Dashboard/project/"+app[index]['id']+"/edit";
}
 
function deletee(id) {
            
            document.getElementById("delete"+id).submit();
}